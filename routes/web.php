<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TodoAppController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function(){
    Route::post('/register',[RegisterUserController::class,'store'])->name('auth.register.store');
    Route::get('/dashboard',[LoginController::class,'index'])->name('auth.dashboard');
    Route::get('/logout',[LoginController::class,'destroy'])->name('auth.logout');
    Route::resource('/task', TaskController::class);
    Route::get('/task/{task}/toggle-status', [TaskController::class, 'statusToggle'])->name('task.toggleStatus');
});

Route::middleware('guest')->group(function(){
    Route::post('/login',[LoginController::class,'store'])->name('auth.login.store');
    Route::get('/',[RegisterUserController::class,'create'])->name('auth.register');
    Route::get('/login',[LoginController::class,'create'])->name('auth.login');
});








