<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return  view('index');
});

Route::get('/user', function () {

    $name = 'یاسر';
    return  view('user', compact('name'));
});


Route::get('/about', [\App\Http\Controllers\PageController::class, 'about']);
