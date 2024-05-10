<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'index']);
Route::get('/products',[ProductController::class,'create']);
Route::post('/store',[ProductController::class,'store']);
