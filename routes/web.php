<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('registration', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('registration', [RegistrationController::class, 'store'])->name('registration.store');

Route::post('/auth', [LoginController::class, 'auth']);
Route::get('/logout',[LoginController::class, 'logout']);


