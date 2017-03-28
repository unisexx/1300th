<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission_groups extends Model
{
  use SoftDeletes;

  protected $fillable = array('name','status');

  protected $dates = ['deleted_at'];
}
