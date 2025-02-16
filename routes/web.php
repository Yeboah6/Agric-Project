<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']) -> name('home');

Route::get('/services', [MainController::class, 'services']) -> name('services');

Route::get('/about', [MainController::class, 'about']) -> name('about');

Route::get('/contact', [MainController::class, 'contact']) -> name('contact');

Route::get('/testimonials', [MainController::class, 'testimonials']) -> name('testimonials');

Route::get('/blog', [MainController::class, 'blog']) -> name('blog');

Route::get('/blog-details/{id}', [MainController::class, 'blogDetails']) -> name('blog-details');

Route::get('/login', [AuthController::class, 'login']) -> name('login') -> middleware('alreadyLoggedIn');
Route::post('/login', [AuthController::class, 'saveLogin']) -> name('login');

Route::get('/logout', [AuthController::class, 'logout']) -> name('logout');

Route::get('/dashboard', [MainController::class, 'dashboard']) -> name('dashboard') -> middleware('isLoggedIn');
Route::get('/blogs', [MainController::class, 'blogs']) -> name('blogs') -> middleware('isLoggedIn');

Route::get('/add-post', [MainController::class, 'addPost']) -> name('add-post') -> middleware('isLoggedIn');
Route::post('/add-post', [MainController::class, 'saveAddPost']) -> name('add-post');

Route::get('/delete-post/{id}', [MainController::class, 'deletePost']) -> name('delete-post');

Route::get('/view-details/{id}', [MainController::class, 'viewDetails']) -> name('view-details');

Route::get('/edit-post/{id}', [MainController::class, 'editPost']) -> name('edit-post');
Route::post('/edit-post/{id}', [MainController::class, 'saveEditPost']) -> name('edit-post');

Route::get('/customers', [MainController::class, 'customer']) -> name('customers') -> middleware('isLoggedIn');

Route::post('/subscribe', [MainController::class, 'subscribe']) -> name('subscribe');

