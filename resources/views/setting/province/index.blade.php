@extends('layout/default')

@section('content')



<h3>จังหวัด/รัฐ</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline" method="get">
 <input name="search" value="{{ @$_GET['search'] }}" type="text" class="form-control " placeholder="ชื่อจังหวัด/รัฐ" style="width:350px;">
 <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>
</div>
</div>

<div id="btnBox">
  <input type="button" title="เพิ่มจังหวัด/รัฐ" value="เพิ่มจังหวัด/รัฐ" onclick="document.location='setting/province/form'" class="btn btn-success vtip" />
</div>

{{ $rs->appends(@$_GET)->render() }}

<table class="tblist">
<tr>
  <th align="left">ลำดับ</th>
  <th align="left">รหัส</th>
  <th align="left">ชื่อจังหวัด</th>
  <th align="left">ประเทศ</th>
  <th align="left">เปิดใช้งาน</th>
  <th align="left">จัดการ</th>
  </tr>
@foreach($rs as $row)
<tr>
  <td>{{ autoNumber($rs) }}</td>
  <td>{{ $row->code }}</td>
  <td>{{ $row->name }}</td>
  <td>{{ $row->countries->name }}</td>
  <td>
    @if ($row->status == 1)
      <img src="images/icon_checkbox.png" width="24" height="24" />
    @endif
  </td>
  <td>
    <a href="setting/province/form/{{ $row->id }}"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a>
    <a href="setting/province/delete/{{ $row->id }}" onclick="return confirm('ต้องการลบรายการนี้')"><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></a>
  </td>
</tr>
@endforeach
</table>

{{ $rs->appends(@$_GET)->render() }}



@endsection
