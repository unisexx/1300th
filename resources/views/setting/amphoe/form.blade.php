@extends('layout/default')

@section('content')


<h3>อำเภอ (เพิ่ม / แก้ไข)</h3>
<form method="post" action="setting/amphoe/save/{{ @$rs->id }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="tbadd">
<tr>
  <th>รหัส<span class="Txt_red_12">อำเภอ *</span></th>
  <td><input name="code" value="{{ @$rs->code }}" type="text" class="form-control" placeholder="รหัส" style="width:200px;" /></td>
</tr>
<tr>
  <th>ชื่ออำเภอ<span class="Txt_red_12"> *</span></th>
  <td>
    <input name="name" value="{{ @$rs->name }}" type="text" class="form-control" placeholder="ชื่ออำเภอ" style="width:500px;" />
</td>
</tr>
<tr>
  <th>จังหวัด<span class="Txt_red_12"> *</span></th>
  <td>
    <span class="form-inline">
    {!! Form::select('provinces_id', dropdownOption('provinces', 'id', 'name', '', 'name asc'), @$rs->provinces_id, array('class'=>'form-control', 'placeholder'=>'- เลือกจังหวัด -')) !!}
    </span>
</td>
</tr>
<tr>
  <th>เปิด / ปิดการใช้งาน</th>
  <td>
    <input type="hidden" name="status" value="0">
    <input name="status" type="checkbox" value="1" {{ @$rs->status == 1 ? 'checked' : '' }}/> เปิดใช้งาน
  </td>
</tr>
</table>
<div id="btnBoxAdd">
  <input name="input" type="submit" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>
</form>

@endsection
