<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class Dept_out_typeController extends Controller {
    public function getIndex() {
        return view('setting.dept_out_type.index');
    }
}
