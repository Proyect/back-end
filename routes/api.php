<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', [ProductController::class,"index"])->name("index");//list

Route::get('/products/{id}', [ProductController::class,"show"])->name("product.id");

Route::get('/category', [CategoryController::class,"index"])->name("category.list");

Route::get('/category/{id}', [ProductController::class,"getProductsByCategory"])->name("category.id");