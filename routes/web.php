<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;

// Route untuk Brand
Route::resource('brands', BrandController::class);

// Route untuk ProductCategory
Route::resource('product-categories', ProductCategoryController::class);

// Route untuk Product
Route::resource('products', ProductController::class);

Route::get('/', function () {
    return view('welcome');
});
