@extends('layout/default')

@section('content')


<h3>กระทรวง / กรม / สำนัก/กอง / กลุ่ม/ฝ่าย (เพิ่ม / แก้ไข)</h3>
<form method="post" action="setting/department/save/{{ @$rs->id }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="tbadd">

@if($tier == 0)

<tr>
  <th>รหัสกระทรวง<span class="Txt_red_12"> *</span></th>
  <td>
    <input name="code" value="{{ @$rs->code }}" type="text" class="form-control numOnly" style="width:150px;"/>
</td>
</tr>
<tr>
  <th>ชื่อกระทรวง / ที่ตั้ง <span class="Txt_red_12">*</span></th>
  <td>
    <span class="form-inline">
      <input name="name" value="{{ @$rs->name }}" type="text" class="form-control" style="width:400px;"/>
      /
      {!! Form::select('provinces_id', dropdownOption('provinces', 'id', 'name', '', 'name asc'), @$rs->provinces_id, array('class'=>'form-control', 'placeholder'=>'- เลือกที่ตั้งจังหวัด -')) !!}
    </span>
  </td>
</tr>
<tr>
  <th>เปิด / ปิดการใช้งาน</th>
  <td>
    <input type="hidden" name="status" value="0">
    <input name="status" type="checkbox" value="1" {{ @$rs->status == 1 ? 'checked' : '' }}/> เปิดใช้งาน
    <input name="parent_id" type="hidden" value="0">
  </td>
</tr>

@elseif ($tier == 1)

<tr>
  <th>รหัสกรม<span class="Txt_red_12"> *</span></th>
  <td><input name="code" value="{{ @$rs->code }}" type="text" class="form-control numOnly" style="width:150px;"/></td>
</tr>
<tr>
  <th>ชื่อกรม / ที่ตั้ง<span class="Txt_red_12">*</span></th>
  <td><span class="form-inline">
    <input name="name" value="{{ @$rs->name }}" type="text" class="form-control" style="width:400px;"/>
    /
    {!! Form::select('provinces_id', dropdownOption('provinces', 'id', 'name', '', 'name asc'), @$rs->provinces_id, array('class'=>'form-control', 'placeholder'=>'- เลือกที่ตั้งจังหวัด -')) !!}
    </span></td>
</tr>
<tr>
  <th>กระทรวง<span class="Txt_red_12"> *</span></th>
  <td>
    {!! Form::select('parent_id', dropdownOption('departments', 'id', 'name', 'parent_id = 0', 'name asc'), @$parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกกระทรวง')) !!}
  </td>
</tr>
<tr>
  <th>เปิด / ปิดการใช้งาน</th>
  <td>
    <input type="hidden" name="status" value="0">
    <input name="status" type="checkbox" value="1" {{ @$rs->status == 1 ? 'checked' : '' }}/> เปิดใช้งาน
  </td>
</tr>

@elseif ($tier == 2)

<tr>
  <th>รหัสสำนัก/กอง<span class="Txt_red_12"> *</span></th>
  <td><input name="code" type="text" class="form-control" value="{{ @$rs->code }}" style="width:150px;"/></td>
</tr>
<tr>
  <th>ชื่อสำนัก/กอง  / ที่ตั้ง<span class="Txt_red_12"> *</span></th>
  <td>
    <span class="form-inline">
      <input name="name" value="{{ @$rs->name }}" type="text" class="form-control" style="width:400px;"/>
      /
      {!! Form::select('provinces_id', dropdownOption('provinces', 'id', 'name', '', 'name asc'), @$rs->provinces_id, array('class'=>'form-control', 'placeholder'=>'- เลือกที่ตั้งจังหวัด -')) !!}
    </span></td>
</tr>
<tr>
  <th>กระทรวง<span class="Txt_red_12"> *</span> &gt; กรม<span class="Txt_red_12"> *</span></th>
  <td>
    <span class="SelectElement">
    {!! Form::select('target_id', dropdownOption('departments', 'id', 'name',"parent_id = 0", 'name asc'), @$parent->parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกกระทรวง')) !!}
    </span>
    &gt;
    <span class="SelectElement">
    {!! Form::select('parent_id', dropdownOption('departments', 'id', 'name',"parent_id = '".@$parent->parent_id."'",'name asc'), @$parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกกรม')) !!}
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

@elseif ($tier == 3)

<tr>
  <th>รหัสกลุ่ม/ฝ่าย<span class="Txt_red_12"> *</span></th>
  <td><input name="code" type="text" class="form-control" value="{{ @$rs->code }}" style="width:150px;"/></td>
</tr>
<tr>
  <th>ชื่อกลุ่ม/ฝ่าย  / ที่ตั้ง<span class="Txt_red_12"> *</span></th>
  <td>
    <span class="form-inline">
    <input name="name" value="{{ @$rs->name }}" type="text" class="form-control" style="width:400px;"/>
    /
    {!! Form::select('provinces_id', dropdownOption('provinces', 'id', 'name', '', 'name asc'), @$rs->provinces_id, array('class'=>'form-control', 'placeholder'=>'- เลือกที่ตั้งจังหวัด -')) !!}
    </span>
  </td>
</tr>
<tr>
  <th>กระทรวง<span class="Txt_red_12"> *</span> &gt; กรม<span class="Txt_red_12"> * </span>&gt; สำนัก/กอง<span class="Txt_red_12"> *</span></th>
  <td>
    <span class="SelectElement">
    {!! Form::select('target_id', dropdownOption('departments', 'id', 'name',"parent_id = 0", 'name asc'), @$parent->parent->parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกกระทรวง')) !!}
    </span>
    &gt;
    <span class="SelectElement">
    {!! Form::select('problem_id', dropdownOption('departments', 'id', 'name',"parent_id = '".@$parent->parent->parent_id."'", 'name asc'), @$parent->parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกกรม')) !!}
    </span>
    &gt;
    <span class="SelectElement">
    {!! Form::select('parent_id', dropdownOption('departments', 'id', 'name',"parent_id = '".@$parent->parent_id."'",'name asc'), @$parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกสำนัก/กอง')) !!}
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

@endif

</table>
<div id="btnBoxAdd">
  <input name="input" type="submit" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>
</form>


<script>
$(document).ready(function(){
  // select target หา child target
	$(document).on('change', "select", function() {
    var childElement = $(this).closest('.SelectElement').next();
		var parent_id = $(this).val();

    // disable all child Element
    $(this).closest('.SelectElement').nextAll().find('select').val('');
    $(this).closest('.SelectElement').nextAll().find('select').prop('disabled', true);
    $(this).closest('.SelectElement').nextAll().find('select').selectpicker('refresh');

    AjaxSelectDepartment(parent_id,childElement);
	});
});

function AjaxSelectDepartment($parent_id,$childElement){
  $.get('ajax/selectdepartment',{
    'parent_id' : $parent_id
  },function(data){
    $childElement.html(data);
    // ถ้า select ข้อมูลที่ดึงมาใช้ data-live-search=true ต้องทำการ refresh ด้วย
    $childElement.find('select').selectpicker('refresh');
  });
}
</script>


@endsection
