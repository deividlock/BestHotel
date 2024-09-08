<?php

namespace App\Services\Api\V1;

use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Services\UtilsTrait;

/**
 * Hanbles the request to the hotel prices endpoint
 * 
 * @author Deivid Lockwood
 */
final class ApiConnectionService
{
    protected $utilsTrait;

    public function __construct(UtilsTrait $utilsTrait)
    {
        $this->utilsTrait = $utilsTrait;
    }

    /**
     * Consume the hotel prices endpoint
     *
     * @param array $data
     * @param string $url
     * @param string $method
     * @return object|array
     */
    static function apiRequest(array $data = [], string $url, string $method) : object|array
    {
        try {
            $response = Http::$method($url, $data);
           
        } catch (\Exception $e) {
            $response = [
                'code' => $e->getCode(),
                'message' => $this->utilsTrait->getErrorMessage($e->getCode())
            ];
        }

        return $response ?? [];

    }
}
