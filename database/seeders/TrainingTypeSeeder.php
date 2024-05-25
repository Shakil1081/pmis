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
        // Seed Local Training Types
        DB::table('training_types')->insert([
            [
                'name_en' => 'Local Training',
                'name_bn' => 'স্থানীয় প্রশিক্ষণ',
            ],
            // Add more local training types if needed
        ]);

        // Seed Foreign Training Types
        DB::table('training_types')->insert([
            [
                'name_en' => 'Foreign Training',
                'name_bn' => 'বিদেশী প্রশিক্ষণ',
            ],
            // Add more foreign training types if needed
        ]);
    }
}
