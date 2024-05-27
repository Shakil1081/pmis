<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExamBoard;

class ExamBoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample exam board data
        $examBoards = [
            ['name_bn' => 'Barishal', 'name_en' => 'Barishal', 'description' => null],
            ['name_bn' => 'Chattogram', 'name_en' => 'Chattogram', 'description' => null],
            ['name_bn' => 'Cumilla', 'name_en' => 'Cumilla', 'description' => null],
            ['name_bn' => 'Dhaka', 'name_en' => 'Dhaka', 'description' => null],
            ['name_bn' => 'Dinajpur', 'name_en' => 'Dinajpur', 'description' => null],
            ['name_bn' => 'Jashore', 'name_en' => 'Jashore', 'description' => null],
            ['name_bn' => 'Mymensingh', 'name_en' => 'Mymensingh', 'description' => null],
            ['name_bn' => 'Rajshahi', 'name_en' => 'Rajshahi', 'description' => null],
            ['name_bn' => 'Sylhet', 'name_en' => 'Sylhet', 'description' => null],
            ['name_bn' => 'Madrasah', 'name_en' => 'Madrasah', 'description' => 'Madrasah'],
            ['name_bn' => 'Technical', 'name_en' => 'Technical', 'description' => null],
            ['name_bn' => 'BOU', 'name_en' => 'BOU', 'description' => null],
        ];

        // Insert data into the database
        foreach ($examBoards as $examBoard) {
            ExamBoard::create($examBoard);
        }
    }
}
