<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/testimonials', function () {
    return view('pages.testimonials');
});

Route::get('/blog', function () {
    return view('pages.blog-pages.blog');
});

Route::get('/blog-details', function () {
    return view('pages.blog-pages.blog-details');
});