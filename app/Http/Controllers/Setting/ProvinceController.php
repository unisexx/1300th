<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class ProvinceController extends Controller {
    public function getIndex() {
        return view('setting.province.index');
    }

    public function getForm($id = null) {
      // $data['rs'] = Countries::find($id);
      return view('setting.province.form');
    }
}
