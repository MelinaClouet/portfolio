<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioPagesTest extends TestCase
{
    public function test_home_page_loads()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_about_page_loads()
    {
        $response = $this->get('/a-propos');

        $response->assertStatus(200);
    }

    public function test_projects_page_loads()
    {
        $response = $this->get('/projets');

        $response->assertStatus(200);
    }

    public function test_contact_page_loads()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
