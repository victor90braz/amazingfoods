<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * A basic test example.
     */
    public function test_the_application_registers_a_user_successfully(): void
    {
        $response = $this->post('/register/store', [
            'fullName' => 'victor',
            'email' => 'test@example.com',
            'password' => 'password123!P',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/');
        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);
    }
}
