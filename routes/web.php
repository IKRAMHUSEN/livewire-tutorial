<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('product', 'product')
    ->middleware(['auth'])
    ->name('product');

Route::view('photo', 'photo')
    ->middleware(['auth'])
    ->name('photo');

Route::get('/sucess', [App\Http\Controllers\HomeController::class, 'success'])
    ->middleware(['auth'])
    ->name('success');

Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])
    ->middleware(['auth'])
    ->name('users');

Route::get('/posts', [App\Http\Controllers\HomeController::class, 'posts'])
    ->middleware(['auth'])
    ->name('posts');

// Route::get('/counter', Counter::class)
//     ->middleware(['auth'])
//     ->name('counter');

require __DIR__ . '/auth.php';
