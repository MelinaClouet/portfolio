<?php

use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/projets', function () {
    return view('pages.projects');
});

Route::get('/a-propos', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/cv/telecharger', [CvController::class, 'download'])->name('cv.download');
