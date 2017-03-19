@extends('layout/default')

@section('content')

<h3>อำเภอ</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline" method="get">
 <input type="text" name="search" value="{{ @$_GET['search'] }}" class="form-control" placeholder="ชื่ออำเภอ" style="width:350px;">
 {!! Form::select('provinces_id', dropdownOption('provinces', 'id', 'name', '', 'name asc'), @$_GET['provinces_id'], array('class'=>'selectpicker', 'title','ทุกจังหวัด', 'data-live-search'=>'true', 'placeholder'=>'- ทุกจังหวัด -')) !!}
 <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>
</div>
</div>

<div id="btnBox">
  <input type="button" title="เพิ่มอำเภอ" value="เพิ่มอำเภอ" onclick="document.location='setting/amphoe/form'" class="btn btn-warning vtip" />
</div>

{{ $rs->appends(@$_GET)->render() }}

<table class="tblist">
<tr>
  <th align="left">ลำดับ</th>
  <th align="left">รหัส</th>
  <th align="left">ชื่ออำเภอ</th>
  <th align="left"><p>จังหวัด</p></th>
  <th align="left">เปิดใช้งาน</th>
  <th align="left">จัดการ</th>
  </tr>
@foreach($rs as $row)
<tr>
  <td>{{ ++$no }}</td>
  <td>{{ $row->code }}</td>
  <td>{{ $row->name }}</td>
  <td>{{ $row->provinces->name }}</td>
  <td>
    @if ($row->status == 1)
      <img src="images/icon_checkbox.png" width="24" height="24" />
    @endif
  </td>
  <td>
    <a href="setting/amphoe/form/{{ $row->id }}"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a>
    <a href="setting/amphoe/delete/{{ $row->id }}" onclick="return confirm('ต้องการลบรายการนี้')"><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></a>
  </td>
</tr>
@endforeach
</table>

{{ $rs->appends(@$_GET)->render() }}

@endsection
