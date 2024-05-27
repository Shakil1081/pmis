<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'              => 1,
                'name'            => 'Shakil Hossain',
                'email'           => 'shakilaust81@gmail.com',
                'password'        => bcrypt('987654321'),
                'remember_token'  => null,
                'two_factor_code' => '',
                'name_en'         => '',
            ],
        ];

        User::insert($users);
    }
}
