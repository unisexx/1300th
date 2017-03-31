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
      return view('ticket.form');
    }

    // ผู้ขอรับการช่วยเหลือ
    public function getAjaxloadreceive(){
      return view('ticket.receive.index');
    }

    public function getAjaxloadreceiveform(){
      return view('ticket.receive.form');
    }

    // ผู้กระทำความผิด
    public function getAjaxloadoffender(){
      return view('ticket.offender.index');
    }

    public function getAjaxloadoffenderform(){
      return view('ticket.offender.form');
    }

    // แผนและการช่วยเหลือ
    public function getAjaxloadplan(){
      return view('ticket.plan.index');
    }

    public function getAjaxloadplanform(){
      return view('ticket.plan.form');
    }

    // ผลการช่วยเหลือ
    public function getAjaxloadresult(){
      return view('ticket.result.index');
    }

    public function getAjaxloadresultform(){
      return view('ticket.result.form');
    }

    // เอกสารแนบ
    public function getAjaxloadattach(){
      return view('ticket.attach.index');
    }

    public function getAjaxloadattachform(){
      return view('ticket.attach.form');
    }
}
