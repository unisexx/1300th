<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Countries;

use DB;

class CountryController extends Controller {
    public function getIndex() {
        return view('setting.country.index');
    }

    public function getForm() {
        return view('setting.country.form');
    }

    public function postSave($id = null) {
      // Save
  		$model = $id?Countries::find($id):new Countries;
  		$model->save();

  		set_notify('success', trans('message.completeSave'));
  		return Redirect('setting/country');
  	}
}
