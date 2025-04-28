<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactInformationController;



Route::get('/api/contact', [ContactInformationController::class, 'index']);

Route::get('/', function () {
    return view('welcome');

});
