<?php

namespace App\Services\Api\V1\Dto;

/**
 * Defines the structure for parsing the api response
 * 
 * @author Deivid Lockwood
 */
class SearchHotelDto
{
    public function __construct(
      public string $name,
      public string $description,
      public string $link,
      public array $gpsCoordinates,
      public string $price,
      public string $star,
      public string $image,
    ){
    }

}