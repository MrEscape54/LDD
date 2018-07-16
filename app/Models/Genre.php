<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
