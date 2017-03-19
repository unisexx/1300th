@extends('layout/default')

@section('content')


<h3>แนวทางการช่วยเหลือฯ (เพิ่ม / แก้ไข)</h3>
<form method="post" action="setting/help/save/{{ @$rs->id }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="tbadd">
<tr>
  <th>ชื่อแนวทางการช่วยเหลือฯ<span class="Txt_red_12"> *</span></th>
  <td>
    <input name="name" value="{{ @$rs->name }}" type="text" class="form-control" placeholder="ชื่อแนวทางการช่วยเหลือฯ" style="width:350px;" />
    </td>
</tr>
<tr>
  <th>แบบมีระบุ</th>
  <td>
    <input type="hidden" name="fill" value="0">
    <input name="fill" type="checkbox" value="1" {{ @$rs->fill == 1 ? 'checked' : '' }}/>
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
