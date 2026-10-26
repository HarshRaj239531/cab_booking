<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Patna Transport');
        $response->assertSee('8877177161');
    }

    public function test_fleet_page_loads_successfully(): void
    {
        $response = $this->get('/fleet');
        $response->assertStatus(200);
    }

    public function test_safety_page_loads_successfully(): void
    {
        $response = $this->get('/safety');
        $response->assertStatus(200);
    }

    public function test_contact_page_loads_successfully(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function test_booking_redirects_to_home(): void
    {
        $response = $this->get('/booking');
        $response->assertRedirect('/');
    }

    public function test_404_page_loads_gracefully(): void
    {
        $response = $this->get('/non-existent-page-xyz');
        $response->assertStatus(404);
        $response->assertSee('404');
    }
}
