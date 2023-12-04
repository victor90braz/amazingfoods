<?php

namespace Database\Seeders;

use App\Models\Register;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'full_name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

    }
}
