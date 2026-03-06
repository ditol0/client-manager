<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\Admin\auth\LoginController;





Route::get('/admin/register', [RegisterController::class, 'index'])->name('admin.register');

Route::post('/admin/register', [RegisterController::class, 'store'])->name('admin.register.store');

Route::put('/admin/register/{user}', [RegisterController::class, 'update'])->name('admin.register.update');




Route::middleware('is_admin')->group(function () {

    Route::get('/', function () {return view('User.home');})->name('home');

});

Route::get('/login',[LoginController::class,'show'])->name('login');

Route::post('/login',[LoginController::class,'login'])->name('login');

Route::post('/logout',[LoginController::class,'logout'])->name('logout');


Route::fallback(function () {
    return response()->view('fallback.404', [], 404);
});
