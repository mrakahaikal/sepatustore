<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::insert([
            [
                'name' => 'Raka Haikal',
                'email' => 'raka@mrakahaikal.com',
                'password' => bcrypt('icikiwir'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'Test Admin',
                'email' => 'test@mrakahaikal.com',
                'password' => bcrypt('testadmin'),
                'email_verified_at' => now()
            ],
        ]);
    }
}
