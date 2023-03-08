<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Donations',
            'chart_type'            => 'bar',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Donation',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'year',
            'aggregate_function'    => 'sum',
            'aggregate_field'       => 'amount',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'Y-m-d H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'donation',
        ];

        $chart1 = new LaravelChart($settings1);

        $settings2 = [
            'chart_title'        => 'Donations BY Type',
            'chart_type'         => 'pie',
            'report_type'        => 'group_by_relationship',
            'model'              => 'App\Models\Donation',
            'group_by_field'     => 'name',
            'aggregate_function' => 'sum',
            'aggregate_field'    => 'amount',
            'filter_field'       => 'created_at',
            'column_class'       => 'col-md-6',
            'entries_number'     => '5',
            'relationship_name'  => 'campaign',
            'translation_key'    => 'donation',
        ];

        $chart2 = new LaravelChart($settings2);

        return view('home', compact('chart1', 'chart2'));
    }
}
