<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/Products', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/Products/create', [ProductController::class, 'create'])
    ->name('product.create');

Route::post('/Products/store', [ProductController::class, 'store'])
    ->name('product.store');

// Route::get('/Products/{Product}/edit/', [ProductController::class, 'edit'])
//     ->name('product.edit');

// Route::post('/Products/update/{Product}', [ProductController::class, 'update'])
//     ->name('product.update');

Route::delete('/Products/{product}', [ProductController::class, 'destroy'])
    ->name('product.destroy');
