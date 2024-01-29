<?php

namespace App\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostBanner;

class PostBannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'status_id' => 1,
                'post_id' => 1,
                'banner_id' => 1,
                'order' => 1,
                'user_id' => 1,
            ],
            [
                'status_id' => 1,
                'post_id' => 1,
                'banner_id' => 2,
                'order' => 2,
                'user_id' => 1,
            ],
            [
                'status_id' => 1,
                'post_id' => 2,
                'banner_id' => 2,
                'order' => 1,
                'user_id' => 1,
            ],
            [
                'status_id' => 1,
                'post_id' => 2,
                'banner_id' => 3,
                'order' => 2,
                'user_id' => 1,
            ],
        ];

        foreach ($posts as $post) {
            PostBanner::create($post);
        }
    }
}