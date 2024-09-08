<?php

use Carbon\Carbon;

/**
 * Variables of the app
 * 
 * @author Deivid Lockwood
 */

return [
    'keys' => [
        'google_key' => env('GOOGLE_API_KEY'),
    ],
    'param_default' => [
        'country' => 'Bogota',
        'engine' => 'google_hotels',
        'check_in_date' => Carbon::now()->addDays(29)->format('Y-m-d'),
        'check_out_date' => Carbon::now()->addMonths(1)->addDays(7)->format('Y-m-d'),
        'url_no_image' => "https://messagetech.com/wp-content/themes/ml_mti/images/no-image.jpg",
    ],
    'methods' => [
        'get' => 'GET',
        'post' => 'POST',
    ],
    'hotel_api' => [
        'url' => env('HOTEL_API'),
        'api_key' => env('HOTEL_API_KEY'),
    ],
    'message' => [
        'no_information' => "Not available",
    ],
];