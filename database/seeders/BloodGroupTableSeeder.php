<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the blood_groups table
        DB::table('blood_groups')->insert([
            [
                'name_bn' => 'এ পজিটিভ',
                'name_en' => 'A Positive',
            ],
            [
                'name_bn' => 'বি পজিটিভ',
                'name_en' => 'B Positive',
            ],
            [
                'name_bn' => 'ও পজিটিভ',
                'name_en' => 'O Positive',
            ],
            [
           
                'name_bn' => 'এবি পজিটিভ',
                'name_en' => 'AB Positive',
            ],
            [
               
                'name_bn' => 'এ নেগেটিভ',
                'name_en' => 'A Negative',
            ],
            [
              
                'name_bn' => 'ও নেগেটিভ',
                'name_en' => 'O Negative',
            ],
            [
               
                'name_bn' => 'বি নেগেটিভ',
                'name_en' => 'B Negative',
            ],
            [
              
                'name_bn' => 'এবি নেগেটিভ',
                'name_en' => 'AB Negative',
            ],
        ]);
    }
}
