<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){
    Route::get('/',[RegisterController::class,'create'])->name('auth.register');

    Route::get('/login',[LoginController::class,'create'])->name('auth.login');
    Route::post('/login',[LoginController::class,'store'])->name('auth.login.store');
});

Route::middleware(['auth'])->group(function(){
    Route::post('/register',[RegisterController::class,'store'])->name('auth.register.store');
    Route::get('/dashboard',[LoginController::class,'index'])->name('auth.dashboard');
    Route::resource('/tasks', TaskController::class);
    Route::get('/tasks/{task}/toggle-status', [TaskController::class, 'statusToggle'])->name('task.toggleStatus');
    Route::post('/logout',[LoginController::class,'destroy'])->name('auth.logout');
});










