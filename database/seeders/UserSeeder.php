<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'uuid' => Str::uuid(),
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60)
        ]);

        User::create([
            'uuid' => Str::uuid(),
            'email' => 'kel_mawang@gmail.com',
            'password' => bcrypt('mawang23'),
            'remember_token' => Str::random(60)
        ]);
    }
}