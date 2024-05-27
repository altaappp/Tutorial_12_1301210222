<?php
// routes/api.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lat1Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;

// Example API route
Route::get('/lat1', [Lat1Controller::class, 'index']);

// Route for creating a new user
Route::post('/user/create', [SiteController::class, 'createUser']);

// Define resource route for products
Route::resource('products', ProductController::class)->except([
    'create', 'edit'
]);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
