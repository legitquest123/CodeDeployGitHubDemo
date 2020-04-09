<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $table = 'bookmark';
    public $timestamps = false;
    protected $fillable = ['judgment_id','user_id','date_created','date_modified'];
}
