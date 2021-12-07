<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes([
    'register' => false,
]);


Route::middleware('auth')->group(function () {
    Route::get('/admin-panel', [AdminController::class, 'admin'])->name('admin');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
