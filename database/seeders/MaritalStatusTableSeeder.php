<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaritalStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the maritalstatuses table
        DB::table('maritalstatuses')->insert([
            [
                'name' => 'বিবাহিত',
                'name_en' => 'Married',
                'value' => '1',
            ],
            [
                'name' => 'অবিবাহিত',
                'name_en' => 'Unmarried',
                'value' => '2',
            ],
        ]);
    }
}
