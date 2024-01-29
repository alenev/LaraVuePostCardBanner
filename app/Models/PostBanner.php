<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostBanner extends Model
{
    protected $table = 'post_banners';

    protected $fillable = [
        'id',
        'status_id',
        'post_id',
        'banner_id',
        'order',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}