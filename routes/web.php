<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\Auth\RegisterController;

Route::get('/', function () {
    return view('User.home');
})->name('home');


Route::get('/admin/register', [RegisterController::class, 'index'])->name('admin.register');

Route::post('/admin/register', [RegisterController::class, 'store'])->name('admin.register.store');

Route::put('/admin/register/{user}', [RegisterController::class, 'update'])->name('admin.register.update');

