<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelPurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed Travel Purposes for Government of Bangladesh
        DB::table('travel_purposes')->insert([
            [
                'name_en' => 'Official Duty',
                'name_bn' => 'দাপ্তরিক কর্তব্য',
            ],
            [
                'name_en' => 'Training',
                'name_bn' => 'প্রশিক্ষণ',
            ],
            [
                'name_en' => 'Seminar/Workshop/Conference',
                'name_bn' => 'সেমিনার/কর্মশালা/সম্মেলন',
            ],
            [
                'name_en' => 'Meeting',
                'name_bn' => 'মিটিং',
            ],
            [
                'name_en' => 'Research',
                'name_bn' => 'গবেষণা',
            ],
            [
                'name_en' => 'Work Visit',
                'name_bn' => 'কাজের সফর',
            ],
            [
                'name_en' => 'Training (Foreign)',
                'name_bn' => 'প্রশিক্ষণ (বিদেশী)',
            ],
            [
                'name_en' => 'Medical Treatment',
                'name_bn' => 'চিকিৎসা',
            ],
            [
                'name_en' => 'Official Conference',
                'name_bn' => 'দাপ্তরিক সম্মেলন',
            ],
            [
                'name_en' => 'Other',
                'name_bn' => 'অন্যান্য',
            ],
        ]);
    }
}
