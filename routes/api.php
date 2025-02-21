<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/data/upload', [\App\Http\Controllers\DataUploadController::class, 'upload']);
Route::get('/stats/user-daily', [\App\Http\Controllers\MetricStatsController::class, 'userDaily']);

Route::get('/test', function (Request $request) {
    return response()->json(['message' => 'Hello World!']);
});