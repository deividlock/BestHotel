<?php

namespace Tests\Unit;

use Tests\TestCase;

class HotelTest extends TestCase
{

    public function test_hotel_api(): void
    {
        $response = $this->postJson('/api/v1/search/hotel');

        $response
            ->assertStatus(200);
    }
}
