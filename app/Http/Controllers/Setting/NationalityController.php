<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Nationalities;

use DB;

class NationalityController extends Controller {
  public function getIndex() {
    $data['rs'] = new Nationalities;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name_th', 'like', '%'.$_GET['search'].'%')->orWhere('name_en','like','%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.nationality.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Nationalities::find($id);
    return view('setting.nationality.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Nationalities::find($id):new Nationalities;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/nationality');
  }

  public function getDelete($id = null) {
    if($rs = Nationalities::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/nationality');
  }
}
