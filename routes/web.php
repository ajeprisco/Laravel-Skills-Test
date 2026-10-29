<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return response()->file(public_path('index.html'));
});

Route::post('/insertProduct', [ProductController::Class, 'insertProduct']);
