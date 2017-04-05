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
      return view('ticket.index');
    }

    public function getForm() {
      // การประเมินความเสี่ยง
      $data['risks'] = DB::table('risks')->orderBy('id', 'asc')->get();

      return view('ticket.form',$data);
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
