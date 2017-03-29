<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Users;

use Form;
use DB;

class UserController extends Controller {
  public function getIndex() {
    $data['rs'] = new Users;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    $data['no'] = (empty($_GET['page']))?0:($_GET['page']-1)*20;
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
