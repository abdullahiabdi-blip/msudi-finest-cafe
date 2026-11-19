<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () { return view('home'); });
Route::get('/our-products', [ProductController::class, 'index'])->name('menu');
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contacts'); });
Route::get('/order', function () { return view('order'); });

// Order Processing
Route::post('/place-order', [OrderController::class, 'store'])->name('orders.store');

// Authentication
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Customer Dashboard
Route::get('/dashboard', [CustomerController::class, 'dashboard'])->middleware('auth');

// Admin Dashboard (Protected)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminOrderController::class, 'index']);
    Route::patch('/orders/{order}/status', [AdminOrderController::class, 'updateStatus']);
});

// JSON API Endpoint
Route::get('/api/menu', [ProductController::class, 'apiIndex']);