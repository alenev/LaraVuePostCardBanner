<?php

namespace App\Repositories;

use App\Models\Banner;

class BannerRepository
{
    public function getMorphables(Banner $banner)
    {
        return $banner->morphables()->get();
    }
}