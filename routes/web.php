<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');
Route::get('logout', function () {
    return view('welcome');
})->name('logout');
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('appliances', function () {
    return view('appliances');
})->name('appliances');
Route::get('signuppage', function () {
    return view('signuppage');
})->name('signuppage');
Route::get('register', function () {
    return view('signuppage');
})->name('register');

Route::post('/register', [AuthController::class, 'register']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
