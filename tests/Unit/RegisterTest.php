<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->post('/register', [
            'fullName' => 'victor',  // Corrected field name
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/login');
    }
}
