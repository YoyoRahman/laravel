<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
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




Route::get('/index/posts', [PostController::class, 'index'])->name('admin.posts');
Route::get('/index/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
Route::post('/index/posts/store', [PostController::class, 'store'])->name('admin.posts.store');
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
Route::put('/post/{post}/update', [PostController::class, 'update'])->name('admin.posts.update');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');



Route::get('/index/banners', [BannerController::class, 'index'])->name('admin.banners');
// Route::get('/index/create', [BannerController::class, 'create'])->name('admin.banner.create');
// Route::post('/index/store', [BannerController::class, 'store'])->name('admin.banner.store');
// Route::get('/banner/{banner}/edit', [BannerController::class, 'edit'])->name('admin.banner.edit');
// Route::put('/banner/{banner}/update', [BannerController::class, 'update'])->name('admin.banner.update');
// Route::delete('/banner/{banner}', [BannerController::class, 'destroy'])->name('admin.banner.destroy');
