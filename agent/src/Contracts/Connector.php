<?php
namespace Fleetpass\RdAgent\Contracts;

/**
 * A Connector is an adapter to one external system (task manager, timesheet app,
 * document centre, reports/financials/accounting). The host app binds a concrete
 * implementation per system; the AI Agent stays application-agnostic ("any app
 * with Laravel support").
 */
interface Connector
{
    /** Pull data points since a watermark (ISO-8601). Returns an array of normalised records. */
    public function pull(?string $since = null): array;

    /** Normalise a raw payload from this system into the agent's canonical record shape. */
    public function normalise(array $raw): array;
}
