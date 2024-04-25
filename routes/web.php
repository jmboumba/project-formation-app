<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'redirect'])->name('dashboard');
    Route::get('/admin_dashboard', [AdminController::class, 'adminDashboard']);
    Route::get('/admin_formation', [AdminController::class, 'adminFormation']);
});
