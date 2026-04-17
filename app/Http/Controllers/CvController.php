<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function download()
    {
        $path = 'private/CV_Mélina.pdf';

        if (!Storage::disk('local')->exists($path)) {
            abort(404, 'CV non disponible.');
        }

        return Storage::disk('local')->download($path, 'CV_Mélina.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
