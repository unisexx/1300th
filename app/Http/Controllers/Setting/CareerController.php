<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Careers;

use DB;

class CareerController extends Controller {
  public function getIndex() {
    $data['rs'] = new Careers;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    $data['no'] = (empty($_GET['page']))?0:($_GET['page']-1)*20;
    return view('setting.career.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Careers::find($id);
    return view('setting.career.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Careers::find($id):new Careers;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/career');
  }

  public function getDelete($id = null) {
    if($rs = Careers::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/career');
  }
}
