<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class PrefixController extends Controller {
    public function getIndex() {
        return view('setting.prefix.index');
    }
}
