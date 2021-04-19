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
        $response = $this->get(route('login.index'));

        $response->assertStatus(200);
    }

    public function test_store()
    {
        $password = 'Secret123';

        $user = User::factory()->create(
            [
                'password' => bcrypt($password)
            ]
        );

        $response = $this->post(
            'login',
            [
                'email' => $user->email,
                'password' => $password
            ]
        );

        $response->assertRedirect(route('user.index'));

        $this->assertAuthenticatedAs($user);
    }

    public function test_fail()
    {
        $password = 'Secret123';
        $fail_password = '1234567';

        $user = User::factory()->create(
            [
                'password' => bcrypt($password)
            ]
        );

        $response = $this->post(
            'login',
            [
                'email' => $user->email,
                'password' => $fail_password
            ]
        );

        $response->assertRedirect();
        $response->assertStatus(302);
    }
}
