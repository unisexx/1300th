<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Risks;

use DB;

class RiskController extends Controller {
  public function getIndex() {
    $data['rs'] = new Risks;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.risk.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Risks::find($id);
    return view('setting.risk.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Risks::find($id):new Risks;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/risk');
  }

  public function getDelete($id = null) {
    if($rs = Risks::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/risk');
  }
}
