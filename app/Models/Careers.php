<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Careers extends Model
{
  use SoftDeletes;

  protected $fillable = array('code','name','status');

  protected $dates = ['deleted_at'];
}
