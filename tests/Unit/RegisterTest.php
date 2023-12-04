<?php

namespace Tests\Unit;

use App\Http\Controllers\RegisterController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Validation\Rules\Password;
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
        $response->assertStatus(302); // Check for a redirect status
        $response->assertRedirect('/');
        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);
    }
}
