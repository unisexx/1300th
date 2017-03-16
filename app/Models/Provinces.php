<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provinces extends Model
{
    use SoftDeletes;

    protected $fillable = array('code','name','countries_id','status');

    protected $dates = ['deleted_at'];
}
