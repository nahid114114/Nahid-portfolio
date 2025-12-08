<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileUploadController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/upload-profile', [ProfileUploadController::class, 'show']);
Route::post('/upload-profile', [ProfileUploadController::class, 'upload']);
