<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DataUploadController extends Controller
{
    public function upload(Request $request): JsonResponse
    {
        $file = $request->file('file');
        $contents = file_get_contents($file->getRealPath());

        return response()->json([
            'success' => true,
            'message' => 'Data uploaded successfully',
        ]);
    }
}
