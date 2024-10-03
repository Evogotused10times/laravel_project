<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DeliveryController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('orders', OrderController::class);
Route::resource('deliveries', DeliveryController::class);
