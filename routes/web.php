<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/fleet', function () {
    return view('pages.fleet');
})->name('fleet');

Route::get('/safety', function () {
    return view('pages.safety');
})->name('safety');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Graceful redirect for old booking URL to homepage
Route::redirect('/booking', '/');
Route::redirect('/book-ride', '/');
Route::redirect('/book', '/');
