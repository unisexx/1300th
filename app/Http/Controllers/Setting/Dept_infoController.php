<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Dept_infos;

use DB;

class Dept_infoController extends Controller {
  public function getIndex() {
    $data['rs'] = new Dept_infos;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    $data['no'] = (empty($_GET['page']))?0:($_GET['page']-1)*20;
    return view('setting.dept_info.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Dept_infos::find($id);
    return view('setting.dept_info.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Dept_infos::find($id):new Dept_infos;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/dept_info');
  }

  public function getDelete($id = null) {
    if($rs = Dept_infos::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/dept_info');
  }
}
