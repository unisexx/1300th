@extends('layout/default')

@section('content')


<h3>ประเทศ (เพิ่ม / แก้ไข)</h3>
<form method="post" action="setting/country/save">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="tbadd">
<tr>
  <th>รหัสประเทศ</th>
  <td><input name="code" type="text" class="form-control" value="" style="width:150px;"/></td>
</tr>
<tr>
  <th>ชื่อประเทศ<span class="Txt_red_12"> *</span></th>
  <td>
    <input name="name" type="text" class="form-control" placeholder="ชื่อประเทศ" style="width:500px;" />
  </td>
</tr>
<tr>
  <th>รหัสโทรศัพท์<span class="Txt_red_12"> *</span></th>
  <td>
    <input name="phone" type="text" class="form-control" placeholder="รหัสโทรศัพท์" style="width:500px;" />
  </td>
</tr>
<tr>
  <th>เปิด / ปิดการใช้งาน</th>
  <td><input name="status" type="checkbox" value="1" checked="checked" />
    เปิดใช้งาน</td>
</tr>
</table>
<div id="btnBoxAdd">
  <input name="input" type="submit" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>
</form>


@endsection
