<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Prefixs;

use DB;

class PrefixController extends Controller {
  public function getIndex() {
    $data['rs'] = new Prefixs;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name_th', 'like', '%'.$_GET['search'].'%')->orWhere('name_en','like','%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    $data['no'] = (empty($_GET['page']))?0:($_GET['page']-1)*20;
    return view('setting.prefix.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Prefixs::find($id);
    return view('setting.prefix.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Prefixs::find($id):new Prefixs;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/prefix');
  }

  public function getDelete($id = null) {
    if($rs = Prefixs::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/prefix');
  }
}
