<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminModel;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'Admin 1',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('123456'),
               
            ],
            [
                'name' => 'User 1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('123456'),
                
            ],
        ];

        foreach ($admins as $key => $admin){
            AdminModel::create($admin);
        }
    }
}
