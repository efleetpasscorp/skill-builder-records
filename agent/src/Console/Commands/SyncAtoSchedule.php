<?php
namespace Fleetpass\RdAgent\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Fleetpass\RdAgent\Services\SkillsBotClient;

/**
 * Locates the latest ATO R&D Tax Incentive Schedule instructions, caches the
 * metadata (year, QC id, last-updated, URL), and pushes it to the Skills Bot so
 * the compliance panel stays current. Run weekly.
 */
class SyncAtoSchedule extends Command
{
    protected $signature = 'rd-agent:sync-ato';
    protected $description = 'Fetch the latest ATO R&D Tax Incentive Schedule and update the compliance framework';

    public function handle(SkillsBotClient $bot): int
    {
        $cfg = config('rd-agent.ato');
        $url = $cfg['instructions_url'];

        $resp = Http::timeout(30)->get($url);
        if (!$resp->ok()) { $this->error("ATO fetch failed: HTTP {$resp->status()}"); return self::FAILURE; }

        // Extract the "Last updated" date if present.
        $lastUpdated = null;
        if (preg_match('/Last updated\s*<\/?[^>]*>?\s*([0-9]{1,2} \w+ [0-9]{4})/i', $resp->body(), $m)) {
            $lastUpdated = $m[1];
        }

        $meta = [
            'schedule_year' => $cfg['schedule_year'],
            'qc' => $cfg['qc'],
            'company_return' => $cfg['company_return'],
            'url' => $url,
            'last_updated' => $lastUpdated,
            'synced_at' => now()->toIso8601String(),
            'sha256' => hash('sha256', $resp->body()),
        ];

        File::ensureDirectoryExists(dirname($cfg['cache_path']));
        File::put($cfg['cache_path'], json_encode($meta, JSON_PRETTY_PRINT));
        $bot->updateAtoSchedule($meta);

        $this->info("ATO schedule {$meta['schedule_year']} synced (last updated: ".($lastUpdated ?? 'n/a').").");
        return self::SUCCESS;
    }
}
