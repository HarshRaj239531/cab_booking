<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/fleet', function () {
    return view('pages.fleet');
})->name('fleet');

Route::get('/booking', function () {
    return view('pages.booking');
})->name('booking');

Route::get('/safety', function () {
    return view('pages.safety');
})->name('safety');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
