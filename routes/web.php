<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/About', [HomeController::class, 'about']);
Route::get('/Projects', [HomeController::class, 'projects']);
Route::get('/Contact', [HomeController::class, 'contact']);

