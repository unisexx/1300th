<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Positions;

use DB;

class PositionController extends Controller {
  public function getIndex() {
    $data['rs'] = new Positions;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.position.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Positions::find($id);
    return view('setting.position.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Positions::find($id):new Positions;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/position');
  }

  public function getDelete($id = null) {
    if($rs = Positions::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/position');
  }
}
