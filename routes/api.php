<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', [ProductController::class,"index"])->name("index");//list

Route::get('/products/{id}', [ProductController::class,"show"])->name("product.id");

Route::get('category/{id}', [ProductController::class,"category"])->name("category.id");