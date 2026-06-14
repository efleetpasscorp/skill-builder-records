<?php
namespace Fleetpass\RdAgent\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyAgentToken
{
    public function handle(Request $request, Closure $next)
    {
        $expected = config('rd-agent.token');
        if (!$expected || !hash_equals($expected, (string) $request->bearerToken())) {
            return response()->json(['error' => 'unauthorized'], 401);
        }
        return $next($request);
    }
}
