<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Dept_outs;

use DB;

class Dept_outController extends Controller {
  public function getIndex() {
    $data['rs'] = new Dept_outs;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.dept_out.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Dept_outs::find($id);
    return view('setting.dept_out.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Dept_outs::find($id):new Dept_outs;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/dept_out');
  }

  public function getDelete($id = null) {
    if($rs = Dept_outs::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/dept_out');
  }
}
