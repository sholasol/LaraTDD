<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
     public function test_the_homepage_contains_symfony(): void
    {
        $response = $this->get('/');

        $response->assertSee('account');

        $response->assertStatus(200);
    }
    
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}