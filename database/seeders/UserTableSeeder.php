<?php

namespace App\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'test',
                'email' => 'test@mail.com',
                'email_verified_at' => '2024-01-10 07:55:08',
                'password' => '$2y$10$0G/SUORllhXDDDm1EsanV.W/7lPBIrerr2a7qlT1a/Pf5TJzyzLme',
            ],
        ];

        foreach ($users as $user) {
            Banner::create($user);
        }
    }
}