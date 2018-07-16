<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
   {
       return $this->belongsTo('App\User');
   }

   public function oder_detail()
   {
       return $this->belongsTo('App\Models\Order_Detail');
   }
}
