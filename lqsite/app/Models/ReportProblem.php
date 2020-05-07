<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportProblem extends Model
{
	// protected $connection = 'mysql2';
    protected $table = 'reportproblem';
    public $timestamps = false;
    protected $fillable = ['user_id','problem_area','description','status','date_created','date_modified'];
}
