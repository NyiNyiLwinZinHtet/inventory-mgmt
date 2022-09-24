<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');