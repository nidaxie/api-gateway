<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class LogRequestMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Önce isteği devam ettir
        $response = $next($request);

        // Sonra log kaydı oluştur
        DB::table('request_logs')->insert([
            'endpoint' => $request->path(),
            'method' => $request->method(),
            'ip' => $request->ip(),
            'status_code' => $response->status(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $response;
    }
}
