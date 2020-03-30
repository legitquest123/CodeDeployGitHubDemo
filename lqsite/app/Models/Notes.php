<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $table = 'note';
    public $timestamps = false;
    protected $fillable = ['user_id','title','fact','description','date_created','date_modified',];
}
