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
                'is_admin' => '1',
                'password' => bcrypt('1234567'),
            ],
            [
                'name' => 'User',
                'email' => 'User123@User.com',
                'is_admin' => '0',
                'password' => bcrypt('1234567'),
            ],
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
