<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CvController extends Controller
{

    public function download()
    {
        $path = public_path('files/CV_Melina.pdf');

        if (!File::exists($path)) {
            abort(404, 'CV non disponible.');
        }

        return response()->download($path, 'CV_Melina.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
