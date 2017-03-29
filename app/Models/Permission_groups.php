<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission_groups extends Model
{
  use SoftDeletes;

  protected $fillable = array('name','status');

  public function permission_roles()
  {
      return $this->hasMany('App\Models\Permission_roles','permission_groups_id','id');
  }

  protected $dates = ['deleted_at'];
}
