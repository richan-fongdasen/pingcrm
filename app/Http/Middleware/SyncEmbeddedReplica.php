<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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

        Turso::sync();

        return $response;
    }
}
