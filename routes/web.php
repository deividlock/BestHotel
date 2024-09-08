<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\SearchHotelController;
use App\Http\Controllers\HomeController;

Route::resource('/', HomeController::class);
Route::inertia('/', 'HomePage');

