<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the statuses table
        DB::table('statuses')->insert([
            [
                'name' => 'Active',
            ],
            [
                'name' => 'Inactive',
            ],
        ]);
    }
}
