<?php

use Illuminate\Support\Facades\Route;

Route::get('/index',[\App\Http\Controllers\BlogController::class,"index"]);
Route::get('/create',[\App\Http\Controllers\BlogController::class,"create"]);
Route::post('/create',[\App\Http\Controllers\BlogController::class,"store"]);
Route::get('/edit/{id}',[\App\Http\Controllers\BlogController::class,"edit"]);
Route::post('/update/{id}',[\App\Http\Controllers\BlogController::class,"update"]);
Route::get('/delete/{id}',[\App\Http\Controllers\BlogController::class,"destroy"]);

