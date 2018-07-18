<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credit_Card extends Model
{
    protected $guard = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
