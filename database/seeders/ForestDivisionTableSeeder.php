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
        DB::table('forest_divisions')->insert([
            [
                'forest_state_id'=>3,
                'name_bn' => 'সামাজিক বন বিভাগ বরিশাল',
                'name_en' => 'Social Forest Division Barishal'
            ],
            [
                'forest_state_id'=>6,
                'name_bn' => 'চট্টগ্রাম উত্তর বন বিভাগ',
                'name_en' => 'Chattogram North Forest Division'
            ],
            ['forest_state_id'=>1,
                'name_bn' => 'ঢাকা বন বিভাগ',
                'name_en' => 'Dhaka Forest Division'
            ],
            ['forest_state_id'=>5,
                'name_bn' => 'খুলনা',
                'name_en' => 'Khulna'
            ],
            ['forest_state_id'=>8,
                'name_bn' => 'সামাজিক বন বিভাগ রাজশাহী',
                'name_en' => 'Social Forest Division Rajshahi'
            ],
            ['forest_state_id'=>8,
                'name_bn' => 'সামাজিক বন বিভাগ রংপুর',
                'name_en' => 'Social Forest Division Rangpur'
            ],
            ['forest_state_id'=>1,
                'name_bn' => 'সিলেট বন বিভাগ',
                'name_en' => 'Sylhet Forest Division'
            ],
            ['forest_state_id'=>1,
                'name_bn' => 'ময়মনসিংহ বন বিভাগ',
                'name_en' => 'Mymensingh Forest Division'
            ],
            ['forest_state_id'=>1,
                'name_bn' => 'টাঙ্গাইল বন বিভাগ',
                'name_en' => 'TANGAIL Forest Division'
            ],
            ['forest_state_id'=>8,
                'name_bn' => 'সামাজিক বন বিভাগ দিনাজপুর',
                'name_en' => 'Social Forest Division Dinajpur'
            ],
            ['forest_state_id'=>8,
                'name_bn' => 'সামাজিক বন বিভাগ বগুড়া',
                'name_en' => 'Social Forest Division Bogura'
            ],
            ['forest_state_id'=>8,
                'name_bn' => 'সামাজিক বন বিভাগ পাবনা',
                'name_en' => 'Social Forest Division Pabna'
            ],
            ['forest_state_id'=>2,
                'name_bn' => 'সামাজিক বন বিভাগ ঢাকা',
                'name_en' => 'Social Forest Division Dhaka'
            ],
            ['forest_state_id'=>2,
                'name_bn' => 'সামাজিক বন বিভাগ কুমিল্লা',
                'name_en' => 'Social Forest Division Cumilla'
            ],
            ['forest_state_id'=>2,
                'name_bn' => 'সামাজিক বন বিভাগ ফেনী',
                'name_en' => 'Social Forest Division Feni'
            ],
            ['forest_state_id'=>1,
                'name_bn' => 'জাতীয় উদ্ভিদ উদ্যান',
                'name_en' => 'National Botanical Garden'
            ],
            ['forest_state_id'=>4,
                'name_bn' => 'সামাজিক বন বিভাগ যশোর',
                'name_en' => 'Social Forest Division Jashore'
            ],
            ['forest_state_id'=>4,
                'name_bn' => 'সামাজিক বন বিভাগ কুষ্টিয়া',
                'name_en' => 'Social Forest Division Kushtia'
            ],
            ['forest_state_id'=>4,
                'name_bn' => 'সামাজিক বন বিভাগ বাগেরহাট',
                'name_en' => 'Social Forest Division Bagerhat'
            ],
            ['forest_state_id'=>4,
                'name_bn' => 'সামাজিক বন বিভাগ ফরিদপুর',
                'name_en' => 'Social Forest Division Faridpur'
            ],
            ['forest_state_id'=>7,
                'name_bn' => 'খাগড়াছড়ি বন বিভাগ',
                'name_en' => 'Khagrachhari Forest Division'
            ],
            ['forest_state_id'=>7,
                'name_bn' => 'ঝুম নিয়ন্ত্রণ বন বিভাগ',
                'name_en' => 'Jhum Control Forest Division'
            ],
            ['forest_state_id'=>6,
                'name_bn' => 'চট্টগ্রাম দক্ষিণ বন বিভাগ',
                'name_en' => 'Chattogram South Forest Division'
            ],
            ['forest_state_id'=>6,
                'name_bn' => 'কক্সবাজার উত্তর বন বিভাগ',
                'name_en' => 'Cox Bazar North Forest Division'
            ],
            ['forest_state_id'=>6,
                'name_bn' => 'কক্সবাজার দক্ষিণ বন বিভাগ',
                'name_en' => 'Cox Bazar South Forest Division'
            ],
            ['forest_state_id'=>6,
                'name_bn' => 'বান্দরবান বন বিভাগ',
                'name_en' => 'Bandarban Forest Division'
            ],
            ['forest_state_id'=>6,
                'name_bn' => 'লামা বন বিভাগ',
                'name_en' => 'Lama Forest Division'
            ],
            ['forest_state_id'=>3,
                'name_bn' => 'উপকূলী বন বিভাগ',
                'name_en' => 'Coastal Forest Division'
            ],
            ['forest_state_id'=>3,
                'name_bn' => 'উপকূলীয় বন বিভাগ নোয়াখালী',
                'name_en' => 'Coastal Forest Division Noakhali'
            ],
            ['forest_state_id'=>3,
                'name_bn' => 'উপকূলীয় বন বিভাগ ভোলা',
                'name_en' => 'Coastal Forest Division Bhola'
            ],
            ['forest_state_id'=>2,
                'name_bn' => 'উপকূলীয় বন বিভাগ পটুয়াখালী',
                'name_en' => 'Coastal Forest Division Patuakhali'
            ],
            ['forest_state_id'=>6,
                'name_bn' => 'উপকূলীয় বন বিভাগ, চট্টগ্রাম',
                'name_en' => 'Coastal Forest Division, Chittagong'
            ],
            ['forest_state_id'=>1,
                'name_bn' => 'বন্যপ্রাণী ব্যবস্থাপনা ও প্রকৃতি সংরক্ষণ বিভাগ ঢাকা',
                'name_en' => 'Department of Wildlife Management and Nature Conservation, Dhaka'
            ],
            ['forest_state_id'=>6,
                'name_bn' => 'বন্যপ্রাণী ব্যবস্থাপনা ও প্রকৃতি সংরক্ষণ বিভাগ, চট্টগ্রাম',
                'name_en' => 'Department of Wildlife Management and Nature Conservation, Chittagong'
            ],
            ['forest_state_id'=>10,
                'name_bn' => 'বন্যপ্রাণী ব্যবস্থাপনা ও প্রকৃতি সংরক্ষণ বিভাগ মৌলভীবাজার',
                'name_en' => 'Department of Wildlife Management and Nature Conservation Moulvibazar'
            ],
            ['forest_state_id'=>1,
                'name_bn' => 'জাতীয় উদ্ভিদ উদ্যান, মিরপুর ও বলদা গার্ডেন',
                'name_en' => 'National Botanical Gardens, Mirpur and Balda Gardens'
            ],
        ]);
    }
}
