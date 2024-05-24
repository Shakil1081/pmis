<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the quota table
        DB::table('quota')->insert([
            [
              
                'name_bn' => 'মুক্তিযোদ্ধা',
                'name_en' => 'Freedom Fighter',
                'remark' => null,
            ],
            [
               
                'name_bn' => 'কোটা নাই',
                'name_en' => 'Non Quota',
                'remark' => null,
                
            ],
        ]);
    }
}
