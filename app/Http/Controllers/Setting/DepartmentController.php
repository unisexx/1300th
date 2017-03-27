<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Departments;

use Form;
use DB;

class DepartmentController extends Controller {
  public function getIndex() {
    $data['rs'] = new Departments;
    $data['rs'] = $data['rs']->where('parent_id','0')->orderBy('id','desc')->get();
    $data['no'] = (empty($_GET['page']))?0:($_GET['page']-1)*20;
    return view('setting.department.index',$data);
  }

  public function getForm($tier,$parent_id = null,$id = null) {
    $data['tier'] = $tier;
    $data['parent'] = Departments::find($parent_id);
    $data['rs'] = Departments::find($id);
    return view('setting.department.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Departments::find($id):new Departments;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/department');
  }

  public function getDelete($id = null) {
    if($rs = Departments::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/department');
  }
}
