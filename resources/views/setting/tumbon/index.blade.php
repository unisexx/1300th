@extends('layout/default')

@section('content')


<h3>ตำบล</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline" method="get">
 <input name="search" value="{{ @$_GET['search'] }}" type="text" class="form-control" placeholder="ชื่อตำบล" style="width:350px;">
 {!! Form::select('provinces_id', dropdownOption('provinces', 'id', 'name', '', 'name asc'), @$_GET['provinces_id'], array('class'=>'selectpicker','data-live-search'=>'true', 'placeholder'=>'ทุกจังหวัด')) !!}

  <span class="SpanAmphoe">
  {!! Form::select('amphoes_id', dropdownOption('amphoes', 'id', 'name', '', 'name asc'), @$_GET['amphoes_id'], array('class'=>'selectpicker','data-live-search'=>'true', 'placeholder'=>'ทุกอำเภอ')) !!}
  </span>
 <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>
</div>
</div>

<div id="btnBox">
  <input type="button" title="เพิ่มตำบล" value="เพิ่มตำบล" onclick="document.location='setting/tumbon/form'" class="btn btn-warning vtip" />
</div>

{{ $rs->appends(@$_GET)->render() }}

<table class="tblist">
<tr>
  <th>ลำดับ</th>
  <th>รหัส</th>
  <th>ชื่อตำบล</th>
  <th>อำเภอ</th>
  <th>จังหวัด</th>
  <th>เปิดใช้งาน</th>
  <th>จัดการ</th>
  </tr>
@foreach($rs as $row)
<tr>
  <td>{{ autoNumber($rs) }}</td>
  <td>{{ $row->code }}</td>
  <td>{{ $row->name }}</td>
  <td>{{ $row->amphoes->name }}</td>
  <td>{{ $row->provinces->name }}</td>
  <td>
    @if ($row->status == 1)
      <img src="images/icon_checkbox.png" width="24" height="24" />
    @endif
  </td>
  <td>
    <a href="setting/tumbon/form/{{ $row->id }}"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a>
    <a href="setting/tumbon/delete/{{ $row->id }}" onclick="return confirm('ต้องการลบรายการนี้')"><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></a>
  </td>
</tr>
@endforeach
</table>

{{ $rs->appends(@$_GET)->render() }}


<script type="text/javascript">
$(document).ready(function(){
  // ฟอร์มแก้ไข โหลดอำเภอ
  var provinces_id = '{{ @$_GET["provinces_id"] }}';
  var amphoes_id = '{{ @$_GET["amphoes_id"] }}';
  var amphurElement = $('.SpanAmphoe');
  AjaxSelectAmphoe(provinces_id,amphurElement,amphoes_id);

  // select จังหวัด หา อำเภอ
	$(document).on('change', "select[name='provinces_id']", function() {
		var provinces_id = $(this).val();
		var amphurElement = $(this).closest('.form-inline').find(".SpanAmphoe");
    AjaxSelectAmphoe(provinces_id,amphurElement);
	});
});

function AjaxSelectAmphoe($provinces_id,$amphoe_element,$amphoes_id_selected=false){
  if($provinces_id == ""){
    // $amphoe_element.find('select').val('').attr("disabled", true);
    // $amphoe_element.find('select').selectpicker('refresh');
  }else{
    $.get('ajax/selectamphoe',{
      'provinces_id' : $provinces_id,
      'amphoes_id' :  $amphoes_id_selected,
    },function(data){
      $amphoe_element.html(data);
      // ถ้า select ข้อมูลที่ดึงมาใช้ data-live-search=true ต้องทำการ refresh ด้วย
      $amphoe_element.find('select').selectpicker('refresh');
    });
  }
}
</script>


@endsection
