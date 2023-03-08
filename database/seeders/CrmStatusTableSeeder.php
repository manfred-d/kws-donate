<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2021-04-22 13:08:58',
                'updated_at' => '2021-04-22 13:08:58',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2021-04-22 13:08:58',
                'updated_at' => '2021-04-22 13:08:58',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2021-04-22 13:08:58',
                'updated_at' => '2021-04-22 13:08:58',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
