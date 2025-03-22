<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// Add this specific route with a dedicated method
Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/success', function() {
    return "Registration success";
});



// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');

// Dashboard route (protected)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('logged.in');