<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    public function banners(): BelongsToMany
    {
        return $this->belongsToMany(Banner::class);
    }

//    public function getBar()
//    {
//        return $this->parent_id;
//    }
}
