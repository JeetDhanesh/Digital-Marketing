<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // 1. Look for the user
        $user = User::where('email', 'admin@gmail.com')->first();

        // 2. If not found, create a new object
        if (!$user) {
            $user = new User();
            $user->email = 'admin@gmail.com';
        }

        // 3. Set/Update the details directly
        $user->name = 'admin';
        $user->password = Hash::make('admin123'); // This encrypts the password
        
        // 4. Save to database
        $user->save();
    }
}