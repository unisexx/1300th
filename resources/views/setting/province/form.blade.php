@extends('layout/default')

@section('content')



<h3>จังหวัด/รัฐ (เพิ่ม / แก้ไข)</h3>
<table class="tbadd">
<tr>
  <th>รหัสจังหวัด/รัฐ<span class="Txt_red_12"> *</span></th>
  <td><input name="textarea4" type="text" class="form-control" id="textarea4" value="" style="width:150px;"/></td>
</tr>
<tr>
  <th>ชื่อจังหวัด/รัฐ<span class="Txt_red_12"> *</span></th>
  <td>
    <input type="text" class="form-control" id="exampleInputName" placeholder="ชื่อจังหวัด" style="width:500px;" />
    </td>
</tr>
<tr>
  <th>ประเทศ<span class="Txt_red_12"> *</span></th>
  <td><span class="form-inline">
    <select name="select" class="form-control">
      <option>- เลือกประเทศ -</option>
    </select>
  </span></td>
</tr>
<tr>
  <th>เปิด / ปิดการใช้งาน</th>
  <td><input name="checkbox" type="checkbox" id="checkbox" checked="checked" />
    เปิดใช้งาน</td>
</tr>
</table>
<div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>



@endsection
