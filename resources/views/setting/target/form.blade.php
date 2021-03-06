@extends('layout/default')

@section('content')


<h3>กลุ่มเป้าหมาย / ปัญหาหลัก / ปัญหาย่่อย (เพิ่ม / แก้ไข)</h3>
<form method="post" action="setting/target/save/{{ @$rs->id }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="tbadd">

@if($tier == 0)

<tr>
  <th>รหัสกลุ่มเป้าหมาย<span class="Txt_red_12"> *</span></th>
  <td><input name="code" type="text" class="form-control" value="{{ @$rs->code }}" style="width:150px;"/></td>
</tr>
<tr>
  <th>ชื่อกลุ่มเป้าหมาย<span class="Txt_red_12"> *</span></th>
  <td><input name="name" value="{{ @$rs->name }}" type="text" class="form-control" style="width:400px;"/></td>
</tr>
<tr>
  <th>ช่วงอายุ</th>
  <td>
    {{ Form::selectRange('start_age', 0, 100, @$rs->start_age, array('class'=>'selectpicker','data-live-search'=>'true','title'=>'อายุ')) }}
    ปี -
    {{ Form::selectRange('end_age', 0, 100, @$rs->end_age, array('class'=>'selectpicker','data-live-search'=>'true','title'=>'อายุ')) }} ปี
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
  <th>รหัสปัญหาหลัก<span class="Txt_red_12"> *</span></th>
  <td><input name="code" type="text" class="form-control" value="{{ @$rs->code }}" style="width:150px;"/></td>
</tr>
<tr>
  <th>ชื่อปัญหาหลัก<span class="Txt_red_12"> *</span></th>
  <td><input name="name" value="{{ @$rs->name }}" type="text" class="form-control" style="width:400px;"/></td>
</tr>
<tr>
  <th>กลุ่มเป้าหมาย<span class="Txt_red_12"> *</span></th>
  <td>
    {!! Form::select('parent_id', dropdownOption('targets', 'id', 'name', 'parent_id = 0', 'name asc'), @$parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกกลุ่มเป้าหมาย')) !!}
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
  <th>รหัสปัญหาย่อย 1<span class="Txt_red_12"> *</span></th>
  <td><input name="code" type="text" class="form-control" value="{{ @$rs->code }}" style="width:150px;"/></td>
</tr>
<tr>
  <th>ชื่อปัญหาย่อย 1<span class="Txt_red_12"> *</span></th>
  <td><input name="name" value="{{ @$rs->name }}" type="text" class="form-control" style="width:400px;"/></td>
</tr>
<tr>
  <th>กลุ่มเป้าหมาย<span class="Txt_red_12"> *</span> &gt; ปัญหาหลัก<span class="Txt_red_12"> *</span></th>
  <td>
    <span class="SelectElement">
    {!! Form::select('target_id', dropdownOption('targets', 'id', 'name',"parent_id = 0", 'name asc'), @$parent->parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกกลุ่มเป้าหมาย')) !!}
    </span>
    &gt;
    <span class="SelectElement">
    {!! Form::select('parent_id', dropdownOption('targets', 'id', 'name',"parent_id = '".@$parent->parent_id."'",'name asc'), @$parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกปัญหาหลัก')) !!}
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
  <th>รหัสปัญหาย่อย 2<span class="Txt_red_12"> *</span></th>
  <td><input name="code" type="text" class="form-control" value="{{ @$rs->code }}" style="width:150px;"/></td>
</tr>
<tr>
  <th>ชื่อปัญหาย่อย 2<span class="Txt_red_12"> *</span></th>
  <td><input name="name" value="{{ @$rs->name }}" type="text" class="form-control" style="width:400px;"/></td>
</tr>
<tr>
  <th>กลุ่มเป้าหมาย<span class="Txt_red_12"> *</span> &gt; ปัญหาหลัก<span class="Txt_red_12"> * </span>&gt; ปัญหาย่อย 1<span class="Txt_red_12"> *</span></th>
  <td>
    <span class="SelectElement">
    {!! Form::select('target_id', dropdownOption('targets', 'id', 'name',"parent_id = 0", 'name asc'), @$parent->parent->parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกปัญหาหลัก')) !!}
    </span>
    &gt;
    <span class="SelectElement">
    {!! Form::select('problem_id', dropdownOption('targets', 'id', 'name',"parent_id = '".@$parent->parent->parent_id."'", 'name asc'), @$parent->parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกปัญหาหลัก')) !!}
    </span>
    &gt;
    <span class="SelectElement">
    {!! Form::select('parent_id', dropdownOption('targets', 'id', 'name',"parent_id = '".@$parent->parent_id."'",'name asc'), @$parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกปัญหาย่อย 1')) !!}
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

@elseif ($tier == 4)

<tr>
  <th>รหัสปัญหาย่อย 3<span class="Txt_red_12"> *</span></th>
  <td><input name="code" type="text" class="form-control" value="{{ @$rs->code }}" style="width:150px;"/></td>
</tr>
<tr>
  <th>ชื่อปัญหาย่อย 3<span class="Txt_red_12"> *</span></th>
  <td><input name="name" value="{{ @$rs->name }}" type="text" class="form-control" style="width:400px;"/></td>
</tr>
<tr>
  <th>กลุ่มเป้าหมาย<span class="Txt_red_12"> *</span> &gt; ปัญหาหลัก<span class="Txt_red_12"> * </span>&gt; ปัญหาย่อย 1 <span class="Txt_red_12"> *</span> &gt; ปัญหาย่อย 2 <span class="Txt_red_12"> *</span></th>
  <td>
    <span class="SelectElement">
    {!! Form::select('target_id', dropdownOption('targets', 'id', 'name',"parent_id = 0", 'name asc'), @$parent->parent->parent->parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกกลุ่มเป้าหมาย')) !!}
    </span>
    &gt;
    <span class="SelectElement">
    {!! Form::select('problem_id', dropdownOption('targets', 'id', 'name',"parent_id = '".@$parent->parent->parent->parent_id."'", 'name asc'), @$parent->parent->parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกปัญหาหลัก')) !!}
    </span>
    &gt;
    <span class="SelectElement">
    {!! Form::select('subproblem1_id', dropdownOption('targets', 'id', 'name',"parent_id = '".@$parent->parent->parent_id."'", 'name asc'), @$parent->parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกปัญหาย่อย 1')) !!}
    </span>
    &gt;
    <span class="SelectElement">
    {!! Form::select('parent_id', dropdownOption('targets', 'id', 'name',"parent_id = '".@$parent->parent_id."'",'name asc'), @$parent->id, array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'เลือกปัญหาย่อย 2')) !!}
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

    AjaxSelectTarget(parent_id,childElement);
	});
});

function AjaxSelectTarget($parent_id,$childElement){
  $.get('ajax/selecttarget',{
    'parent_id' : $parent_id
  },function(data){
    $childElement.html(data);
    // ถ้า select ข้อมูลที่ดึงมาใช้ data-live-search=true ต้องทำการ refresh ด้วย
    $childElement.find('select').selectpicker('refresh');
  });
}
</script>


@endsection
