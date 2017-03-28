@extends('layout/default')

@section('content')


<h3>สิทธิ์การใช้งาน (เพิ่ม / แก้ไข)</h3>
<form method="post" action="setting/permission/save/{{ @$rs->id }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table class="tbadd">
<tr>
  <th>ชื่อสิทธิ์การใช้งาน<span class="Txt_red_12"> *</span></th>
  <td><input name="name" value="{{ @$rs->name }}" type="text" class="form-control" style="width:400px;"/></td>
</tr>
<tr>
  <th>สิทธิ์การใช้งาน<span class="Txt_red_12"> *</span></th>
  <td>
    <label class="chkbox">
      <input type="radio" name="permissions_id[]" value="1" /> ส่วนกลาง
    </label>
    <label class="chkbox">
      <input type="radio" name="permissions_id[]" value="2" /> ส่วนจังหวัด
    </label>
    <span style="border-bottom:#999 dashed 1px; margin-bottom:10px;">
    <label style="font-weight:700;">
      <input type="checkbox" name="permissions_id[]" value="3" /> IsAdmin
    </label>
    </span>
</td>
</tr>
<tr>
  <th colspan="2" class="topic">เรื่องรับแจ้ง</th>
</tr>
<tr>
  <th class="paddL40">รับเรื่อง</th>
  <td>
    <label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="4" />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="5" />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="6" />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="7" />
    ลบ</label>
  </td>
</tr>
<tr>
  <th class="paddL40">แผนการช่วยเหลือ</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="8" />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="9" />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="10" />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="11" />
      ลบ</label></td>
  </tr>
<tr>
  <th class="paddL40">ผลการช่วยเหลือ</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="12" />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="13" />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="14" />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="15" />
      ลบ</label></td>
  </tr>
<tr>
  <th class="paddL40">สรุปยุติปัญหา</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="16" />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="17" />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="18" />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="19" />
      ลบ</label></td>
  </tr>
<tr>
  <th class="paddL40">เอกสารแนบ</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="20" />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="21" />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="22" />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="23" />
    ลบ</label></td>
</tr>
<tr>
  <th>ผู้ใช้งาน</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="24" />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="25" />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="26" />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="27" />
    ลบ</label></td>
</tr>
<tr>
  <th>สิทธิ์ผู้ใช้งาน</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="28" />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="29" />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="30" />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="31" />
    ลบ</label></td>
  </tr>
<tr>
  <th>ตั้งค่าข้อมูลหลัก</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="32" />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="33" />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="34" />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="35" />
    ลบ</label></td>
  </tr>
<tr>
  <th>รายงาน</th>
  <td><input type="checkbox" name="permissions_id[]" value="36" />
    ดู</td>
</tr>
</table>
<div id="btnBoxAdd">
  <input name="input" type="submit" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>
</form>


@endsection
