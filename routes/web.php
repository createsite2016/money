<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::get('user', [UserController::class, 'index'])->name('user.index');

Route::get('registration', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('registration', [RegistrationController::class, 'store'])->name('registration.store');

Route::get('login',[LoginController::class, 'index'])->name('login.index');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


