<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'category'
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
