<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Header'dan API key al
        $apiKey = $request->header('X-API-KEY');

        // Eğer API key yoksa
        if (!$apiKey) {
            return response()->json([
                'error' => 'API Key gerekli'
            ], 401);
        }

        // Veritabanında kontrol et
        $exists = DB::table('api_keys')
            ->where('key', $apiKey)
            ->where('is_active', true)
            ->exists();

        // Eğer key geçersizse
        if (!$exists) {
            return response()->json([
                'error' => 'Geçersiz API Key'
            ], 403);
        }

        // Her şey doğruysa devam et
        return $next($request);
    }
}
