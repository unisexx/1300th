<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Provinces;

use Form;
use DB;

class ProvinceController extends Controller {
    public function getIndex() {
      $data['rs'] = new Provinces;

      //search
      if(!empty($_GET['search'])){
        $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
      }

      $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
      return view('setting.province.index',$data);
    }

    public function getForm($id = null) {
      $data['rs'] = Provinces::find($id);
      return view('setting.province.form',$data);
    }

    public function postSave(Request $rq, $id = null) {
      // Save
  		$model = $id?Provinces::find($id):new Provinces;
      $model->fill($rq->all());
  		$model->save();

  		set_notify('success', trans('message.completeSave'));
  		return Redirect('setting/province');
  	}

    public function getDelete($id = null) {
  		if($rs = Provinces::find($id)) {
  			$rs->delete(); // Delete process
        set_notify('error', trans('message.completeDelete'));
  		}
  		return Redirect('setting/province');
  	}
}
