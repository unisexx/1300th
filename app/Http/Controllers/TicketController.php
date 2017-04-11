<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Tickets;

use Form;
use DB;

class TicketController extends Controller {
    public function getIndex() {
      $data['rs'] = new Tickets;
      $data['rs'] = $data['rs']->orderBy('id','desc')->paginate();
      return view('ticket.index',$data);
    }

    public function getForm($id = null) {
      // การประเมินความเสี่ยง
      $data['risks'] = DB::table('risks')->orderBy('id', 'asc')->get();

      $data['rs'] = Tickets::find($id);
      return view('ticket.form',$data);
    }

    public function postSave(Request $rq, $id = null) {
      // convert variable value before save
      $rq->merge([
        'subj_notify_date' => DateToDB($rq->input('subj_notify_date'),$rq->input('subj_notify_time'))
        ,'event_date' => DateToDB($rq->input('event_date'),$rq->input('event_time'))
        ,'risks_id' => @implode(',', $rq->input('risks_id'))
        ,'conclude_notify_date' => DateToDB($rq->input('conclude_notify_date'))
        ,'conclude_date' => DateToDB($rq->input('conclude_date'),$rq->input('conclude_time'))
      ]);

      // Save
      $model = $id?Tickets::find($id):new Tickets;
      $model->fill($rq->all());
      $model->save();

      set_notify('success', trans('message.completeSave'));
      return Redirect('ticket');
    }

    public function getDelete($id = null) {
  		if($rs = Tickets::find($id)) {
  			$rs->delete(); // Delete process
        set_notify('error', trans('message.completeDelete'));
  		}
  		return Redirect('ticket');
  	}

    // ผู้ขอรับการช่วยเหลือ index
    public function getAjaxloadreceive(){
      return view('ticket.receive.index');
    }

    // ผู้ขอรับการช่วยเหลือ form
    public function getAjaxloadreceiveform(){
      return view('ticket.receive.form');
    }

    // ผู้กระทำความผิด index
    public function getAjaxloadoffender(){
      return view('ticket.offender.index');
    }

    // ผู้กระทำความผิด form
    public function getAjaxloadoffenderform(){
      return view('ticket.offender.form');
    }

    // แผนและการช่วยเหลือ index
    public function getAjaxloadplan(){
      return view('ticket.plan.index');
    }

    // แผนและการช่วยเหลือ form
    public function getAjaxloadplanform(){
      // แนวทางการช่วยเหลือ
      $data['helps'] = DB::table('helps')->orderBy('id', 'asc')->get();
      return view('ticket.plan.form',$data);
    }

    // ผลการช่วยเหลือ index
    public function getAjaxloadresult(){
      return view('ticket.result.index');
    }

    // ผลการช่วยเหลือ form
    public function getAjaxloadresultform(){
      return view('ticket.result.form');
    }

    // เอกสารแนบ index
    public function getAjaxloadattach(){
      return view('ticket.attach.index');
    }

    // เอกสารแนบ form
    public function getAjaxloadattachform(){
      return view('ticket.attach.form');
    }
}
