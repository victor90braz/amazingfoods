<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_the_application_get_basic_request_200(): void
    {
        $response = $this->get('/register/create');
        $response->assertStatus(200);
    }

    public function test_the_application_registers_a_user_successfully(): void
    {
        $response = $this->post('/register/store', [
            'full_name' => 'victor',
            'email' => 'test@example.com',
            'password' => 'password123!P',
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/');

        $this->assertDatabaseHas(User::class, ['email' => 'test@example.com']);
    }
}
