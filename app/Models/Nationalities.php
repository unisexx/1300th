<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nationalities extends Model
{
  use SoftDeletes;

  protected $fillable = array('code','name_th','name_en','status');

  protected $dates = ['deleted_at'];
}
