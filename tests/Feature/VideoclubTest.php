<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VideoclubTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_homepage_loads()
    {
        $this->get('/')->assertStatus(200)->assertSee('Home del videoclub');
    }
}