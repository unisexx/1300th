@extends('layout/default')

@section('content')


<h3>ผู้ใช้งาน (เพิ่ม / แก้ไข)</h3>
<form method="post" action="setting/tumbon/save/{{ @$rs->id }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="tbadd">
<tr>
  <th>ชื่อ-สกุลผู้ใช้งาน<span class="Txt_red_12"> *</span></th>
  <td><input name="name" value="{{ @$rs->name }}" type="text" class="form-control" style="width:400px;"/></td>
</tr>
<tr>
  <th>สังกัด กรม &gt; สำนัก/กอง <span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
    <span class="SelectElement">
    {!! Form::select('parent_id', dropdownOption('departments', 'id', 'name',"parent_id = 1",'name asc'), @$parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกกรม')) !!}
    </span>
    >
    <span class="SelectElement">
    {!! Form::select('parent_id', dropdownOption('departments', 'id', 'name',"parent_id = '".@$rs->departments->parent_id."'",'name asc'), @$rs->departments_id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกสำนัก/กอง')) !!}
    </span>

  </div> </td>
</tr>
<tr>
  <th>ตำแหน่ง <span class="Txt_red_12"> *</span></th>
  <td>
    {!! Form::select('positions_id', dropdownOption('positions', 'id', 'name', '','name asc'), @$rs->positions_id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกตำแหน่ง')) !!}
  </td>
</tr>
<tr>
  <th>อีเมล์<span class="Txt_red_12"> *</span>  / หมายเลขติดต่อ</th>
  <td>
    <span class="form-inline">
      <input name="textarea4" type="text" class="form-control" id="textarea4" value="" placeholder="อีเมล์" style="width:300px;"/>
      /
      <input name="textarea5" type="text" class="form-control" id="textarea5" value="" placeholder="เบอร์ติดต่อ" style="width:300px;"/></span>
    </span>
    </td>
</tr>
<tr>
  <th>สิทธิ์การใช้งาน</th>
  <td><span class="form-inline">
    {!! Form::select('permission_groups_id', dropdownOption('permission_groups', 'id', 'name', '','name asc'), @$rs->permission_groups_id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกสิทธิ์การใช้งาน')) !!}
    </span></td>
</tr>
<tr>
  <th>Username<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea2" type="text" class="form-control" id="textarea2" value="" style="width:200px;"/></td>
</tr>
<tr>
  <th>Password<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea" type="text" class="form-control" id="textarea" value="" style="width:200px;"/></td>
</tr>
<tr>
  <th>Confirm Password<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea3" type="text" class="form-control" id="textarea3" value="" style="width:200px;"/></td>
</tr>
</table>
<div id="btnBoxAdd">
  <input name="input" type="submit" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>
</form>


@endsection
