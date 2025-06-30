<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [AdminController::class, 'index'])->name('admin.index');
Route::get('/index/category', [CategoryController::class, 'index'])->name('admin.categories');
Route::get('/index/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/index/store', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('admin.category.update');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
