<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use App\Models\User;
use App\Models\Wall;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Truncate mongodb database
        Wall::truncate();
        Testimonial::truncate();

        // Creating a test user
        $user = User::create([
            'name' => 'Ishaan',
            'username' => 'ishaan',
            'email' => 'ishan@example.com',
            'password' => Hash::make('Admin@123'),
            'email_verified_at' => now(),
            'remember_token' => '',
        ]);

        // \App\Models\User::factory(10)->create();
        
        Wall::factory(3)->create(['user_id' => $user->id, 'username' => $user->username])->each(function ($wall){
            Testimonial::factory(20)->create(['wall_id' => $wall->_id]);
        });
    }
}
