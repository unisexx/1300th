<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use Form;
use DB;

class AjaxController extends Controller
{
  // เลือกจังหวัด select อำเภอ
  public function getSelectamphoe(){
    return Form::select('amphoes_id', dropdownOption('amphoes', 'id', 'name', "provinces_id = '".$_GET['provinces_id']."'",'name asc'), @$_GET['amphoes_id'], array('class'=>'selectpicker', 'placeholder'=>'เลือกอำเภอ','data-live-search'=>'true'));
  }
}
