<?php

use Illuminate\Support\Facades\Route;

Route::get('/index',[\App\Http\Controllers\BlogController::class,"index"]);
