<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobDesignationSeederlist extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insertOrIgnore([
            [
                'name_en' => 'Forest Officer',
                'name_bn' => 'বন কর্মকর্তা',
            ],
            [
                'name_en' => 'Forest Ranger',
                'name_bn' => 'বন রেঞ্জার',
            ],
            [
                'name_en' => 'Forest Guard',
                'name_bn' => 'বন গার্ড',
            ],
            [
                'name_en' => 'Forest Inspector',
                'name_bn' => 'বন পরিদর্শক',
            ],
            [
                'name_en' => 'Forest Range Officer',
                'name_bn' => 'বন রেঞ্জ অফিসার',
            ],
            [
                'name_en' => 'Forest Range Supervisor',
                'name_bn' => 'বন রেঞ্জ সুপারভাইজার',
            ],
            [
                'name_en' => 'Wildlife Officer',
                'name_bn' => 'বন্যজীব কর্মকর্তা',
            ],
            [
                'name_en' => 'Forestry Research Officer',
                'name_bn' => 'বন গবেষণা কর্মকর্তা',
            ],
            [
                'name_en' => 'Forest Planning Officer',
                'name_bn' => 'বন পরিকল্পনা কর্মকর্তা',
            ],
            [
                'name_en' => 'Forest Extension Officer',
                'name_bn' => 'বন এক্সটেনশন কর্মকর্তা',
            ],
            [
                'name_en' => 'Range Officer',
                'name_bn' => 'রেঞ্জ অফিসার',
            ],
            [
                'name_en' => 'Forestry Supervisor',
                'name_bn' => 'বন পরিদর্শক সুপারভাইজার',
            ],
            [
                'name_en' => 'Forestry Assistant',
                'name_bn' => 'বন পরিদর্শক সহকারী',
            ],
            [
                'name_en' => 'Range Forest Guard',
                'name_bn' => 'রেঞ্জ বন গার্ড',
            ],
            [
                'name_en' => 'Forest Surveyor',
                'name_bn' => 'বন মানচিত্রক',
            ],
            [
                'name_en' => 'Forest Conservator',
                'name_bn' => 'বন সংরক্ষক',
            ],
            [
                'name_en' => 'Assistant Conservator of Forests',
                'name_bn' => 'বন সংরক্ষণ সহকারী',
            ],
            [
                'name_en' => 'Assistant Director of Forests',
                'name_bn' => 'বন মহানিয়ন্ত্রক সহকারী',
            ],
            [
                'name_en' => 'Deputy Conservator of Forests',
                'name_bn' => 'উপ বন সংরক্ষক',
            ],
            [
                'name_en' => 'Director General of Forests',
                'name_bn' => 'বন মহানিয়ন্ত্রক সম্প্রধান',
            ],
            [
                'name_en' => 'Additional Secretary (Forests and Environment)',
                'name_bn' => 'অতিরিক্ত সচিব (বন ও পরিবেশ)',
            ],
            [
                'name_en' => 'Minister of Environment and Forests',
                'name_bn' => 'পরিবেশ ও বন মন্ত্রী',
            ],
            [
                'name_en' => 'Secretary (Forests and Environment)',
                'name_bn' => 'সচিব (বন ও পরিবেশ)',
            ],
            [
                'name_en' => 'Assistant Forest Conservator',
                'name_bn' => 'বন সংরক্ষণ সহকারী',
            ],
            [
                'name_en' => 'Field Forest Officer',
                'name_bn' => 'ক্ষেত্র বন কর্মকর্তা',
            ],
            [
                'name_en' => 'Principal Chief Conservator of Forests',
                'name_bn' => 'মূল প্রধান বন সংরক্ষক',
            ],
            [
                'name_en' => 'Chief Conservator of Forests',
                'name_bn' => 'প্রধান বন সংরক্ষক',
            ],
            [
                'name_en' => 'Assistant Chief Conservator of Forests',
                'name_bn' => 'উপ প্রধান বন সংরক্ষক',
            ],
        ]);
    }
}
