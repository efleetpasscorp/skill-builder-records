<?php
use Illuminate\Support\Facades\Route;
use Fleetpass\RdAgent\Http\Controllers\IngestController;

// Mounted at /api/rd-agent by the service provider, protected by the agent token.
Route::middleware(['api', \Fleetpass\RdAgent\Http\Middleware\VerifyAgentToken::class])
    ->prefix('api/rd-agent')->group(function () {
        Route::post('/ingest', [IngestController::class, 'ingest']);     // single data point
        Route::post('/ingest/batch', [IngestController::class, 'batch']); // many at once
        Route::get('/health', [IngestController::class, 'health']);
    });
