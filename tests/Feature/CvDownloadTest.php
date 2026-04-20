<?php

namespace Tests\Feature;

use Tests\TestCase;

class CvDownloadTest extends TestCase
{
    private string $path;

    protected function setUp(): void
    {
        parent::setUp();
        $this->path = public_path('files/CV_Melina.pdf');
    }

    public function test_cv_download_fails_if_file_missing()
    {
        // Cache le fichier temporairement s'il existe
        $renamed = false;
        if (file_exists($this->path)) {
            rename($this->path, $this->path . '.bak');
            $renamed = true;
        }

        $response = $this->get('/cv/telecharger');
        $response->assertStatus(404);

        // Remet le fichier en place
        if ($renamed) {
            rename($this->path . '.bak', $this->path);
        }
    }

    public function test_cv_download_succeeds_if_file_exists()
    {
        // Crée un faux PDF temporaire si le vrai n'est pas là (ex: CI/CD)
        $created = false;
        if (!file_exists($this->path)) {
            if (!is_dir(dirname($this->path))) {
                mkdir(dirname($this->path), 0755, true);
            }
            file_put_contents($this->path, '%PDF-1.4 fake content');
            $created = true;
        }

        $response = $this->get('/cv/telecharger');
        $response->assertStatus(200);

        // Nettoie si on l'a créé
        if ($created) {
            unlink($this->path);
        }
    }
}
