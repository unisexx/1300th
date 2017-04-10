<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Targets;

use Form;
use DB;

class TargetController extends Controller {
  public function getIndex() {
    $data['rs'] = new Targets;
    $data['rs'] = $data['rs']->where('parent_id','0')->orderBy('id','desc')->get();
    return view('setting.target.index',$data);
  }

  public function getForm($tier,$parent_id = null,$id = null) {
    $data['tier'] = $tier;
    $data['parent'] = Targets::find($parent_id);
    $data['rs'] = Targets::find($id);
    return view('setting.target.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Targets::find($id):new Targets;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/target');
  }

  public function getDelete($id = null) {
    if($rs = Targets::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/target');
  }
}
