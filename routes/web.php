<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/About', [HomeController::class, 'about']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/Projects', [HomeController::class, 'projects']);
Route::get('/Contact', [HomeController::class, 'contact']);

Route::controller(App\Http\Controllers\CategoryController::class)->group(function () {
    Route::get('AddProject', 'index');
    Route::get('AddProject/create', 'create');
    Route::post('AddProject/create', 'store');
    Route::get('AddProject/{id}/edit', 'edit');
    Route::put('AddProject/{id}/edit', 'update');
    Route::get('AddProject/{id}/delete', 'destroy');
});