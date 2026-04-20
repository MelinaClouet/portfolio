<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function download()
    {
        Log::info("CV download requested from IP: " . request()->ip());

        $path = public_path('files/CV_Melina.pdf');

        Log::info("Checking if CV file exists at path: " . $path);

        if (!file_exists($path)) {
            Log::info("CV file not found at path: " . $path);
            abort(404, 'CV non disponible.');
        }

        Log::info("CV file found, preparing download.");

        return response()->download($path, 'CV_Melina.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
