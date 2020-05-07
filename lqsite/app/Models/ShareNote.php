<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ShareNote extends Model
{
	protected $connection = 'mysql2';
    protected $table = 'share_note';
    public $timestamps = false;
    protected $fillable = ['note_id','from_user_id','to_user_id','date_created'];
}
