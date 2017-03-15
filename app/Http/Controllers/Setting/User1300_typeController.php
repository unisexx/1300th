<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class User1300_typeController extends Controller {
    public function getIndex() {
        return view('setting.user1300_type.index');
    }
}
