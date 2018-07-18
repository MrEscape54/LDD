<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guard = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}