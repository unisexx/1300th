<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Targets extends Model
{
  use SoftDeletes;

  protected $fillable = array('parent_id','code','name','status','start_age','end_age');

  public function parent(){
      return $this->belongsTo('App\Models\Targets', 'parent_id');
  }

  public function children(){
      return $this->hasMany('App\Models\Targets', 'parent_id');
  }

  protected $dates = ['deleted_at'];
}
