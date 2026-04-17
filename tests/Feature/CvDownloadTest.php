<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CvDownloadTest extends TestCase
{
    public function test_cv_download_fails_if_file_missing()
    {
        Storage::fake('local');

        $response = $this->get('/cv/telecharger');

        $response->assertStatus(404);
    }

    public function test_cv_download_succeeds_if_file_exists()
    {
        Storage::fake('local');

        Storage::put('private/CV_Mélina.pdf', 'fake content');

        $response = $this->get('/cv/telecharger');

        $response->assertStatus(200);
    }
}
