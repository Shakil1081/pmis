<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageProficiencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the language_proficiencies table
        DB::table('language_proficiencies')->insert([
            [
                'name' => 'Basic',
            ],
            [
                'name' => 'Good',
            ],
            [
                'name' => 'Very Good',
            ],
        ]);
    }
}
