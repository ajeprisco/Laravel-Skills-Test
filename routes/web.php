<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return response()->file(public_path('index.html'));
});
Route::get('/getProducts', [ProductController::Class, 'getProducts']);
Route::post('/insertProduct', [ProductController::Class, 'insertProduct']);
