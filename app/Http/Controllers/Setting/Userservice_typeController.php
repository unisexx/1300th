<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Userservice_types;

use DB;

class Userservice_typeController extends Controller {
  public function getIndex() {
    $data['rs'] = new Userservice_types;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.userservice_type.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Userservice_types::find($id);
    return view('setting.userservice_type.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Userservice_types::find($id):new Userservice_types;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/userservice_type');
  }

  public function getDelete($id = null) {
    if($rs = Userservice_types::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/userservice_type');
  }
}
