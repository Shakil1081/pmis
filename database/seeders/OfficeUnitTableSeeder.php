<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeUnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the office_units table
        DB::table('office_units')->insert([
            [
                'name_bn' => 'Head Office',
                'name_en' => 'Head Office',
                'code' => null,
            ],
            [
                'name_bn' => 'Circle',
                'name_en' => 'Circle',
                'code' => null,
            ],
            [
                'name_bn' => 'Others',
                'name_en' => 'Others',
                'code' => null,
            ],
        ]);
    }
}
