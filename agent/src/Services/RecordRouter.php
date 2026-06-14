<?php
namespace Fleetpass\RdAgent\Services;

/**
 * Reviews an incoming data record, classifies it, and routes it to the correct
 * skills-manager lane for Inspector/Auditor review. This is the core "direct data
 * into the correct areas" responsibility of the AI Agent.
 */
class RecordRouter
{
    public function __construct(
        private SkillsBotClient $bot,
        private array $routing,
        private array $connectors
    ) {}

    /** Classify a record's kind from its shape/source. */
    public function classify(array $record): string
    {
        $kind = strtolower($record['kind'] ?? '');
        if (isset($this->routing[$kind])) return $kind;

        // Heuristic fallback so unlabelled records still land somewhere reviewable.
        return match (true) {
            isset($record['hours']) || isset($record['timesheet_id']) => 'timesheet',
            isset($record['amount']) && ($record['ledger'] ?? null)    => 'accounting',
            isset($record['amount'])                                    => 'financial',
            isset($record['hypothesis'])                                => 'hypothesis',
            isset($record['experiment']) || isset($record['observation']) => 'experiment',
            isset($record['document_id']) || isset($record['file_url']) => 'document',
            isset($record['report_id'])                                 => 'report',
            isset($record['task_id']) || isset($record['status'])      => 'task',
            default => 'document',
        };
    }

    /** Basic audit: flag missing evidentiary fields an Inspector would expect (ALCOA+ aligned). */
    public function audit(array $record): array
    {
        $flags = [];
        foreach (['date','source','author'] as $req) {
            if (empty($record[$req])) $flags[] = "missing:{$req}";
        }
        if (($record['date'] ?? null) && strtotime($record['date']) > time()) $flags[] = 'date_in_future';
        return $flags;
    }

    /** Route a single record: classify -> audit -> file into the right lane. */
    public function route(array $record): array
    {
        $kind = $this->classify($record);
        $lane = $this->routing[$kind] ?? 'document-centre';
        $flags = $this->audit($record);

        $payload = array_merge($record, [
            'kind' => $kind,
            'lane' => $lane,
            'audit_flags' => $flags,
            'review_status' => empty($flags) ? 'ready_for_inspector' : 'needs_attention',
            'routed_at' => now()->toIso8601String(),
        ]);

        $result = $this->bot->file($lane, $payload);
        return ['lane' => $lane, 'kind' => $kind, 'flags' => $flags, 'result' => $result];
    }
}
