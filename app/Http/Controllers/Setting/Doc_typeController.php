<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class Doc_typeController extends Controller {
    public function getIndex() {
        return view('setting.doc_type.index');
    }
}
