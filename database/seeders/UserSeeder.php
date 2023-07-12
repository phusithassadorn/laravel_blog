<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'user_a',
            'email' => 'user_a@example.com',
            'password' => bcrypt('password')
        ]);

        User::factory()->create([
            'name' => 'user_b',
            'email' => 'user_b@example.com',
            'password' => bcrypt('password')
        ]);
    }
}
