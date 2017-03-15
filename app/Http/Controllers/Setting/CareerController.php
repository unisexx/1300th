<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class CareerController extends Controller {
    public function getIndex() {
        return view('setting.career.index');
    }
}
