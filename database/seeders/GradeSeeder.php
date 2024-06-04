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
                'current_basic_pay' => '',
                'salary_range' => '78000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ২',
                'name_en' => 'Grade 2',
                'basic_pay_scale' => 'Scale 2',
                'current_basic_pay' => '',
                'salary_range' => '66000-76490',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৩',
                'name_en' => 'Grade 3',
                'basic_pay_scale' => 'Scale 3',
                'current_basic_pay' => '',
                'salary_range' => '56500-74400',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৪',
                'name_en' => 'Grade 4',
                'basic_pay_scale' => 'Scale 4',
                'current_basic_pay' => '',
                'salary_range' => '50000-71200',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৫',
                'name_en' => 'Grade 5',
                'basic_pay_scale' => 'Scale 5',
                'current_basic_pay' => '',
                'salary_range' => '43000-69850',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৬',
                'name_en' => 'Grade 6',
                'basic_pay_scale' => 'Scale 6',
                'current_basic_pay' => '',
                'salary_range' => '35500-67010',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৭',
                'name_en' => 'Grade 7',
                'basic_pay_scale' => 'Scale 7',
                'current_basic_pay' => '',
                'salary_range' => '29000-63410',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৮',
                'name_en' => 'Grade 8',
                'basic_pay_scale' => 'Scale 8',
                'current_basic_pay' => '',
                'salary_range' => '23000-55470',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ৯',
                'name_en' => 'Grade 9',
                'basic_pay_scale' => 'Scale 9',
                'current_basic_pay' =>'',
                'salary_range' => '22000-53060',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১০',
                'name_en' => 'Grade 10',
                'basic_pay_scale' => 'Scale 10',
                'current_basic_pay' => '',
                'salary_range' => '16000-38640',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১১',
                'name_en' => 'Grade 11',
                'basic_pay_scale' => 'Scale 11',
                'current_basic_pay' => '',
                'salary_range' => '12500-30230',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১২',
                'name_en' => 'Grade 12',
                'basic_pay_scale' => 'Scale 12',
                'current_basic_pay' => '',
                'salary_range' => '11300-27300',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৩',
                'name_en' => 'Grade 13',
                'basic_pay_scale' => 'Scale 13',
                'current_basic_pay' => '',
                'salary_range' => '11000-26590',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৪',
                'name_en' => 'Grade 14',
                'basic_pay_scale' => 'Scale 14',
                'current_basic_pay' => '',
                'salary_range' => '10200-24680',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৫',
                'name_en' => 'Grade 15',
                'basic_pay_scale' => 'Scale 15',
                'current_basic_pay' => '',
                'salary_range' => '9700-23490',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৬',
                'name_en' => 'Grade 16',
                'basic_pay_scale' => 'Scale 16',
                'current_basic_pay' => '',
                'salary_range' => '9300-22490',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৭',
                'name_en' => 'Grade 17',
                'basic_pay_scale' => 'Scale 17',
                'current_basic_pay' => '',
                'salary_range' => '9000-21800',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৮',
                'name_en' => 'Grade 18',
                'basic_pay_scale' => 'Scale 18',
                'current_basic_pay' => '',
                'salary_range' => '8800-21310',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ১৯',
                'name_en' => 'Grade 19',
                'basic_pay_scale' => 'Scale 19',
                'current_basic_pay' => '',
                'salary_range' => '8500-20570',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_bn' => 'গ্রেড ২০',
                'name_en' => 'Grade 20',
                'basic_pay_scale' => 'Scale 20',
                'current_basic_pay' => '',
                'salary_range' => '8250-20010',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more grades as needed
        ]);
    }
}
