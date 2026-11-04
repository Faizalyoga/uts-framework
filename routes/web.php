<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TabelsController;
use App\Http\Controllers\UiController;

// landing page
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');

// admin page
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/charts', [ChartsController::class, 'index'])->name('charts');
Route::get('/forms', [FormsController::class, 'index'])->name('forms');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/tables', [TabelsController::class, 'index'])->name('tables');
Route::get('/ui', [UiController::class, 'index'])->name('ui');
