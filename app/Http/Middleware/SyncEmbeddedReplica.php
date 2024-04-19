<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RichanFongdasen\Turso\Facades\Turso;
use Symfony\Component\HttpFoundation\Response;

class SyncEmbeddedReplica
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (
            (config('database.default') === 'turso') &&
            ((string) config('database.connections.turso.db_replica') !== '') &&
            DB::hasModifiedRecords()
        ) {
            Turso::sync();
        }

        return $response;
    }
}
