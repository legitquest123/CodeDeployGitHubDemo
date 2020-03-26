<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResearchRequest extends Model
{
    protected $table = 'researchrequest';
    public $timestamps = false;
    protected $fillable = ['firstname','lastname','mobile','email','companyname','city','act','section','brief','jurisdiction'];
}
