<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


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
                'name' => 'Teacher',
                'email' => 'teacher123@admin.com',
                'role'  => 'Teacher',
                'password' =>  Hash::make('1234678'),
                'phone_number' => '087723451862',
                'image' =>'kosong',
                'address' => 'Yogyakarta Krapyak',
                'title' => 'Fullstack Developer',
                'achievement' => '1st Hacking',
            ],
            [
                'name' => 'Admin',
                'email' => 'Admin123@Teacher.com',
                'role' => 'Admin',
                'password' => bcrypt('1234567'),
            ],
            [
                'name' => 'User',
                'email' => 'User123@User.com',
                'role' => 'Student',
                'password' =>  Hash::make('1234678'),
                'phone_number' => '087723451862',
                'image' =>'kosong',
                'address' => 'Yogyakarta Krapyak',
                'title' => 'Fullstack Developer',
                'achievement' => '1st Hacking',

            ],
        ];

        User::truncate();

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
