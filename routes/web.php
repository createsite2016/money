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
Route::get('/register', function () {
    return view('register');
});

Route::post('/save', [RegistrationController::class, 'save']);
Route::post('/auth', [LoginController::class, 'auth']);
Route::get('/logout',[LoginController::class, 'logout']);


