<?php

namespace App\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'id' => 1,
                'name' => 'active'
            ],
            [
                'id' => 2,
                'name' => 'disabled'
            ]
        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}