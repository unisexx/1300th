<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Genders;

use DB;

class GenderController extends Controller {
  public function getIndex() {
    $data['rs'] = new Genders;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.gender.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Genders::find($id);
    return view('setting.gender.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Genders::find($id):new Genders;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/gender');
  }

  public function getDelete($id = null) {
    if($rs = Genders::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/gender');
  }
}
