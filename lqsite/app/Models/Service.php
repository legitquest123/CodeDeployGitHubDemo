<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    public $timestamps = false;
    protected $fillable = ['firstname','lastname','mobile','email','type','message'];
}
