<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoiningInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the joininginfos table
        DB::table('joininginfos')->insert([
            [
                'project_revenue_bn' => 'প্রকল্প',
                'project_revenue_en' => 'Project',
            ],
            [
                'project_revenue_bn' => 'রাজস্ব',
                'project_revenue_en' => 'Revenue',
            ],
        ]);
    }
}
