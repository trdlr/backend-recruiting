<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MetricStatsController extends Controller
{
    public function userDaily(Request $request): JsonResponse
    {
        $output = [];

        $output[] = ['date' => '2024-12-18', 'value' => 37];

        return response()->json($output);
    }
}
