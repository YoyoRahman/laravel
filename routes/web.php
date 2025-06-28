<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [AdminController::class, 'index']);
Route::get('/index/category', [CategoryController::class, 'index']);
Route::get('/index/category/create', [CategoryController::class, 'create']);
