<?php
namespace Fleetpass\RdAgent\Console\Commands;

use Illuminate\Console\Command;
use Fleetpass\RdAgent\Services\RecordRouter;
use Fleetpass\RdAgent\Services\SkillsBotClient;

/**
 * Pulls data points from every configured connector, reviews/audits them, routes
 * them into the skills manager, then asks the Skills Bot to refresh the dashboard.
 * Run on a schedule (e.g. Kernel: ->dailyAt('17:30')).
 */
class AuditDataPoints extends Command
{
    protected $signature = 'rd-agent:audit {--since= : ISO-8601 watermark}';
    protected $description = 'Review & audit all data points across connectors and route them for Inspector review';

    public function handle(RecordRouter $router, SkillsBotClient $bot): int
    {
        $since = $this->option('since');
        $connectors = config('rd-agent.connectors', []);
        $total = 0; $flagged = 0;

        foreach ($connectors as $key => $class) {
            if (!class_exists($class)) { $this->warn("connector {$key}: {$class} not found"); continue; }
            /** @var \Fleetpass\RdAgent\Contracts\Connector $conn */
            $conn = app($class);
            foreach ($conn->pull($since) as $raw) {
                $res = $router->route($conn->normalise($raw));
                $total++;
                if (!empty($res['flags'])) $flagged++;
            }
            $this->info("connector {$key}: processed");
        }

        $bot->refreshDashboard();
        $this->info("Audited {$total} data point(s); {$flagged} need attention. Dashboard refreshed.");
        return self::SUCCESS;
    }
}
