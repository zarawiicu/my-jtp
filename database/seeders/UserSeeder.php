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
                'is_admin' => 0,
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Admin 1',
                'email' => 'admin1@gmail.com',
                'is_admin' => 1,
                'password' => bcrypt('123456')
            ],
        ];

        foreach ($users as $key => $user){
            UserModel::create($user);
        }
    }
}
