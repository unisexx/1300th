<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Races;

use DB;

class RaceController extends Controller {
  public function getIndex() {
    $data['rs'] = new Races;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.race.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Races::find($id);
    return view('setting.race.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Races::find($id):new Races;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/race');
  }

  public function getDelete($id = null) {
    if($rs = Races::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/race');
  }
}
