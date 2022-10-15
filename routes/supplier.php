<?php

use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/suppliers', [SupplierController::class, 'index'])
    ->name('supplier.index');

Route::get('/suppliers/create', [SupplierController::class, 'create'])
    ->name('supplier.create');

Route::post('/suppliers', [SupplierController::class, 'store'])
    ->name('supplier.store');
