<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Channels;

use DB;

class ChannelController extends Controller {
  public function getIndex() {
    $data['rs'] = new Channels;

    //search
    if(!empty($_GET['search'])){
      $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
    }

    $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
    return view('setting.channel.index',$data);
  }

  public function getForm($id = null) {
    $data['rs'] = Channels::find($id);
    return view('setting.channel.form',$data);
  }

  public function postSave(Request $rq, $id = null) {
    // Save
    $model = $id?Channels::find($id):new Channels;
    $model->fill($rq->all());
    $model->save();

    set_notify('success', trans('message.completeSave'));
    return Redirect('setting/channel');
  }

  public function getDelete($id = null) {
    if($rs = Channels::find($id)) {
      $rs->delete(); // Delete process
      set_notify('error', trans('message.completeDelete'));
    }
    return Redirect('setting/channel');
  }
}
