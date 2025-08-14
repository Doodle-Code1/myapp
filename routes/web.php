<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogPostController;
use App\Models\BlogPost;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', function () { return view('contact.index'); })->name('contact');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

Route::get('blog', [BlogPostController::class, 'index'])->name('blog.index');
Route::get('blog/{blog}', [BlogPostController::class, 'show'])->name('blog.show');