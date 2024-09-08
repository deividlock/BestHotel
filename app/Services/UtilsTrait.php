<?php

namespace App\Services;

/**
 * Utilities for services
 * 
 * @author Deivid Lockwood
 */
trait UtilsTrait {

    /**
     * Gets the custom error message for a request status code
     *
     * @param int $codeStatus
     * @return array
     */
    public function getErrorMessage(int $codeStatus): string
    {
        return match ($codeStatus) {
             200 => 'OK',
             204 => 'No Content',
             400 => 'Bad Request',
             403 => 'Forbidden',
             404 => 'Not Found',
             405 => 'Method Not Allowed',
             500 => 'Internal Server Error',
             503 => 'Service Unavailable',
             504 => 'Gateway Timeout',
             default => 'Unauthorized',
         };
    } 
}