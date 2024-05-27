<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectRevenueLonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the project_revenuelones table
        DB::table('project_revenuelones')->insert([
            [
                'name_bn' => 'প্রকল্প-১',
                'name_en' => 'Project-1',
                'project_revenue_id' => 1,
            ],
            [
                'name_bn' => 'রাজস্ব -১',
                'name_en' => 'Revenue-1',
                'project_revenue_id' => 2,
            ],
        ]);
    }
}
