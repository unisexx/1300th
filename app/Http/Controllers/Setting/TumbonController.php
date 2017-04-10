<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Tumbons;

use Form;
use DB;

class TumbonController extends Controller {
  public function getIndex() {
    $data['rs'] = new Tumbons;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }
    if(!empty($_GET['provinces_id'])){
      $data['rs'] = $data['rs']->where('provinces_id',$_GET['provinces_id']);
    }
    if(!empty($_GET['amphoes_id'])){
      $data['rs'] = $data['rs']->where('amphoes_id',$_GET['amphoes_id']);
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.tumbon.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Tumbons::find($id);
    return view('setting.tumbon.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Tumbons::find($id):new Tumbons;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/tumbon');
  }

  public function getDelete($id = null) {
    if($rs = Tumbons::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/tumbon');
  }
}
