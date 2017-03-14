<?php

namespace App\Http\Controllers\Report;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class R1Controller extends Controller {
    public function getIndex() {
        return view('report.r1');
    }
}
