@extends('layout/default')

@section('content')


<h3>เชื้อชาติ</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
 <input name="search" value="{{ @$_GET['search'] }}" type="text" class="form-control" placeholder="ชื่อเชื้อชาติ" style="width:350px;">
 <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>
</div>
</div>
<div id="btnBox">
  <input type="button" title="เพิ่มเชื้อชาติ" value="เพิ่มเชื้อชาติ" onclick="document.location='setting/race/form'" class="btn btn-success vtip" />
</div>

{{ $rs->appends(@$_GET)->render() }}

<table class="tblist">
<tr>
  <th>ลำดับ</th>
  <th>ชื่อเชื้อชาติ</th>
  <th>เปิดใช้งาน</th>
  <th>จัดการ</th>
  </tr>
@foreach($rs as $row)
<tr>
  <td>{{ ++$no }}</td>
  <td>{{ $row->name }}</td>
  <td>
    @if ($row->status == 1)
      <img src="images/icon_checkbox.png" width="24" height="24" />
    @endif
  </td>
  <td>
    <a href="setting/race/form/{{ $row->id }}"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a>
    <a href="setting/race/delete/{{ $row->id }}" onclick="return confirm('ต้องการลบรายการนี้')"><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></a>
  </td>
  </tr>
@endforeach
</table>

{{ $rs->appends(@$_GET)->render() }}


@endsection
