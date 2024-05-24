<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenseTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the license_types table
        DB::table('license_types')->insert([
            [
                'name_bn' => 'ভারী',
                'name_en' => 'Heavy',
            ],
            [
                'name_bn' => 'হালকা',
                'name_en' => 'Light',
            ],
        ]);
    }
}
