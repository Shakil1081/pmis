<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobDesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
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
                'name_en' => 'Range Forest Officer',
                'name_bn' => 'রেঞ্জ বন কর্মকর্তা',
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
            [
                'name_en' => 'Range Forest Officer (RFO)',
                'name_bn' => 'রেঞ্জ বন অফিসার',
            ],
            [
                'name_en' => 'Forest Development Officer',
                'name_bn' => 'বন উন্নয়ন অফিসার',
            ],
            [
                'name_en' => 'Conservator of Forests',
                'name_bn' => 'বন সংরক্ষক',
            ],
            [
                'name_en' => 'Forest Extension Officer',
                'name_bn' => 'বন এক্সটেনশন অফিসার',
            ],
            [
                'name_en' => 'Territorial Forest Officer',
                'name_bn' => 'অঞ্চল বন অফিসার',
            ],
            [
                'name_en' => 'Forest Divisional Officer',
                'name_bn' => 'বন ডিভিশনাল অফিসার',
            ],
            [
                'name_en' => 'Assistant Divisional Forest Officer',
                'name_bn' => 'সহকারী ডিভিশনাল বন অফিসার',
            ],
            [
                'name_en' => 'Forest Resource Management Officer',
                'name_bn' => 'বন সম্পদ ব্যবস্থাপনা অফিসার',
            ],
            [
                'name_en' => 'Forest Environment Officer',
                'name_bn' => 'বন পরিবেশ অফিসার',
            ],
            [
                'name_en' => 'Forest Project Officer',
                'name_bn' => 'বন প্রকল্প অফিসার',
            ],
            [
                'name_en' => 'Forest Inventory Officer',
                'name_bn' => 'বন মালা অফিসার',
            ],
            [
                'name_en' => 'Forest Monitoring Officer',
                'name_bn' => 'বন মনিটরিং অফিসার',
            ],
            [
                'name_en' => 'Forest Education and Training Officer',
                'name_bn' => 'বন শিক্ষা ও প্রশিক্ষণ অফিসার',
            ],
            [
                'name_en' => 'Forest Environment and Climate Change Officer',
                'name_bn' => 'বন পরিবেশ ও জলবায়ু পরিবর্তন অফিসার',
            ],
            [
                'name_en' => 'Chief Conservator of Forests (Wildlife)',
                'name_bn' => 'প্রধান বন সংরক্ষণ অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Wildlife Conservation Officer',
                'name_bn' => 'বন্যজীব সংরক্ষণ অফিসার',
            ],
            [
                'name_en' => 'Assistant Wildlife Officer',
                'name_bn' => 'সহকারী বন্যজীব সংরক্ষণ অফিসার',
            ],
            [
                'name_en' => 'Wildlife Research Officer',
                'name_bn' => 'বন্যজীব গবেষণা অফিসার',
            ],
            [
                'name_en' => 'Wildlife Ranger',
                'name_bn' => 'বন্যজীব রেঞ্জার',
            ],
            [
                'name_en' => 'Wildlife Guard',
                'name_bn' => 'বন্যজীব গার্ড',
            ],
            [
                'name_en' => 'Range Officer (Wildlife)',
                'name_bn' => 'রেঞ্জ অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forester',
                'name_bn' => 'ফরেস্টার',
            ],
            [
                'name_en' => 'Deputy Conservator of Forests (Wildlife)',
                'name_bn' => 'উপ বন সংরক্ষণ অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Director General of Forests (Wildlife)',
                'name_bn' => 'বন মহানিয়ন্ত্রক (বন্য জীবন)',
            ],
            [
                'name_en' => 'Additional Secretary (Forests and Wildlife)',
                'name_bn' => 'অতিরিক্ত সচিব (বন ও বন্য জীবন)',
            ],
            [
                'name_en' => 'Secretary (Forests and Wildlife)',
                'name_bn' => 'সচিব (বন ও বন্য জীবন)',
            ],
            [
                'name_en' => 'Minister of Environment, Forests and Climate Change',
                'name_bn' => 'পরিবেশ, বন ও জলবায়ু পরিবর্তন মন্ত্রী',
            ],
            [
                'name_en' => 'Assistant Chief Conservator of Forests (Wildlife)',
                'name_bn' => 'উপ প্রধান বন সংরক্ষণ অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Assistant Conservator of Forests (Wildlife)',
                'name_bn' => 'বন সংরক্ষণ সহকারী (বন্য জীবন)',
            ],
            [
                'name_en' => 'Principal Chief Conservator of Forests (Wildlife)',
                'name_bn' => 'মূল প্রধান বন সংরক্ষণ অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Deputy Director General of Forests (Wildlife)',
                'name_bn' => 'উপ বন মহানিয়ন্ত্রক (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Officer (Wildlife)',
                'name_bn' => 'বন কর্মকর্তা (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Range Officer (Wildlife)',
                'name_bn' => 'বন রেঞ্জ অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Development Officer (Wildlife)',
                'name_bn' => 'বন উন্নয়ন অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Territorial Forest Officer (Wildlife)',
                'name_bn' => 'অঞ্চল বন অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Range Forest Officer (Wildlife)',
                'name_bn' => 'রেঞ্জ বন অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Resource Management Officer (Wildlife)',
                'name_bn' => 'বন সম্পদ ব্যবস্থাপনা অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Education and Training Officer (Wildlife)',
                'name_bn' => 'বন শিক্ষা ও প্রশিক্ষণ অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Environment and Climate Change Officer (Wildlife)',
                'name_bn' => 'বন পরিবেশ ও জলবায়ু পরিবর্তন অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Surveyor (Wildlife)',
                'name_bn' => 'বন মানচিত্রক (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Environment Officer (Wildlife)',
                'name_bn' => 'বন পরিবেশ অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Inventory Officer (Wildlife)',
                'name_bn' => 'বন মালা অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Monitoring Officer (Wildlife)',
                'name_bn' => 'বন মনিটরিং অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Project Officer (Wildlife)',
                'name_bn' => 'বন প্রকল্প অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forest Extension Officer (Wildlife)',
                'name_bn' => 'বন এক্সটেনশন অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Forestry Assistant (Wildlife)',
                'name_bn' => 'বন পরিদর্শক সহকারী (বন্য জীবন)',
            ],
            [
                'name_en' => 'Range Forest Guard (Wildlife)',
                'name_bn' => 'রেঞ্জ বন গার্ড (বন্য জীবন)',
            ],
            [
                'name_en' => 'Assistant Wildlife Officer (Wildlife)',
                'name_bn' => 'সহকারী বন্যজীব অফিসার (বন্য জীবন)',
            ],
            [
                'name_en' => 'Deputy Director General of Forests (Wildlife)',
                'name_bn' => 'উপ বন মহানিয়ন্ত্রক (বন্য জীবন)',
            ],
            [
                'name_en' => 'Assistant Director General of Forests (Wildlife)',
                'name_bn' => 'সহকারী বন মহানিয়ন্ত্রক (বন্য জীবন)',
            ],
        ]);
    }
}
