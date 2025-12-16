<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ServiceController::class, 'index'])->name('services.index');

Route::post('/order', [OrderController::class, 'store'])->name('order.store');

// Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
// Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/', [ProjectController::class, 'showPortfolio'])->name('home');