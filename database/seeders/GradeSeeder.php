<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            [
                'name_bn' => 'গ্রেড ১',
                'name_en' => 'Grade 1',
                'basic_pay_scale' => 'Scale 1',
                'current_basic_pay' => 20000.00,
                'salary_range' => '20000 - 25000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ২',
                'name_en' => 'Grade 2',
                'basic_pay_scale' => 'Scale 2',
                'current_basic_pay' => 25000.00,
                'salary_range' => '25000 - 30000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৩',
                'name_en' => 'Grade 3',
                'basic_pay_scale' => 'Scale 3',
                'current_basic_pay' => 30000.00,
                'salary_range' => '30000 - 35000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৪',
                'name_en' => 'Grade 4',
                'basic_pay_scale' => 'Scale 4',
                'current_basic_pay' => 35000.00,
                'salary_range' => '35000 - 40000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৫',
                'name_en' => 'Grade 5',
                'basic_pay_scale' => 'Scale 5',
                'current_basic_pay' => 40000.00,
                'salary_range' => '40000 - 45000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৬',
                'name_en' => 'Grade 6',
                'basic_pay_scale' => 'Scale 6',
                'current_basic_pay' => 45000.00,
                'salary_range' => '45000 - 50000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৭',
                'name_en' => 'Grade 7',
                'basic_pay_scale' => 'Scale 7',
                'current_basic_pay' => 50000.00,
                'salary_range' => '50000 - 55000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৮',
                'name_en' => 'Grade 8',
                'basic_pay_scale' => 'Scale 8',
                'current_basic_pay' => 55000.00,
                'salary_range' => '55000 - 60000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৯',
                'name_en' => 'Grade 9',
                'basic_pay_scale' => 'Scale 9',
                'current_basic_pay' => 60000.00,
                'salary_range' => '60000 - 65000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১০',
                'name_en' => 'Grade 10',
                'basic_pay_scale' => 'Scale 10',
                'current_basic_pay' => 65000.00,
                'salary_range' => '65000 - 70000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১১',
                'name_en' => 'Grade 11',
                'basic_pay_scale' => 'Scale 11',
                'current_basic_pay' => 70000.00,
                'salary_range' => '70000 - 75000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১২',
                'name_en' => 'Grade 12',
                'basic_pay_scale' => 'Scale 12',
                'current_basic_pay' => 75000.00,
                'salary_range' => '75000 - 80000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৩',
                'name_en' => 'Grade 13',
                'basic_pay_scale' => 'Scale 13',
                'current_basic_pay' => 80000.00,
                'salary_range' => '80000 - 85000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৪',
                'name_en' => 'Grade 14',
                'basic_pay_scale' => 'Scale 14',
                'current_basic_pay' => 85000.00,
                'salary_range' => '85000 - 90000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৫',
                'name_en' => 'Grade 15',
                'basic_pay_scale' => 'Scale 15',
                'current_basic_pay' => 90000.00,
                'salary_range' => '90000 - 95000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৬',
                'name_en' => 'Grade 16',
                'basic_pay_scale' => 'Scale 16',
                'current_basic_pay' => 95000.00,
                'salary_range' => '95000 - 100000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৭',
                'name_en' => 'Grade 17',
                'basic_pay_scale' => 'Scale 17',
                'current_basic_pay' => 100000.00,
                'salary_range' => '100000 - 105000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৮',
                'name_en' => 'Grade 18',
                'basic_pay_scale' => 'Scale 18',
                'current_basic_pay' => 105000.00,
                'salary_range' => '105000 - 110000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৯',
                'name_en' => 'Grade 19',
                'basic_pay_scale' => 'Scale 19',
                'current_basic_pay' => 110000.00,
                'salary_range' => '110000 - 115000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ২০',
                'name_en' => 'Grade 20',
                'basic_pay_scale' => 'Scale 20',
                'current_basic_pay' => 115000.00,
                'salary_range' => '115000 - 120000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more grades as needed
        ]);
    }
}
