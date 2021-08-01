<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [
                'name' => 'Admin',
                'email' => 'admin123@admin.com',
                'role'  => 'Admin',
                'password' => bcrypt('1234567'),
            ],
            [
                'name' => 'Teacher',
                'email' => 'Teacher123@Teacher.com',
                'role' => 'Teacher',
                'password' => bcrypt('1234567'),
            ],
            [
                'name' => 'User',
                'email' => 'User123@User.com',
                'role' => 'Student',
                'password' => bcrypt('1234567'),
            ],
        ];

        User::truncate();

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
