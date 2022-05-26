<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     *@test
     */
    public function can_authenticate_and_return_token()
    {
        $response = $this->get('/api/authenticate');

        $response->assertStatus(200);
    }
    public function can_get_branches()
    {
        $response = $this->get('/api/branches');

        $response->assertStatus(200);
    }
}
