<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dept_outs extends Model
{
  use SoftDeletes;

  protected $fillable = array('code','name','status','provinces_id','dept_out_types_id');

  public function provinces() {
      return $this->hasOne('App\Models\Provinces', 'id', 'provinces_id');
  }

  public function dept_out_types() {
      return $this->hasOne('App\Models\Dept_out_types', 'id', 'dept_out_types_id');
  }

  protected $dates = ['deleted_at'];
}
