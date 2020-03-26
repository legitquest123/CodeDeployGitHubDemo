<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
     protected $table = 'Jobs';
     public $timestamps = false;
     protected $fillable = ['Name','Email','Contact','LinkedinURL','Resume','JobType','ApplyFor'];

}
