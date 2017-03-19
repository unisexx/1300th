<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Doc_types;

use DB;

class Doc_typeController extends Controller {
  public function getIndex() {
    $data['rs'] = new Doc_types;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    $data['no'] = (empty($_GET['page']))?0:($_GET['page']-1)*20;
    return view('setting.doc_type.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Doc_types::find($id);
    return view('setting.doc_type.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Doc_types::find($id):new Doc_types;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/doc_type');
  }

  public function getDelete($id = null) {
    if($rs = Doc_types::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/doc_type');
  }
}
