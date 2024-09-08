<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\Api\V1\SearchHotelService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Inertia\Inertia;

/**
 * Manage the hotel search and list
 * 
 * @author Deivid Lockwood
 */
class SearchHotelController extends Controller
{
   protected $searchHotelService;

   public function __construct(SearchHotelService $searchHotelService)
   {
      $this->searchHotelService = $searchHotelService;
   }
   /**
    * Process the request of hotel search
    * 
    * @param object Request
    */
   public function __invoke(Request $request)
   {
       $data = [
        'q' => $request->input('search') ?? config('general.param_default.country'),
        'check_in_date' => $request->input('check_in_date') ?? config('general.param_default.check_in_date'),
        'check_out_date' => $request->input('check_out_date') ?? config('general.param_default.check_out_date'),
        'engine' => config('general.param_default.engine'),
        'api_key' => config('general.hotel_api.api_key')
       ];
 
      return [
         'data' =>$this->searchHotelService->searchHotel($data, config('general.hotel_api.url'), config('general.methods.get'))
     ];
     
   }
   public function __phpinfo()
   {
      phpinfo();
   }
   
}
