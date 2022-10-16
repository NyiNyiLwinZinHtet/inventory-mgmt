<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');

Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');

Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');

Route::post('/categories/update/{category}', [CategoryController::class, 'update'])->name('category.update');

Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])
    ->name('category.destroy');



