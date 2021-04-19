<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Faker\Factory;

class RegistrationTest extends TestCase
{
    public function test_index()
    {
        $response = $this->get(route('registration.index'),[],false);

        $response->assertStatus(200);
    }

    public function test_store()
    {
        $faker = new Factory();
        $response = $this->post(route('registration.store'),
        [
            'name' => $faker->create()->name,
            'email' => $faker->create()->email,
            'password' => $faker->create()->password
        ], []);
        $response->assertStatus(302);
    }
}
