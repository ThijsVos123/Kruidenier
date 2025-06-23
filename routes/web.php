<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('layouts.layoutadmin');
});

Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');
Route::resource('products', ProductController::class);