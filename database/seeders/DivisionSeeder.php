<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            [
                'name_bn' => 'বরিশাল',
                'name_en' => 'Barisal',
            ],
            [
                'name_bn' => 'চট্টগ্রাম',
                'name_en' => 'Chittagong',
            ],
            [
                'name_bn' => 'ঢাকা',
                'name_en' => 'Dhaka',
            ],
            [
                'name_bn' => 'খুলনা',
                'name_en' => 'Khulna',
            ],
            [
                'name_bn' => 'রাজশাহী',
                'name_en' => 'Rajshahi',
            ],
            [
                'name_bn' => 'রংপুর',
                'name_en' => 'Rangpur',
            ],
            [
                'name_bn' => 'সিলেট',
                'name_en' => 'Sylhet',
            ],
            [
                'name_bn' => 'ময়মনসিংহ',
                'name_en' => 'Mymensingh',
            ],
             
        ]);
    }
}
