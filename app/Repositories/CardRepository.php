<?php

namespace App\Repositories;

use App\Models\Card;

class CardRepository
{
    public function getBanners(Card $card)
    {
        return $card->banners()->get();
    }
}