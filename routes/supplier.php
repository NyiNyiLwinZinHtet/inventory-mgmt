<?php

use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/suppliers', [SupplierController::class, 'index'])
    ->name('supplier.index');

Route::get('/suppliers/create', [SupplierController::class, 'create'])
    ->name('supplier.create');

Route::post('/suppliers/store', [SupplierController::class, 'store'])
    ->name('supplier.store');

Route::get('/suppliers/{supplier}/edit/', [SupplierController::class, 'edit'])
    ->name('supplier.edit');

Route::post('/suppliers/update/{supplier}', [SupplierController::class, 'update'])
    ->name('supplier.update');

Route::delete('/suppliers/{supplier}', [SupplierController::class, 'destroy'])
    ->name('supplier.destroy');
