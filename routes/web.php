<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');