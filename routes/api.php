<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\ContactMessageController;

Route::apiResource('projects', ProjectController::class);
Route::apiResource('about', AboutController::class);
Route::apiResource('skills', SkillController::class);
Route::apiResource('contact-messages', ContactMessageController::class);

