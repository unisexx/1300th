<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Dept_out_types;

use DB;

class Dept_out_typeController extends Controller {
  public function getIndex() {
    $data['rs'] = new Dept_out_types;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.dept_out_type.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Dept_out_types::find($id);
    return view('setting.dept_out_type.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Dept_out_types::find($id):new Dept_out_types;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/dept_out_type');
  }

  public function getDelete($id = null) {
    if($rs = Dept_out_types::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/dept_out_type');
  }
}
