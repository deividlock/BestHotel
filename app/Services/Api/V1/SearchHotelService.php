<?php

namespace App\Services\Api\V1;

use Illuminate\Support\Facades\Http;
use App\Services\Api\V1\ApiConnectionService;
use App\Services\Api\V1\Dto\SearchHotelDto;

/**
 * Prepare the data for return to controller
 * 
 * @author Deivid Lockwood
 */
class SearchHotelService
{
    protected $apiConnectionService;

    /**
     * Send the search data
     *
     * @param array $data
     * @param string $url
     * @param string $method
     * @return array
     */
    public function searchHotel(array $data, string $url, string $method): array
    {
        return $this->searchParsing(ApiConnectionService::apiRequest($data, $url, $method));
    }

    /**
     * Organize the data to be returned
     *
     * @param object $response
     * @return array
     */
    private function searchParsing(object $response): array
    {
        if(!isset($response['properties'])) {
            return [];
        }
        
        return array_map(function($resp) {
            return new SearchHotelDto(
                $resp['name'],
                $resp['description'] ?? false,
                $resp['link'] ?? false,
                $resp['gps_coordinates'] ?? false,
                isset($resp['prices'][0]['rate_per_night']['lowest']) ? $resp['prices'][0]['rate_per_night']['lowest'] : (isset($resp['rate_per_night']['lowest']) ? $resp['rate_per_night']['lowest'] : config('general.message.no_information')),
                $resp['overall_rating'] ?? 0,
                $resp['images'][0]['thumbnail'] ?? config('general.param_default.url_no_image')
                );
            }, $response['properties']);
    }
}
