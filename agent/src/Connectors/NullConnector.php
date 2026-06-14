<?php
namespace Fleetpass\RdAgent\Connectors;

use Fleetpass\RdAgent\Contracts\Connector;

/** Safe default. Swap for a real connector (Asana, Harvest, SharePoint, Xero, MYOB, etc.) in the host app. */
class NullConnector implements Connector
{
    public function pull(?string $since = null): array { return []; }
    public function normalise(array $raw): array { return $raw; }
}
