<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credit_Card extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
