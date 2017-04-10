<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Cable_types;

use DB;

class Cable_typeController extends Controller {
  public function getIndex() {
    $data['rs'] = new Cable_types;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.cable_type.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Cable_types::find($id);
    return view('setting.cable_type.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Cable_types::find($id):new Cable_types;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/cable_type');
  }

  public function getDelete($id = null) {
    if($rs = Cable_types::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/cable_type');
  }
}
