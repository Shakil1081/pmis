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
            ['name_en' => 'Earned Leave', 'name_bn' => 'অর্জিত ছুটি'],
            ['name_en' => 'Extraordinary Leave', 'name_bn' => 'অসাধারণ ছুটি'],
            ['name_en' => 'Study Leave', 'name_bn' => 'অধ্যয়ন ছুটি'],
            ['name_en' => 'Quarantine Leave', 'name_bn' => 'সংগনিরোধ ছুটি'],
            ['name_en' => 'Maternity Leave', 'name_bn' => 'প্রসূতি ছুটি'],
            ['name_en' => 'Leave not due', 'name_bn' => 'প্রাপ্যতাবিহীন ছুটি'],
            ['name_en' => 'Post Retirement Leave', 'name_bn' => 'অবসর উত্তর ছুটি'],
            ['name_en' => 'Casual Leave', 'name_bn' => 'নৈমিত্তিক ছুটি'],
            ['name_en' => 'Public Holiday', 'name_bn' => 'সাধারণ ছুটি'],
            ['name_en' => 'Government Holiday', 'name_bn' => 'নির্বাহী আদেশে ছুটি'],
            ['name_en' => 'Optional Leave', 'name_bn' => 'ঐচ্ছিক ছুটি'],
            ['name_en' => 'Rest and Recreation Leave', 'name_bn' => 'শ্রান্তি বিনোদন ছুটি'],
            ['name_en' => 'Special Disability Leave', 'name_bn' => 'অক্ষমতা জনিত বিশেষ ছুটি'],
            ['name_en' => 'Special Sick Leave', 'name_bn' => 'বিশেষ অসুস্থতা জনিত ছুটি'],
            ['name_en' => 'Leave of Vacation Department', 'name_bn' => 'অবকাশ বিভাগের ছুটি'],
            ['name_en' => 'Departmental Leave', 'name_bn' => 'বিভাগীয় ছুটি'],
            ['name_en' => 'Hospital Leave', 'name_bn' => 'চিকিৎসালয় ছুটি'],
            ['name_en' => 'Compulsory Leave', 'name_bn' => 'বাধ্যতামূলক ছুটি'],
            // Add more leave categories as needed
        ];

        foreach ($leaveCategories as $category) {
            DB::table('leave_categories')->insert($category);
        }
    }
}
