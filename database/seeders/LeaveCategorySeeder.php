<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeaveCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leaveCategories = [
            ['name_en' => 'Maternity Leave', 'name_bn' => 'গর্ভবতী নিষেধ ছুটি'],
            ['name_en' => 'Paternity Leave', 'name_bn' => 'পিতা প্রতিবন্ধক ছুটি'],
            ['name_en' => 'Sick Leave', 'name_bn' => 'অসুস্থতা ছুটি'],
            ['name_en' => 'Casual Leave', 'name_bn' => 'অবসর ছুটি'],
            ['name_en' => 'Earned Leave', 'name_bn' => 'অর্জিত অবকাশ'],
            ['name_en' => 'Leave Without Pay', 'name_bn' => 'বিনা বেতনে অবসর ছুটি'],
            ['name_en' => 'Special Leave', 'name_bn' => 'বিশেষ ক্ষেত্রে ছুটি'],
            ['name_en' => 'Death Anniversary Leave', 'name_bn' => 'কর্মচারীর মৃত্যুবর্ষের ছুটি'],
            ['name_en' => 'Other Leave', 'name_bn' => 'অন্যান্য ছুটি'],
            ['name_en' => 'Quarantine Leave', 'name_bn' => 'কোয়ারান্টাইন ছুটি'],
            ['name_en' => 'Study Leave', 'name_bn' => 'অধ্যয়ন ছুটি'],
            ['name_en' => 'Hajj Leave', 'name_bn' => 'হজ্জ ছুটি'],
            ['name_en' => 'Jury Duty Leave', 'name_bn' => 'জুরি দায়িত্ব ছুটি'],
            ['name_en' => 'Religious Festival Leave', 'name_bn' => 'ধর্মীয় উৎসব ছুটি'],
            ['name_en' => 'Emergency Leave', 'name_bn' => 'জরুরি ছুটি'],
            ['name_en' => 'Volunteer Leave', 'name_bn' => 'স্বেচ্ছা ছুটি'],
            ['name_en' => 'Annual Leave', 'name_bn' => 'বার্ষিক ছুটি'],
            ['name_en' => 'Half Day Leave', 'name_bn' => 'অর্ধ দিনের ছুটি'],
            ['name_en' => 'Marriage Leave', 'name_bn' => 'বিবাহ ছুটি'],
            ['name_en' => 'Civil Service Leave', 'name_bn' => 'সরকারি কর্মচারী ছুটি'],
            ['name_en' => 'Public Holiday Leave', 'name_bn' => 'সরকারি ছুটি'],
            // Add more leave categories as needed
        ];

        foreach ($leaveCategories as $category) {
            DB::table('leave_categories')->insert($category);
        }
    }
}
