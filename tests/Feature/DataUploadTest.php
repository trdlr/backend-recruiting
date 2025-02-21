<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class DataUploadTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_upload_data(): void
    {
        $response = $this->post('/api/data/upload', [
            'file' => UploadedFile::fake()->createWithContent('./metrics_data.csv', file_get_contents('./metrics_data.csv')),
        ]);

        $response->assertStatus(200);
        $this->assertTrue($response->json('success'));

        $this->assertDatabaseCount('metrics', 5);
        $this->assertDatabaseCount('metric_values', 100);

    }
}
