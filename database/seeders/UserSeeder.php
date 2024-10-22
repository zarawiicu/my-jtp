<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [

            [
                'name' => 'User 1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'user',
            ],
            [
                'name' => 'Admin 1',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'admin',
            ],
        ];

        foreach ($users as $key => $user){
            UserModel::create($user);
        }
    }
}
