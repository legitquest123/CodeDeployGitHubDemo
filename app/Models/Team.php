<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';
    public $timestamps = false;
    protected $fillable = ['category_id','subcategory_id','name','designation','profileimage','profileurl'];
}
