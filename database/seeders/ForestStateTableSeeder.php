<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForestStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the forest_states table
        DB::table('forest_states')->insert([
            [
                'name_bn' => 'কেন্দ্রিয় অঞ্চল , ঢাকা',
                'name_en' => 'Central Circle, Dhaka',
                'status_id' => 1,
            ],
            [
                'name_bn' => 'সামাজিক বনায়ন অঞ্চল, ঢাকা',
                'name_en' => 'Social Forestry Circle',
                'status_id' => 1,
            ],
            [
                'name_bn' => 'উপকূলীয় অঞ্চল, বরিশাল',
                'name_en' => 'Coastal Circle, Barishal',
                'status_id' => 1,
            ],
            [
                'name_bn' => 'সামাজিক বন অঞ্চল, যশোর',
                'name_en' => 'Social Forest Circle',
                'status_id' => 1,
            ],
            [
                'name_bn' => 'খুলনা অঞ্চল',
                'name_en' => 'Khulna Circle',
                'status_id' => 1,
            ],
            [
                'name_bn' => 'চট্টগ্রাম, অঞ্চল',
                'name_en' => 'Chattogram, Circle',
                'status_id' => 1,
            ],
            [
                'name_bn' => 'রাঙামাটি অঞ্চল',
                'name_en' => 'Rangamati',
                'status_id' => 1,
            ],
            [
                'name_bn' => 'সামাজিক বন অঞ্চল, বগুড়া',
                'name_en' => 'Social Forest Circle, Bogra',
                'status_id' => 1,
            ],
            [
                'name_bn' => 'প্রধান কার্যালয়',
                'name_en' => 'Head Office',
                'status_id' => 1,
            ],
            [
                'name_bn' => 'বন্যপ্রাণী ও প্রকৃতি সংরক্ষণ অঞ্চল',
                'name_en' => 'WILDLIFE & NATURE CONSERVATION CIRCLE',
                'status_id' => 1,
            ],
        ]);
    }
}
