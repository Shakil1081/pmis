<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name_bn' => 'Division', 'name_en' => 'Division'],
            ['name_bn' => 'Grade', 'name_en' => 'Grade'],
            ['name_bn' => 'Class', 'name_en' => 'Class'],
        ];

        DB::table('result_groups')->insert($data);
    }
}
