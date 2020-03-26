<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $table = 'seo';
    public $timestamps = false;
    protected $fillable = ['analytics','searchconsole','fpixel','lpixel','tagmanager'];
}
