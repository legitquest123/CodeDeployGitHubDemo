<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
   protected $table = 'career';
   public $timestamps = false;
   protected $fillable = ['category_id','type','careertype','heading','description'];   
}

    
