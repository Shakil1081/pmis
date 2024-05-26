<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exam_boards')->insert([
            ['name_bn' => 'ঢাকা', 'name_en' => 'Dhaka'],
            ['name_bn' => 'ময়মনসিংহ', 'name_en' => 'Mymensingh'],
            ['name_bn' => 'চট্টগ্রাম', 'name_en' => 'Chattogram'],
        ]);
    }
}
