<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('signuppage', function () {
    return view('signuppage');
})->name('signuppage');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('appliances', function () {
        return view('appliances');
    })->name('appliances');

    Route::get('computing', function () {
        return view('computing');
    })->name('computing');

    Route::get('fashion', function () {
        return view('fashion');
    })->name('fashion');

    Route::get('cart', function () {
        return view('cart');
    })->name('cart');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
