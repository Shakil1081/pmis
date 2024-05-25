<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_types')->insert([
            [
                'name_en' => 'Local Training',
                'name_bn' => 'স্থানীয় প্রশিক্ষণ',
            ],
            [
                'name_en' => 'Foreign Training',
                'name_bn' => 'বিদেশী প্রশিক্ষণ',
            ],
        ]);
    }
}
