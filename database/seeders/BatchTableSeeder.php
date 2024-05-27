<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the batches table
        DB::table('batches')->insert([
            'batch_bn' => '১৯৮২',
            'batch_en' => '1982',
        ]);
    }
}
