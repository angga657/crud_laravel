<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'username' => 'admin',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => Hash::make('kilobait247')
            ],

            [
                'username' => 'user1',
                'name' => 'User1',
                'email' => 'user1@gmail.com',
                'level' => 'user',
                'password' => Hash::make('kilobait247')
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
