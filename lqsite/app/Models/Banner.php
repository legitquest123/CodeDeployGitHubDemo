<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Banner extends Model
{
   protected $table = 'lqbanner';
   public $timestamps = false;
   protected $fillable = ['heading','order_type','image','created_at'];

   public function getMaxOrderType()
   {
   	  $data = Banner::max('order_type');
      return $data;
   }
}
