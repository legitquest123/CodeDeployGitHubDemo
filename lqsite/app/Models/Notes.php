<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
	// protected $connection = 'mysql2';
    protected $table = 'note';
    public $timestamps = false;
    protected $fillable = ['user_id','title','description','date_created','date_modified',];
}
