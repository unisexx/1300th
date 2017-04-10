<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Amphoes;

use Form;
use DB;

class AmphoeController extends Controller {
    public function getIndex() {
      $data['rs'] = new Amphoes;

      //search
      if(!empty($_GET['search'])){
        $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
      }
      if(!empty($_GET['provinces_id'])){
        $data['rs'] = $data['rs']->where('provinces_id',$_GET['provinces_id']);
      }

      $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
      return view('setting.amphoe.index',$data);
    }

    public function getForm($id = null) {
      $data['rs'] = Amphoes::find($id);
      return view('setting.amphoe.form',$data);
    }

    public function postSave(Request $rq, $id = null) {
      // Save
  		$model = $id?Amphoes::find($id):new Amphoes;
      $model->fill($rq->all());
  		$model->save();

  		set_notify('success', trans('message.completeSave'));
  		return Redirect('setting/amphoe');
  	}

    public function getDelete($id = null) {
  		if($rs = Amphoes::find($id)) {
  			$rs->delete(); // Delete process
        set_notify('error', trans('message.completeDelete'));
  		}
  		return Redirect('setting/amphoe');
  	}
}
