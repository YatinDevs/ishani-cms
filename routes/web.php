<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomGalleryController;
use App\Http\Controllers\FranchiseInfoController;
use App\Http\Controllers\FranchiseTestimonialController;
use App\Http\Controllers\ContactInformationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;

Route::get('/api/showroomgallery', [ShowroomGalleryController::class, 'index']);
Route::get('/api/contact', [ContactInformationController::class, 'index']);
Route::get('/api/franchise', [FranchiseInfoController::class, 'index']);
Route::get('/api/testimonials', FranchiseTestimonialController::class);
Route::get('/api/franchise/brochure', [FranchiseInfoController::class, 'downloadBrochure']);
Route::get('/franchise-info/brochure/download', [FranchiseInfoController::class, 'serveBrochure']);


Route::get('/api/blog', [BlogController::class, 'index']);
Route::get('/api/blog/recent', [BlogController::class, 'recent']);
Route::get('/api/categories', [BlogController::class, 'byCategory']);
Route::get('/api/blog/category/{category}', [BlogController::class, 'byCategory']);
Route::get('/api/blog/{slug}', [BlogController::class, 'show']);

Route::get('/', function () {
    return view('welcome');

});
