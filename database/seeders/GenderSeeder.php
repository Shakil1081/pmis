<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            ['name_bn' => 'পুরুষ', 'name_en' => 'Male'],
            ['name_bn' => 'মহিলা', 'name_en' => 'Female'],
        ]);
    }
}
