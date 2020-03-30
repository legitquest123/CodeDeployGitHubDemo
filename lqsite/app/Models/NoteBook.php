<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoteBook extends Model
{
    protected $table = 'notebook';
    public $timestamps = false;
    protected $fillable = ['parent_id','user_id','name','description','date_created'];
}
