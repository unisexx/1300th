@extends('layout/default')

@section('content')


<h3>สัญชาติ</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline" method="get">
 <input name="search" value="{{ @$_GET['search'] }}" type="text" class="form-control" placeholder="ชื่อสัญชาติ" style="width:350px;">
 <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>
</div>
</div>
<div id="btnBox">
  <input type="button" title="เพิ่มสัญชาติ" value="เพิ่มสัญชาติ" onclick="document.location='setting/nationality/form'" class="btn btn-success vtip" />
</div>

{{ $rs->appends(@$_GET)->render() }}

<table class="tblist">
<tr>
  <th>ลำดับ</th>
  <th>รหัส</th>
  <th>ชื่อสัญชาติ</th>
  <th>Nationality</th>
  <th>เปิดใช้งาน</th>
  <th>จัดการ</th>
  </tr>
@foreach($rs as $row)
<tr>
  <td>{{ ++$no }}</td>
  <td>{{ $row->code }}</td>
  <td>{{ $row->name_th }}</td>
  <td>{{ $row->name_en }}</td>
  <td>
    @if ($row->status == 1)
      <img src="images/icon_checkbox.png" width="24" height="24" />
    @endif
  </td>
  <td>
    <a href="setting/nationality/form/{{ $row->id }}"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a>
    <a href="setting/nationality/delete/{{ $row->id }}" onclick="return confirm('ต้องการลบรายการนี้')"><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></a>
  </td>
  </tr>
@endforeach
</table>

{{ $rs->appends(@$_GET)->render() }}


@endsection
