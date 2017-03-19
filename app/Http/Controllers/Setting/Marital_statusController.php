<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Marital_status;

use DB;

class Marital_statusController extends Controller {
  public function getIndex() {
    $data['rs'] = new Marital_status;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    $data['no'] = (empty($_GET['page']))?0:($_GET['page']-1)*20;
    return view('setting.marital_status.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Marital_status::find($id);
    return view('setting.marital_status.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Marital_status::find($id):new Marital_status;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/marital_status');
  }

  public function getDelete($id = null) {
    if($rs = Marital_status::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/marital_status');
  }
}
