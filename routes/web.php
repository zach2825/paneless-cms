<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('testing', function(){
    return \App\Models\Blog::with('posts')->get();
});

Route::resource('posts', \App\Http\Controllers\PostController::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
