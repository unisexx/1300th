<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Countries extends Model
{
    use SoftDeletes;
    
    protected $fillable = array('code','name','phone','status');

    protected $dates = ['deleted_at'];
}
