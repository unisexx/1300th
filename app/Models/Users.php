<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
  use SoftDeletes;

  protected $fillable = array('name','email','passwords','permission_groups_id','departments_id','positions_id','username','tel','status');

  public function permission_groups() {
      return $this->hasOne('App\Models\Permission_groups', 'id', 'permission_groups_id');
  }

  public function departments() {
      return $this->hasOne('App\Models\Departments', 'id', 'departments_id');
  }

  public function positions() {
      return $this->hasOne('App\Models\Positions', 'id', 'positions_id');
  }

  protected $dates = ['deleted_at'];
}
