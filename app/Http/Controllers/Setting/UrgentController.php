<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Urgents;

use DB;

class UrgentController extends Controller {
  public function getIndex() {
    $data['rs'] = new Urgents;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    $data['no'] = (empty($_GET['page']))?0:($_GET['page']-1)*20;
    return view('setting.urgent.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Urgents::find($id);
    return view('setting.urgent.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Urgents::find($id):new Urgents;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/urgent');
  }

  public function getDelete($id = null) {
    if($rs = Urgents::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/urgent');
  }
}
