<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CanAuthenticateApiTest extends TestCase
{

    public function test_authenticate(Type $var = null)
    {
        $response = $this->get(route('api.authenticate'));
        $response->assertStatus(200);
    }
}
