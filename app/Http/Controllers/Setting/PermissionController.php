<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Permissions;
use App\Models\Permission_groups;
use App\Models\Permission_roles;

use DB;

class PermissionController extends Controller {
    public function getIndex() {
      $data['rs'] = new Permission_groups;

      //search
      if(!empty($_GET['search'])){
        $data['rs'] = $data['rs']->where('name', 'like', '%'.$_GET['search'].'%');
      }

      $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
      $data['no'] = (empty($_GET['page']))?0:($_GET['page']-1)*20;
      return view('setting.permission.index',$data);
    }

    public function getForm($id = null) {
      $data['rs'] = Permission_groups::find($id);
      return view('setting.permission.form',$data);
    }

    public function postSave(Request $rq, $id = null) {
      // Save Permission_group
      $model = $id?Permission_groups::find($id):new Permission_groups;
      $model->fill($rq->all());
      $model->save();

      // Save Permission_role
      Permission_roles::where('permission_groups_id',$model->id)->delete();
      foreach($rq->input('permissions_id') as $key=>$item){
  			// ถ้า input ไม่เป็นค่าว่างให้ทำการเซฟ
  			if($item != ""){
          $permission_roles = new Permission_roles;
          $permission_roles->permission_groups_id = $model->id;
          $permission_roles->permissions_id = $item;
          $permission_roles->save();
        }
      }


      set_notify('success', trans('message.completeSave'));
      return Redirect('setting/permission');
    }

    public function getDelete($id = null) {
      if($rs = Permission_groups::find($id)) {
        $rs->delete(); // Delete process
        Permission_roles::where('permission_groups_id',$id)->delete();
        set_notify('error', trans('message.completeDelete'));
      }
      return Redirect('setting/permission');
    }
}
