<?php
namespace Fleetpass\RdAgent;

use Illuminate\Support\ServiceProvider;
use Fleetpass\RdAgent\Services\RecordRouter;
use Fleetpass\RdAgent\Services\SkillsBotClient;
use Fleetpass\RdAgent\Console\Commands\AuditDataPoints;
use Fleetpass\RdAgent\Console\Commands\SyncAtoSchedule;

class RdAgentServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/rd-agent.php', 'rd-agent');

        $this->app->singleton(SkillsBotClient::class, fn($app) =>
            new SkillsBotClient(config('rd-agent.skills_bot')));

        $this->app->singleton(RecordRouter::class, fn($app) =>
            new RecordRouter($app->make(SkillsBotClient::class), config('rd-agent.routing'), config('rd-agent.connectors')));
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->publishes([__DIR__.'/../config/rd-agent.php' => config_path('rd-agent.php')], 'rd-agent-config');

        if ($this->app->runningInConsole()) {
            $this->commands([AuditDataPoints::class, SyncAtoSchedule::class]);
        }
    }
}
