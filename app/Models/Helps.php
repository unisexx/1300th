<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Helps extends Model
{
  use SoftDeletes;

  protected $fillable = array('code','name','fill','status');

  protected $dates = ['deleted_at'];
}
