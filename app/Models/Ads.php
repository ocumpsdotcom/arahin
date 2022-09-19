<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function categoryAds()
    {
        return $this->belongsTo(CategoryAds::class, 'categoryads_id');
    }
}
