<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    public function getBanners(Post $post)
    {
        return $post->banners()->get();
    }
}