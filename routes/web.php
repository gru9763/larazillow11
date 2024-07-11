<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\IndexController;  // to detect created controller

Route::get('/', function () {
    return Inertia::Render('Index');
});


Route::get('/tetris',[IndexController::class,'tetris']);
