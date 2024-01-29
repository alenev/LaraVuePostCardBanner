<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';

    protected $fillable = [
        'id',
        'status',
        'name',
        'text',
    ];

    public function banners()
    {
        return $this->morphToMany(Banner::class, 'bannable');
    }
}
