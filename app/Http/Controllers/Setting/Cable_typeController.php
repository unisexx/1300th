<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class Cable_typeController extends Controller {
    public function getIndex() {
        return view('setting.cable_type.index');
    }
}
