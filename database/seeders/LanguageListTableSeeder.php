<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the language_lists table
        DB::table('language_lists')->insert([
            [
                'name' => 'Bengali',
            ],
            [
                'name' => 'English',
            ],
        ]);
    }
}
