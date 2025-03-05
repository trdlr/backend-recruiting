<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DataUploadTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_upload_data(): void
    {
        DB::table('metric_values')->truncate();
        DB::table('metrics')->truncate();

        $response = $this->post('/api/data/upload', [
            'file' => UploadedFile::fake()->createWithContent('./metrics_data.csv', file_get_contents('./metrics_data.csv')),
        ]);

        $response->assertStatus(200);
        $this->assertTrue($response->json('success'));

        $this->assertDatabaseCount('metrics', 5);
        $this->assertDatabaseCount('metric_values', 100);

    }
}
