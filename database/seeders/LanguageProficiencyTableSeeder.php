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
                'name_en' => 'Beginner',
                'name_bn' => 'শুরুকারী',
            ],
            [
                'name_en' => 'Elementary',
                'name_bn' => 'প্রাথমিক',
            ],
            [
                'name_en' => 'Intermediate',
                'name_bn' => 'মধ্যম',
            ],
            [
                'name_en' => 'Advanced',
                'name_bn' => 'উন্নত',
            ],
            [
                'name_en' => 'Fluent',
                'name_bn' => 'পরিপন্থী',
            ],
        ]);
    }
}
