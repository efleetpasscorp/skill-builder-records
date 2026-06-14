<?php
namespace Fleetpass\RdAgent\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Fleetpass\RdAgent\Services\RecordRouter;

/** HTTP boundary between the host application server and the R&D Agent. */
class IngestController extends Controller
{
    public function __construct(private RecordRouter $router) {}

    public function ingest(Request $request)
    {
        $record = $request->validate([
            'kind' => 'nullable|string',
            'date' => 'nullable|date',
            'source' => 'nullable|string',
            'author' => 'nullable|string',
        ]) + $request->all();

        return response()->json($this->router->route($record));
    }

    public function batch(Request $request)
    {
        $records = $request->input('records', []);
        $out = array_map(fn($r) => $this->router->route($r), $records);
        return response()->json(['routed' => count($out), 'results' => $out]);
    }

    public function health()
    {
        return response()->json(['ok' => true, 'agent' => 'rd-compliance-agent', 'time' => now()->toIso8601String()]);
    }
}
