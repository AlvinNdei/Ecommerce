<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('signuppage', function () {
    return view('signuppage');
})->name('signuppage');



Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');

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

    Route::get('payment', function () {
        return view('payment');
    })->name('payment');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
