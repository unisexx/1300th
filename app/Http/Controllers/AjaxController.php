<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use Form;
use DB;

class AjaxController extends Controller
{
  // เลือกประเทศ select จังหวัด
  public function getSelectprovince(){
    return Form::select(@$_GET['prefix'].'provinces_id', dropdownOption('provinces', 'id', 'name', "countries_id = '".$_GET['countries_id']."'",'name asc'), @$_GET['provinces_id'], array('class'=>'selectpicker provinces', 'placeholder'=>'เลือกจังหวัด/รัฐ','data-live-search'=>'true'));
  }

  // เลือกจังหวัด select อำเภอ
  public function getSelectamphoe(){
    return Form::select(@$_GET['prefix'].'amphoes_id', dropdownOption('amphoes', 'id', 'name', "provinces_id = '".$_GET['provinces_id']."'",'name asc'), @$_GET['amphoes_id'], array('class'=>'selectpicker amphoes', 'placeholder'=>'เลือกอำเภอ','data-live-search'=>'true'));
  }

  // เลือกอำเภอ select ตำบล
  public function getSelecttumbon(){
    return Form::select(@$_GET['prefix'].'tumbons_id', dropdownOption('tumbons', 'id', 'name', "amphoes_id = '".$_GET['amphoes_id']."'",'name asc'), @$_GET['tumbons_id'], array('class'=>'selectpicker tumbons', 'placeholder'=>'เลือกตำบล','data-live-search'=>'true'));
  }

  // select กลุ่มเป้าหมาย
  public function getSelecttarget(){
    return Form::select('parent_id', dropdownOption('targets', 'id', 'name', "parent_id = '".$_GET['parent_id']."'",'name asc'), @$_GET['parent_id'], array('class'=>'selectpicker tumbons','data-live-search'=>'true'));
  }

  // select กระทรวง/กรม/สำนัก/กอง
  public function getSelectdepartment(){
    $selectFormName = @$_GET['selectFormName'] != "" ? @$_GET['selectFormName'] : 'parent_id' ;
    return Form::select($selectFormName, dropdownOption('departments', 'id', 'name', "parent_id = '".$_GET['parent_id']."'",'name asc'), @$_GET['parent_id'], array('class'=>'selectpicker','data-live-search'=>'true'));
  }
}
