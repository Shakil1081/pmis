<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name_bn' => 'First Division', 'name_en' => 'First Division', 'resultgroup_id' => 1],
            ['name_bn' => 'Second Division', 'name_en' => 'Second Division', 'resultgroup_id' => 1],
            ['name_bn' => 'Third Division', 'name_en' => 'Third Division', 'resultgroup_id' => 1],
            ['name_bn' => 'First Class', 'name_en' => 'First Class', 'resultgroup_id' => 3],
            ['name_bn' => 'Second Class', 'name_en' => 'Second Class', 'resultgroup_id' => 3],
            ['name_bn' => 'Third', 'name_en' => 'Third', 'resultgroup_id' => NULL],
            ['name_bn' => 'Appeared', 'name_en' => 'Appeared', 'resultgroup_id' => NULL],
            ['name_bn' => 'Enrolled', 'name_en' => 'Enrolled', 'resultgroup_id' => NULL],
            ['name_bn' => 'Awarded', 'name_en' => 'Awarded', 'resultgroup_id' => NULL],
            ['name_bn' => 'Pass', 'name_en' => 'Pass', 'resultgroup_id' => NULL],
        ];

        DB::table('results')->insert($data);
    }
}
