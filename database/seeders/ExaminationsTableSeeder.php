<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Examination;

class ExaminationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample examination data
        $examinations = [
            ['name_en' => 'PSC/5 pass', 'name_bn' => 'PSC/5 pass'],
            ['name_en' => 'JSC/JDC/8 pass', 'name_bn' => 'JSC/JDC/8 pass'],
            ['name_en' => 'Secondary', 'name_bn' => 'Secondary',],
            ['name_en' => 'Higher Secondary', 'name_bn' => 'Higher Secondary'],
            ['name_en' => 'Diploma', 'name_bn' => 'Diploma'],
            ['name_en' => 'Bachelor/Honors', 'name_bn' => 'Bachelor/Honors'],
            ['name_en' => 'Masters', 'name_bn' => 'Masters'],
            ['name_en' => 'PhD (Doctor of Philosophy)', 'name_bn' => 'PhD (Doctor of Philosophy)'],
        ];

        // Insert data into the database
        foreach ($examinations as $examination) {
            Examination::create($examination);
        }
    }
}
