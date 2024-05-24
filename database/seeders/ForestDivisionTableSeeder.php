<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForestDivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the forest_divisions table
        DB::table('forest_divisions')->insert([
            [
                'name_bn' => 'সামাজিক বন বিভাগ বরিশাল',
                'name_en' => 'Social Forest Division Barishal',
                'forest_state_id' => 1,
            ],
            [
                'name_bn' => 'চট্টগ্রাম উত্তর বন বিভাগ',
                'name_en' => 'Chattogram North Forest Division',
                'forest_state_id' => 1,
            ],
            [
                'name_bn' => 'ঢাকা বন বিভাগ',
                'name_en' => 'Dhaka Forest Division',
                'forest_state_id' => 1,
            ],
            [
                'name_bn' => 'খুলনা',
                'name_en' => 'Khulna',
                'forest_state_id' => 1,
            ],
        ]);
    }
}
