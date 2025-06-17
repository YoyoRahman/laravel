<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/user', function () {

    $name = 'رائف رحماندوست ';
    return  view('user', compact('name'));
});


// Route::get('/about', [\App\Http\Controllers\PageController::class, 'about']);

Route::get('/about', [ExampleController::class, 'aboutPage']);
