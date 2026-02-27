<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CariController;

Route::middleware([
    'api.key',
    'log.request',
    'throttle:5,1'
])->get('/test', function () {
    return response()->json([
        'message' => 'Gateway geçti'
    ]);
});

Route::middleware([
    'api.key',
    'log.request',
    'throttle:5,1'
])->group(function () {

    Route::apiResource('cariler', CariController::class);

});