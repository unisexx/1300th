@extends('layout/default')

@section('content')


<h3>หน่วยงานภายนอก (เพิ่ม / แก้ไข)</h3>
<form method="post" action="setting/dept_out/save/{{ @$rs->id }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="tbadd">
<tr>
  <th>ชื่อหน่วยงานภายนอก<span class="Txt_red_12"> *</span></th>
  <td>
    <input name="name" value="{{ @$rs->name }}" type="text" class="form-control" placeholder="ชื่อหน่วยงานภายนอก" style="width:500px;" />
</td>
</tr>
<tr>
  <th>ลักษณะหน่วยงาน<span class="Txt_red_12"> *</span></th>
  <td>
    <span class="form-inline">
    {!! Form::select('dept_out_types_id', dropdownOption('dept_out_types', 'id', 'name', '', 'name asc'), @$rs->dept_out_types_id, array('class'=>'form-control', 'placeholder'=>'- ลักษณะหน่วยงาน -')) !!}
    </span>
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
