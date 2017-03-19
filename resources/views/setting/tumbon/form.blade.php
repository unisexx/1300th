@extends('layout/default')

@section('content')

<h3>ตำบล (เพิ่ม / แก้ไข)</h3>
<form method="post" action="setting/tumbon/save/{{ @$rs->id }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="tbadd">
<tr>
  <th>รหัส<span class="Txt_red_12">ตำบล *</span></th>
  <td><input name="code" value="{{ @$rs->code }}" type="text" class="form-control" placeholder="รหัส" style="width:200px;" /></td>
</tr>
<tr>
  <th>ชื่อตำบล<span class="Txt_red_12"> *</span></th>
  <td>
    <input name="name" value="{{ @$rs->name }}" type="text" class="form-control" placeholder="ชื่อตำบล" style="width:500px;" />
</td>
</tr>
<tr>
  <th>จังหวัด / อำเภอ<span class="Txt_red_12"> *</span></th>
  <td>
    <div class="form-inline">
      {!! Form::select('provinces_id', dropdownOption('provinces', 'id', 'name', '', 'name asc'), @$rs->provinces_id, array('class'=>'selectpicker','data-live-search'=>'true', 'placeholder'=>'เลือกจังหวัด')) !!}

      /
      <span class="SpanAmphoe">
        <select name="lunch" class="selectpicker" id="lunch2" title="เลือกอำเภอ" data-live-search="true" disabled>
          <option></option>
        </select>
      </span>
    </div>
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

<script type="text/javascript">
$(document).ready(function(){
  // ฟอร์มแก้ไข โหลดอำเภอ
  var provinces_id = '{{ @$rs->provinces_id }}';
  var amphoes_id = '{{ @$rs->amphoes_id }}';
  var amphurElement = $('.SpanAmphoe');
  AjaxSelectAmphoe(provinces_id,amphurElement,amphoes_id);

  // select จังหวัด หา อำเภอ
	$(document).on('change', "select[name='provinces_id']", function() {
		var provinces_id = $(this).val();
		var amphurElement = $(this).closest('.form-inline').find(".SpanAmphoe");
    AjaxSelectAmphoe(provinces_id,amphurElement);
	});
});

function AjaxSelectAmphoe($provinces_id,$amphoe_element,$amphoes_id_selected=false){
  if($provinces_id == ""){
    $amphoe_element.find('select').val('').attr("disabled", true);
    $amphoe_element.find('select').selectpicker('refresh');
  }else{
    $.get('ajax/selectamphoe',{
      'provinces_id' : $provinces_id,
      'amphoes_id' :  $amphoes_id_selected,
    },function(data){
      $amphoe_element.html(data);
      // ถ้า select ข้อมูลที่ดึงมาใช้ data-live-search=true ต้องทำการ refresh ด้วย
      $amphoe_element.find('select').selectpicker('refresh');
    });
  }
}
</script>


@endsection
