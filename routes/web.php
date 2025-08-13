<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// routes/web.php
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogPostController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', function () { return view('contact'); })->name('contact');

Route::resource('services', ServiceController::class)->only(['index', 'show']);
Route::resource('blog', BlogPostController::class)->only(['index', 'show']);
