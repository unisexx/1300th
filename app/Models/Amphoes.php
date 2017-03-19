<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Amphoes extends Model
{
  use SoftDeletes;

  protected $fillable = array('code','name','provinces_id','status');

  public function provinces() {
      return $this->hasOne('App\Models\Provinces', 'id', 'provinces_id');
  }

  protected $dates = ['deleted_at'];
}
