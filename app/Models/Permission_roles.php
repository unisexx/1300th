<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission_roles extends Model
{
  use SoftDeletes;

  protected $fillable = array('permission_groups_id','permissions_id');

  public function permission_groups() {
      return $this->hasOne('App\Models\Permission_groups', 'id', 'permission_groups_id');
  }

  public function permissions() {
      return $this->hasOne('App\Models\Permissions', 'id', 'permissions_id');
  }

  protected $dates = ['deleted_at'];
}
