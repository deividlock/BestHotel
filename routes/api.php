<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\SearchHotelController;

Route::prefix('v1')->group(function () {
    //Route::post('/search/hotel', 'SearchHotelController@__invoke');
    Route::post('/search/hotel', SearchHotelController::class);

    //Route::get('/phpinfo', 'SearchHotelController@__phpinfo');
    Route::get('/phpinfo', [SearchHotelController::class,'phpinfo']);
});
