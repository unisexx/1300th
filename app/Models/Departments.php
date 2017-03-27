<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departments extends Model
{
  use SoftDeletes;

  protected $fillable = array('parent_id','code','name','provinces_id','status');

  public function parent(){
      return $this->belongsTo('App\Models\Departments', 'parent_id');
  }

  public function children(){
      return $this->hasMany('App\Models\Departments', 'parent_id');
  }

  protected $dates = ['deleted_at'];
}
