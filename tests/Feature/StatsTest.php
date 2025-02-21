<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StatsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_stats(): void
    {
        $response = $this->get('/api/stats/user-daily?external_id=1094&metric_key=distance_ran');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => [
                'date',
                'value',
            ],
        ]);

        $response->assertJsonCount(1);
        $response->assertJson([
            ['date' => '2024-12-18', 'value' => 37],
        ]);
    }
}
