<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    
    public function order_details()
    {
        return $this->hasMany('App\Models\Order_Detail');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    } 

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    } 

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    } 
}
