<?php

namespace App\Repositories;

use App\Models\PostBanner;

class PostBannerRepository
{
    public function getByPostId($postId)
    {
        return PostBanner::where('post_id', $postId)->get();
    }

    public function getStatus(PostBanner $postBanner)
    {
        return $postBanner->status()->get();
    }

    public function getActiveBannersByPostId($postId, $limit = 2)
    {
        return PostBanner::query()
        ->join('banners', 'post_banners.banner_id', '=', 'banners.id')
        ->where('post_banners.post_id', $postId)
        ->where('banners.status_id', function($query) {
            $query->select('id')
                ->from('statuses')
                ->where('name', 'active')
                ->limit(1);
        })
        ->orderBy('post_banners.order')
        ->limit($limit)
        ->get();
    }
}