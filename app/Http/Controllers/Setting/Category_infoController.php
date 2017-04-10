<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Category_infos;

use DB;

class Category_infoController extends Controller {
  public function getIndex() {
    $data['rs'] = new Category_infos;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.category_info.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Category_infos::find($id);
    return view('setting.category_info.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Category_infos::find($id):new Category_infos;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/category_info');
  }

  public function getDelete($id = null) {
    if($rs = Category_infos::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/category_info');
  }
}
