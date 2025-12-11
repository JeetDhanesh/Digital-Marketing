<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. (Optional) Comment this out if you don't want the 'test@example.com' user
        // \App\Models\User::factory(10)->create();

        // 2. Add this line to run your specific AdminSeeder file
        $this->call([
            AdminSeeder::class,
        ]);
    }
}