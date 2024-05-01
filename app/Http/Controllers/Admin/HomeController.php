<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Office Unite',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\OfficeUnit',
            'group_by_field'        => 'deleted_at',
            'group_by_period'       => 'year',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd/m/Y H:i:s',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'officeUnit',
        ];

        $chart1 = new LaravelChart($settings1);

        $settings2 = [
            'chart_title'           => 'Employee',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\EmployeeList',
            'group_by_field'        => 'date_of_birth',
            'group_by_period'       => 'year',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_days'           => '90',
            'group_by_field_format' => 'd/m/Y',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'employeeList',
        ];

        $chart2 = new LaravelChart($settings2);

        $settings3 = [
            'chart_title'           => 'ACR',
            'chart_type'            => 'bar',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\AcrMonitoring',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'month',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd/m/Y H:i:s',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'acrMonitoring',
        ];

        $chart3 = new LaravelChart($settings3);

        $settings4 = [
            'chart_title'           => 'Criminal Prosecition',
            'chart_type'            => 'bar',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\CriminalProsecutione',
            'group_by_field'        => 'government_order_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd/m/Y',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'criminalProsecutione',
        ];

        $chart4 = new LaravelChart($settings4);

        $settings5 = [
            'chart_title'           => 'Training',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Training',
            'group_by_field'        => 'start_date',
            'group_by_period'       => 'year',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'month',
            'group_by_field_format' => 'd/m/Y',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'training',
        ];

        $chart5 = new LaravelChart($settings5);

        $settings6 = [
            'chart_title'           => 'Travel Record',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\TravelRecord',
            'group_by_field'        => 'start_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd/m/Y',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'travelRecord',
        ];

        $chart6 = new LaravelChart($settings6);

        return view('home', compact('chart1', 'chart2', 'chart3', 'chart4', 'chart5', 'chart6'));
    }
}
