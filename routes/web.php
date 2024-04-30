<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;

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
    Route::get('/show_categorie', [CategorieController::class, 'showCategorie']);
    Route::post('/add_categorie', [CategorieController::class, 'storeCategorie']);
    Route::get('/delete_categorie/{id}', [CategorieController::class, 'deleteCategorie'])->where('id', '[0-9]+');
});

Route::get('/test', function(){
    return view('test');
});


