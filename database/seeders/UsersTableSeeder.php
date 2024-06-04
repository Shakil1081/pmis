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
                'email'           => 'kamranraz28@gmail.com',
                'password'        => bcrypt('18102017'),
                'remember_token'  => null,
                'two_factor_code' => '',
                'name_en'         => '',
            ],
        ];

        User::insert($users);
    }
}
