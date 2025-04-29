<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactInformationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;

Route::get('/api/contact', [ContactInformationController::class, 'index']);

Route::get('/api/blog', [BlogController::class, 'index']);
Route::get('/api/blog/recent', [BlogController::class, 'recent']);
Route::get('/api/blog/category/{category}', [BlogController::class, 'byCategory']);
Route::get('/api/blog/{slug}', [BlogPostController::class, 'show']);

Route::get('/', function () {
    return view('welcome');

});
