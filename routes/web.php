<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\FileController;

Route::get('send-email', [SendEmailController::class, 'index']);
Route::get('/', [FileController::class, 'index']);
Route::get('/upload', [FileController::class, 'upload']);
Route::post('/upload', [FileController::class, 'uploadVideo']);
Route::get('/video/{id}', [FileController::class, 'video']);