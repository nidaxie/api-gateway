<?php

use Illuminate\Support\Facades\Route;

Route::middleware([
    'api.key',
    'log.request',
    'throttle:5,1'
])->get('/test', function () {
    return response()->json([
        'message' => 'Gateway geçti'
    ]);
});
