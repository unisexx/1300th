<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Users;
use App\Models\Departments;

use Form;
use DB;

class UserController extends Controller {
  public function getIndex() {
    // select หน่วยงาน
    $data['departments'] = Departments::where('parent_id', 1)->orderBy('name', 'desc')->get();

    $data['rs'] = new Users;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }
    if(!empty($_GET['positions_id'])){
      $data['rs'] = $data['rs']->where('positions_id',$_GET['positions_id']);
    }
    if(!empty($_GET['permission_groups_id'])){
      $data['rs'] = $data['rs']->where('permission_groups_id',$_GET['permission_groups_id']);
    }
    if(!empty($_GET['departments_id'])){
      $data['rs'] = $data['rs']->where('departments_id',$_GET['departments_id']);
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.user.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Users::find($id);
    return view('setting.user.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Users::find($id):new Users;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/user');
  }

  public function getDelete($id = null) {
    if($rs = Users::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/user');
  }
}
