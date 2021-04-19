<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RegistrationTest extends TestCase
{
    public function test_index()
    {
        $response = $this->get(route('registration.index'));

        $response->assertStatus(200);
    }

    public function test_store()
    {
        $user = User::factory()->make();

        $response = $this->post(route('registration.store'),
        [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'Secret123'
        ], []);
        
        $response->assertStatus(302);
    }
}
