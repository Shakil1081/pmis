<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the religions table
        DB::table('religions')->insert([
            [
                'name_bn' => 'মুসলিম',
                'name_en' => 'Muslim',
            ],
            [
                'name_bn' => 'হিন্দু',
                'name_en' => 'Hindu',
            ],
            [
                'name_bn' => 'খ্রিস্টান',
                'name_en' => 'Christian',
            ],
            [
                'name_bn' => 'বৌদ্ধ',
                'name_en' => 'Buddhist',
            ],
        ]);
    }
}
