<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provinces extends Model
{
    use SoftDeletes;

    protected $fillable = array('code','name','countries_id','status');

    public function countries() {
        return $this->hasOne('App\Models\Countries', 'id', 'countries_id');
    }

    protected $dates = ['deleted_at'];
}
