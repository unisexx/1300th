@extends('layout/default')

@section('content')


<h3>ผู้ใช้งาน</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
    <input name="search" value="{{ @$_GET['search'] }}" type="text" class="form-control" style="width:350px;" placeholder="ชื่อ - สกุล">

    {!! Form::select('positions_id', dropdownOption('positions', 'id', 'name', '','name asc'), @$_GET['positions_id'], array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'ทุกตำแหน่ง')) !!}

    <select name="departments_id" id="first-disabled" class="selectpicker" data-hide-disabled="true" data-live-search="true"  title="หน่วยงาน">
      @foreach($departments as $department)
      <optgroup label="{{ $department->name }}">
        @if(count( $department->children ) > 0 )
        @foreach($department->children as $bureau)
        <option value="{{ $bureau->id }}" {{ @$_GET['departments_id'] == $bureau->id ? 'selected' : '' }}>{{ $bureau->name }}</option>
        @endforeach
        @endif
      </optgroup>
      @endforeach
    </select>

    {!! Form::select('permission_groups_id', dropdownOption('permission_groups', 'id', 'name', '','name asc'), @$_GET['permission_groups_id'], array('class'=>'selectpicker', 'data-live-search'=>'true','title'=>'ทุกสิทธิ์การใช้งาน')) !!}

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
  <td>{{ @$row->departments->name }}</td>
  <td>{{ @$row->permission_groups->name }}</td>
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
