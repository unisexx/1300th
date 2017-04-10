<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Helps;

use DB;

class HelpController extends Controller {
  public function getIndex() {
    $data['rs'] = new Helps;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.help.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Helps::find($id);
    return view('setting.help.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Helps::find($id):new Helps;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/help');
  }

  public function getDelete($id = null) {
    if($rs = Helps::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/help');
  }
}
