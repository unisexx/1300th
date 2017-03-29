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
      <input type="radio" name="permissions_id[]" value="1" {{ @$rs->permission_roles->where('permissions_id','1')->first()->id != "" ? 'checked' : '' }} /> ส่วนกลาง
    </label>
    <label class="chkbox">
      <input type="radio" name="permissions_id[]" value="2" {{ @$rs->permission_roles->where('permissions_id','2')->first()->id != "" ? 'checked' : '' }} /> ส่วนจังหวัด
    </label>
    <span style="border-bottom:#999 dashed 1px; margin-bottom:10px;">
    <label style="font-weight:700;">
      <input type="checkbox" name="permissions_id[]" value="3" {{ @$rs->permission_roles->where('permissions_id','3')->first()->id != "" ? 'checked' : '' }} /> IsAdmin
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
    <input type="checkbox" name="permissions_id[]" value="4" {{ @$rs->permission_roles->where('permissions_id','4')->first()->id != "" ? 'checked' : '' }} />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="5" {{ @$rs->permission_roles->where('permissions_id','5')->first()->id != "" ? 'checked' : '' }} />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="6" {{ @$rs->permission_roles->where('permissions_id','6')->first()->id != "" ? 'checked' : '' }} />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="7" {{ @$rs->permission_roles->where('permissions_id','7')->first()->id != "" ? 'checked' : '' }} />
    ลบ</label>
  </td>
</tr>
<tr>
  <th class="paddL40">แผนการช่วยเหลือ</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="8" {{ @$rs->permission_roles->where('permissions_id','8')->first()->id != "" ? 'checked' : '' }} />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="9" {{ @$rs->permission_roles->where('permissions_id','9')->first()->id != "" ? 'checked' : '' }} />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="10" {{ @$rs->permission_roles->where('permissions_id','10')->first()->id != "" ? 'checked' : '' }} />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="11" {{ @$rs->permission_roles->where('permissions_id','11')->first()->id != "" ? 'checked' : '' }} />
      ลบ</label></td>
  </tr>
<tr>
  <th class="paddL40">ผลการช่วยเหลือ</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="12" {{ @$rs->permission_roles->where('permissions_id','12')->first()->id != "" ? 'checked' : '' }} />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="13" {{ @$rs->permission_roles->where('permissions_id','13')->first()->id != "" ? 'checked' : '' }} />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="14" {{ @$rs->permission_roles->where('permissions_id','14')->first()->id != "" ? 'checked' : '' }} />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="15" {{ @$rs->permission_roles->where('permissions_id','15')->first()->id != "" ? 'checked' : '' }} />
      ลบ</label></td>
  </tr>
<tr>
  <th class="paddL40">สรุปยุติปัญหา</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="16" {{ @$rs->permission_roles->where('permissions_id','16')->first()->id != "" ? 'checked' : '' }} />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="17" {{ @$rs->permission_roles->where('permissions_id','17')->first()->id != "" ? 'checked' : '' }} />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="18" {{ @$rs->permission_roles->where('permissions_id','18')->first()->id != "" ? 'checked' : '' }} />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="19" {{ @$rs->permission_roles->where('permissions_id','19')->first()->id != "" ? 'checked' : '' }} />
      ลบ</label></td>
  </tr>
<tr>
  <th class="paddL40">เอกสารแนบ</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="20" {{ @$rs->permission_roles->where('permissions_id','20')->first()->id != "" ? 'checked' : '' }} />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="21" {{ @$rs->permission_roles->where('permissions_id','21')->first()->id != "" ? 'checked' : '' }} />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="22" {{ @$rs->permission_roles->where('permissions_id','22')->first()->id != "" ? 'checked' : '' }} />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="23" {{ @$rs->permission_roles->where('permissions_id','23')->first()->id != "" ? 'checked' : '' }} />
    ลบ</label></td>
</tr>
<tr>
  <th>ผู้ใช้งาน</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="24" {{ @$rs->permission_roles->where('permissions_id','24')->first()->id != "" ? 'checked' : '' }} />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="25" {{ @$rs->permission_roles->where('permissions_id','25')->first()->id != "" ? 'checked' : '' }} />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="26" {{ @$rs->permission_roles->where('permissions_id','26')->first()->id != "" ? 'checked' : '' }} />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="27" {{ @$rs->permission_roles->where('permissions_id','27')->first()->id != "" ? 'checked' : '' }} />
    ลบ</label></td>
</tr>
<tr>
  <th>สิทธิ์ผู้ใช้งาน</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="28" {{ @$rs->permission_roles->where('permissions_id','28')->first()->id != "" ? 'checked' : '' }} />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="29" {{ @$rs->permission_roles->where('permissions_id','29')->first()->id != "" ? 'checked' : '' }} />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="30" {{ @$rs->permission_roles->where('permissions_id','30')->first()->id != "" ? 'checked' : '' }} />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="31" {{ @$rs->permission_roles->where('permissions_id','31')->first()->id != "" ? 'checked' : '' }} />
    ลบ</label></td>
  </tr>
<tr>
  <th>ตั้งค่าข้อมูลหลัก</th>
  <td><label class="chkbox">
    <input type="checkbox" name="permissions_id[]" value="32" {{ @$rs->permission_roles->where('permissions_id','32')->first()->id != "" ? 'checked' : '' }} />
    ดู</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="33" {{ @$rs->permission_roles->where('permissions_id','33')->first()->id != "" ? 'checked' : '' }} />
      เพิ่ม</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="34" {{ @$rs->permission_roles->where('permissions_id','34')->first()->id != "" ? 'checked' : '' }} />
      แก้ไข</label>
    <label class="chkbox">
      <input type="checkbox" name="permissions_id[]" value="35" {{ @$rs->permission_roles->where('permissions_id','35')->first()->id != "" ? 'checked' : '' }} />
    ลบ</label></td>
  </tr>
<tr>
  <th>รายงาน</th>
  <td><input type="checkbox" name="permissions_id[]" value="36" {{ @$rs->permission_roles->where('permissions_id','36')->first()->id != "" ? 'checked' : '' }} />
    ดู</td>
</tr>
</table>
<div id="btnBoxAdd">
  <input name="input" type="submit" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>
</form>


@endsection
