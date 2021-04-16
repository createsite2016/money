<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{

    public function test_index()
    {
        $response = $this->get('login');

        $response->assertStatus(200);
    }

    public function test_store()
    {
        $user = User::factory()->create();
        $this->actingAs($user)->post('login');
        $this->assertAuthenticatedAs($user);
    }
}
