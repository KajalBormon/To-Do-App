<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TodoAppController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('/','index')->name('home');
    Route::get('/login', 'login')->name('login');
    Route::post('/signup','signUp')->name('signup');
    Route::get('/login-dashboard','loginCheck')->name('login.access');
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');
});

Route::resource('/task', TaskController::class);

Route::get('/task/toggle-status/{task}', [TaskController::class, 'statusToggle'])->name('task.toggleStatus');









/* Route::controller(TodoAppController::class)->group(function () {
    Route::get('/todo/dashboard', 'index')->name('todo.index');
    Route::get('/todo/create','create')->name('todo.create');
    Route::post('/todo/store', 'store')->name('todo.store');
    Route::get('/todo/edit/{id}', 'edit')->name('todo.edit');
    Route::delete('/todo/{id}/destroy', 'destroy')->name('todo.destroy');
}); */

