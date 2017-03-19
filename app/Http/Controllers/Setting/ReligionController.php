<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Religions;

use DB;

class ReligionController extends Controller {
  public function getIndex() {
    $data['rs'] = new Religions;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    $data['no'] = (empty($_GET['page']))?0:($_GET['page']-1)*20;
    return view('setting.religion.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Religions::find($id);
    return view('setting.religion.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Religions::find($id):new Religions;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/religion');
  }

  public function getDelete($id = null) {
    if($rs = Religions::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/religion');
  }
}
