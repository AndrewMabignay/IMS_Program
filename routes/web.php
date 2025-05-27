<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');


// ADMIN
Route::get('/admin/product/category', [CategoryController::class, 'index'])->name('admin.category');
Route::post('/admin/product/category', [CategoryController::class, 'store'])->name('admin.category.store');