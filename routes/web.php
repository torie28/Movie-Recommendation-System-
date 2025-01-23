<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GenderController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome'); // Ensure this view exists
});

// Authentication routes
Auth::routes();

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Welcome route
Route::get('/home', function () {
    return view('home'); // Ensure this view exists
})->name('home');

// food redirectory routes
Route::view('/young', 'young')->name('young');
Route::view('/adults', 'adults')->name('adults');
Route::view('/seniors', 'seniors')->name('seniors');
