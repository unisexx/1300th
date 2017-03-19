<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Channel_knows;

use DB;

class Channel_knowController extends Controller {
  public function getIndex() {
    $data['rs'] = new Channel_knows;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    $data['no'] = (empty($_GET['page']))?0:($_GET['page']-1)*20;
    return view('setting.channel_know.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Channel_knows::find($id);
    return view('setting.channel_know.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Channel_knows::find($id):new Channel_knows;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/channel_know');
  }

  public function getDelete($id = null) {
    if($rs = Channel_knows::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/channel_know');
  }
}
