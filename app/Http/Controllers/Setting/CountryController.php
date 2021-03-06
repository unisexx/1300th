<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Countries;

use DB;

class CountryController extends Controller {
    public function getIndex() {
      $data['rs'] = new Countries;

      //search
      if(!empty($_GET['search'])){
        $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%')->orWhere('phone','like','%'.$_GET['search'].'%');
      }

      $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
      return view('setting.country.index',$data);
    }

    public function getForm($id = null) {
      $data['rs'] = Countries::find($id);
      return view('setting.country.form',$data);
    }

    public function postSave(Request $rq, $id = null) {
      // Save
  		$model = $id?Countries::find($id):new Countries;
      $model->fill($rq->all());
  		$model->save();

  		set_notify('success', trans('message.completeSave'));
  		return Redirect('setting/country');
  	}

    public function getDelete($id = null) {
  		if($rs = Countries::find($id)) {
  			$rs->delete(); // Delete process
        set_notify('error', trans('message.completeDelete'));
  		}
  		return Redirect('setting/country');
  	}
}
