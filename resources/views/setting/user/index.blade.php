@extends('layout/default')

@section('content')


<h3>ผู้ใช้งาน</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
    <input type="text" class="form-control" style="width:350px;" id="exampleInputName2" placeholder="ชื่อ - สกุล">


  <select id="lunch" class="selectpicker" data-live-search="true" title="ตำแหน่ง">
    	<option style="font-weight:700;">- ทุกตำแหน่ง -</option>
        <option>Hotline</option>
        <option>นักสังคมสงเคราะห์</option>
        <option>นักพัฒนาสังคม</option>
        <option>นักสังคมสงเคราะห์ปฏิบัติการ</option>
        <option>นักพัฒนาสังคมปฏิบัติการ</option>
      </select>

      <select id="first-disabled" class="selectpicker" data-hide-disabled="true" data-live-search="true"  title="หน่วยงาน">
      <option style="font-weight:700;">- ทุกหน่วยงาน -</option>
      <option>ศูนย์ช่วยเหลือสังคม</option>
    <optgroup disabled="disabled" label="disabled">
      <option></option>
    </optgroup>
    <optgroup label="สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์">
      <option>สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์จังหวัดนนทบุรี</option>
      <option>สำนักงานพัฒนาสังคมและความมั่นคงของมนุษ์จังหวัดปทุมธานี</option>
    </optgroup>
    <optgroup label="บ้านพักเด็กและครอบครัว">
      <option>บ้านพักเด็กและครอบครัวจังหวัดนนทบุรี</option>
      <option>บ้านพักเด็กและครอบครัวจังหวัดปทุมธานี</option>
    </optgroup>
    <optgroup label="ศูนย์คุ้มครองคนไร้ที่พึ่ง">
      <option>ศูนย์คุ้มครองคนไร้ที่พึ่งจังหวัดนนทบุรี</option>
      <option>ศูนย์คุ้มครองคนไร้ที่พึ่งจังหวัดปทุมธานี</option>
    </optgroup>

  </select>

  <select name="select4" class="form-control" style="width:auto;" title="สิทธิ์การใช้งาน">
      <option style="font-weight:700;">- ทุกสิทธิ์การใช้งาน -</option>
      <option>SuperAdmin</option>
      <option>Executive</option>
      <option>User</option>
    </select>

      <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>


</div>
</div>
<div id="btnBox">
  <input type="button" title="เพิ่มผู้ใช้งาน" value="เพิ่มผู้ใช้งาน" onclick="document.location='setting/user/form'" class="btn btn-warning vtip" />
</div>

{{ $rs->appends(@$_GET)->render() }}

<table class="tblist">
<tr>
  <th align="left">ลำดับ</th>
  <th align="left">ชื่อ-สกุลผู้ใช้งาน</th>
  <th align="left">ตำแหน่ง</th>
  <th align="left">หน่วยงาน</th>
  <th align="left">สิทธิ์การใช้งาน</th>
  <th align="left">เปิดใช้งาน</th>
  <th align="left">จัดการ</th>
  </tr>
@foreach($rs as $row)
<tr>
  <td>{{ ++$no }}</td>
  <td>{{ $row->name }}</td>
  <td>{{ $row->positions->name }}</td>
  <td>{{ $row->departments->name }}</td>
  <td>{{ $row->permission_groups->name }}</td>
  <td>
    @if ($row->status == 1)
      <img src="images/icon_checkbox.png" width="24" height="24" />
    @endif
  </td>
  <td>
    <a href="setting/user/form/{{ $row->id }}"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a>
    <a href="setting/user/delete/{{ $row->id }}" onclick="return confirm('ต้องการลบรายการนี้')"><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></a>
  </td>
</tr>
@endforeach
</table>

{{ $rs->appends(@$_GET)->render() }}


@endsection
