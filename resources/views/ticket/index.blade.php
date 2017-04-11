@extends('layout/default')

@section('content')

<h3>เรื่องรับแจ้ง</h3>
<div id="search">
<div id="searchBox">
<div class="form-inline">
   <input type="text" class="form-control fid" style="width:120px;" id="exampleInputName2" placeholder="รหัสเรื่อง"> <input type="text" class="form-control" style="width:370px;" id="exampleInputName2" placeholder="ชื่อผู้แจ้ง / ชื่อผู้รับแจ้ง / ชื่อผู้ขอรับการช่วยเหลือ / รายละเอียด ">
    <select name="select4" class="form-control" style="width:auto;">
      <option>+ สถานะ +</option>
      <option>รอแจ้งผู้รับผิดชอบ</option>
      <option>พิจารณาการช่วยเหลือ</option>
      <option>รายงานการช่วยเหลือ</option>
      <option>ส่งต่อพื้นที่</option>
      <option>ช่วยเหลือเรียบร้อย</option>
      <option>ปัญหายุติแล้ว</option>
    </select>

  <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
  <button class="btn btn-default" data-toggle="collapse" data-target="#boxAdvanceSearch"><img src="images/advancesearch.png" width="22" height="22" /> ค้นหาขั้นสูง</button>

  <div id="boxAdvanceSearch" class="collapse" style="margin-top:5px;"><!--<div class="collapse" id="boxAdvanceSearch">-->
  <fieldset style="border:1px solid #E5E5E5; padding:10px; margin-bottom:10px;">
  <legend style="margin:0; padding:0; font-size:14px;">กลุ่มเป้าหมายและปัญหา</legend>
        <select class="form-control">
          <option>+ กลุ่มเป้าหมาย +</option>
          <option>เด็ก</option>
          <option>เยาวชน</option>
          <option>ผู้ใหญ่</option>
          <option>ผู้สูงอายุ</option>
        </select>

        <select class="form-control">
          <option>+ ปัญหาหลัก +</option>
        </select>

        <select class="form-control">
          <option>+ ปัญหาย่อย 1 +</option>
        </select>

        <select class="form-control">
          <option>+ ปัญหาย่อย 2 +</option>
        </select>

        <select class="form-control">
          <option>+ ปัญหาย่อย 3 +</option>
        </select>
    </fieldset>

<fieldset style="border:1px solid #E5E5E5; padding:10px; margin-bottom:10px;">
  <legend style="margin:0; padding:0; font-size:14px;">สถานที่เกิดเหตุ</legend>
<input type="text" class="form-control" style="width:280px;" id="exampleInputName2" placeholder="สถานที่เกิดเหตุ">
  <select class="form-control">
   <option>+ ประเทศที่เกิดเหตุ +</option>
  </select>
  <select class="form-control">
   <option>+ จังหวัดที่เกิดเหตุ +</option>
  </select>
  <select class="form-control">
   <option>+ อำเภอที่เกิดเหตุ +</option>
  </select>
  <select class="form-control">
   <option>+ ตำบลที่เกิดเหตุ +</option>
  </select>
</fieldset>

<fieldset style="border:1px solid #E5E5E5; padding:10px; margin-bottom:10px;">
  <legend style="margin:0; padding:0; font-size:14px;">อื่นๆ</legend>
  <select class="form-control">
   <option>+ สถานะส่งต่อ +</option>
  </select>
  <select class="form-control">
   <option>+ ความเร่งด่วน +</option>
  </select>
  <select class="form-control">
   <option>+ ประเภทสาย +</option>
  </select>
  <select class="form-control">
   <option>+ ช่องทางรับเรื่อง +</option>
  </select>

  <div style="margin-top:10px;">
  <select class="form-control">
   <option>+ หน่วยงานส่งต่อ +</option>
  </select>
  <input type="text" class="form-control" style="width:280px;" id="exampleInputName2" placeholder="ชื่ือเจ้าหน้าที่รับเรื่องส่งต่อ">
  <input type="text" class="form-control" style="width:280px;" id="exampleInputName2" placeholder="ชื่อนักสังคมสงเคราะห์">
  </div>
</fieldset>

<fieldset style="border:1px solid #E5E5E5; padding:10px;">
  <legend style="margin:0; padding:0; font-size:14px;">วันเวลารับแจ้งเหตุ</legend>

    วันที่รับแจ้งเหตุ
    <input type="text" class="form-control fdate" id="exampleInputEmail2" value="" style="width:100px;">
    <img src="images/calendar.png" width="24" height="24" />

 เวลา
    <input type="text" class="form-control" id="exampleInputEmail2" value="" style="width:70px;"> น. <span style="margin:0 20px;">ถึง</span>

    <input type="text" class="form-control fdate" id="exampleInputEmail2" value="" style="width:100px;">
    <img src="images/calendar.png" width="24" height="24" />

 เวลา
    <input type="text" class="form-control" id="exampleInputEmail2" value="" style="width:70px;"> น.

</fieldset>






  </div>

</div>




</div>
</div>

<div id="btnBox">
  <input type="button" title="เพิ่มเรื่องร้องเรียน" value="เพิ่มเรื่องร้องเรียน" onclick="document.location='ticket/form'" class="btn btn-success vtip" />
</div>

<div id="status">
<span><img src="images/clock1.png" width="25" height="25" /> รอแจ้งผู้รับผิดชอบ</span>
<span><img src="images/clock2.png" width="25" height="25" /> พิจารณาการช่วยเหลือ</span>
<span><img src="images/clock3.png" width="25" height="25" /> ส่งต่อพื้นที่</span>
<span><img src="images/clock4.png" width="25" height="25" /> รายงานการช่วยเหลือ</span>
<span><img src="images/clock5.png" width="25" height="25" /> ช่วยเหลือเรียบร้อย</span>
<span><img src="images/clock6.png" width="25" height="25" /> ปัญหายุติแล้ว</span>
</div>

{{ $rs->appends(@$_GET)->render() }}

<table class="tblist">
<tr>
  <th>ลำดับ</th>
  <th>รหัสเรื่อง</th>
  <th>วันเวลารับแจ้ง</th>
  <th>ความเร่งด่วน</th>
  <th>หมวดปัญหา</th>
  <th style="width:25%">รายละเอียด</th>
  <th>สถานะ</th>
  <th>ผู้แจ้ง</th>
  <th>ผู้รับแจ้ง</th>
  <th>ประเภทสาย</th>
  <th>จัดการ</th>
</tr>
@foreach($rs as $row)
<tr>
  <td>{{ autoNumber($rs) }}</td>
  <td>{{ $row->subj_ticket_number }}</td>
  <td>{{ DBToDate($row->subj_notify_date,true,true) }}</td>
  <td></td>
  <td></td>
  <td>{{ $row->event_title }}</td>
  <td>
    <img class="vtip" src="images/{{ $row->ticket_statuses->icon }}" width="25" height="25" title="{{ $row->ticket_statuses->name }}">
  </td>
  <td>{{ $row->notify_prefixs_id }} {{ $row->notify_name }} {{ $row->notify_lastname }}</td>
  <td>{{ $row->notify_users_id }}</td>
  <td>{{ @$row->cable_types->name }}</td>
  <td>
    <a href="ticket/form?ref={{ $row->id }}"><img src="images/add_tag.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="เพิ่มรายการโดยอ้างอิงรายการนี้" /></a>
    <a href="ticket/form/{{ $row->id }}"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a>
    <a href="ticket/delete/{{ $row->id }}" onclick="return confirm('ต้องการลบรายการนี้')"><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></a>
  </td>
</tr>
@endforeach
</table>

{{ $rs->appends(@$_GET)->render() }}

@endsection
