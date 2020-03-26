<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    public $timestamps = false;
    protected $fillable = ['heading','slug','description'];
    protected $guarded = ['meta_title','meta_keywords','meta_canonical','meta_description','schema'];
}
