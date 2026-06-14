<?php
namespace Fleetpass\RdAgent\Services;

use Illuminate\Support\Facades\Http;

/**
 * Thin client to the R&D Skills Bot (the records manager / dashboard backend).
 * The AI Agent is the *interface*; the Skills Bot is the *system of record*.
 */
class SkillsBotClient
{
    public function __construct(private array $cfg) {}

    private function req()
    {
        return Http::baseUrl(rtrim($this->cfg['base_url'] ?? '', '/'))
            ->withToken($this->cfg['key'] ?? '')
            ->acceptJson()->timeout(20);
    }

    /** File a normalised record into a skills-manager lane (run-sheets, timesheets, ...). */
    public function file(string $lane, array $record): array
    {
        return $this->req()->post("/lanes/{$lane}/records", $record)->json() ?? [];
    }

    /** Ask the Skills Bot to re-run integrity/compliance audit and refresh the dashboard. */
    public function refreshDashboard(): array
    {
        return $this->req()->post('/dashboard/refresh')->json() ?? [];
    }

    /** Push the latest ATO schedule metadata so the compliance panel stays current. */
    public function updateAtoSchedule(array $meta): array
    {
        return $this->req()->post('/compliance/ato-schedule', $meta)->json() ?? [];
    }
}
