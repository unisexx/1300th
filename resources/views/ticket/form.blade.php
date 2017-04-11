@extends('layout/default')

@section('content')


<h3>เรื่องรับแจ้ง (เพิ่ม / แก้ไข)</h3>
<form method="post" action="ticket/save/{{ @$rs->id }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div style="border-bottom:1px dotted #999; background:#FAFFF2; padding:10px; margin-bottom:10px; ">
<div class="form-inline">
  <div class="form-group">
    <label style="width:auto;"><span class="Txt_red_12"> *</span> เลขที่รับแจ้ง</label>
    <input type="text" class="form-control" readonly="readonly" placeholder="Auto" style="width:120px;" name="subj_ticket_number" value="1234">
  </div>

  <div class="form-group">
    <label style="width:auto;">ref.ticket</label>
    <a href="#"><span style="font-weight:700; display:inline-block; margin-top:3px;">17-01-00030</span></a>
    <input class="form-control" type="text" name="subj_ticket_ref_id" placeholder="subj_ticket_ref_id" value="{{ @$rs->subj_ticket_ref_id ? $rs->subj_ticket_ref_id : @$_GET['ref'] }}">
  </div>

  <div class="form-group">
    <label><span class="Txt_red_12"> *</span> วันที่รับแจ้งเหตุ</label>
    <input name="subj_notify_date" type="text" class="form-control fdate" value="{{ @$rs->subj_notify_date ? DBToDate($rs->subj_notify_date) : date("d/m").(date("Y")+543) }}" style="width:100px;" data-provide="datepicker" data-date-language="th-th">
    <img src="images/calendar.png" width="24" height="24" /> </div>

<? echo (date('H')+6).date(':i');?>
  <div class="form-group">
    <label><span class="Txt_red_12"> *</span> เวลาที่รับแจ้งเหตุ</label>
    <input name="subj_notify_time" type="text" class="form-control"  value="{{ @$rs->subj_notify_date ? DBToTime($rs->subj_notify_date) : (date('H')+6).date(':i') }}" style="width:70px;">  <label style="width:20px;">น.</label>
  </div>

  <div class="form-group">
    <label>สถานะเรื่อง</label>
    {!! Form::select('ticket_statuses_id', dropdownOption('ticket_statuses', 'id', 'name', '', 'id asc'), @$rs->ticket_statuses_id, array('class'=>'form-control')) !!}
  </div>
</div>

</div>


<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#p1" aria-controls="p1" role="tab" data-toggle="tab">รับเรื่อง</a></li>
    <li role="presentation"><a href="#p2" aria-controls="p2" role="tab" data-toggle="tab">แผนและการช่วยเหลือ</a></li>
    <li role="presentation"><a href="#p3" aria-controls="p3" role="tab" data-toggle="tab">ผลการช่วยเหลือ</a></li>
    <li role="presentation"><a href="#p4" aria-controls="p4" role="tab" data-toggle="tab">สรุปยุติปัญหา</a></li>
    <li role="presentation"><a href="#p5" aria-controls="p5" role="tab" data-toggle="tab">เอกสารแนบ</a></li>
  </ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="p1">
    <div style="margin-left:10px;">
		<fieldset>
        <legend>รายละเอียดผู้แจ้ง</legend>

        <div class="form-group form-inline col-md-12">
        <label>เจ้าหน้าที่รับเรื่อง</label>
        <input name="notify_users_id" type="text" class="form-control"  placeholder="" readonly="readonly" value="1">
      	</div>

        <div class="form-group form-inline col-md-6">
    	<label>ช่องทางรับเรื่อง</label>
      {!! Form::select('notify_channels_id', dropdownOption('channels', 'id', 'name', '', 'name asc'), @$rs->notify_channels_id, array('class'=>'form-control','placeholder'=>'--')) !!}

		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> ประเภทสาย</label>
      {!! Form::select('notify_cable_types_id', dropdownOption('cable_types', 'id', 'name', '', 'name asc'), @$rs->notify_cable_types_id, array('class'=>'form-control','placeholder'=>'--')) !!}
  		</div>

        <div class="boxNotWrongCall">
        <div class="form-group form-inline col-md-6">
    	<label>หมวดหมู่ของผู้แจ้ง</label>
      {!! Form::select('notify_category_infos_id', dropdownOption('category_infos', 'id', 'name', '', 'name asc'), @$rs->notify_category_infos_id, array('class'=>'form-control','placeholder'=>'--')) !!}
  		</div>

 		<div class="form-group form-inline col-md-6 boxDeptInfo">
    	<label>หน่วยงานที่แจ้ง</label>
      {!! Form::select('notify_dept_infos_id', dropdownOption('dept_infos', 'id', 'name', '', 'name asc'), @$rs->notify_dept_infos_id, array('class'=>'form-control','placeholder'=>'--')) !!}
  		</div>

        <div class="form-group form-inline col-md-12" style="margin-bottom:0px;">
    	<label></label>
   	 	<label>
     	 <input name="notify_anonymous" type="checkbox" value="1" {{ @$rs->notify_anonymous == 1 ? 'checked' : '' }}> ไม่ประสงค์ออกนาม
    	</label>
  		</div>

        <div class="form-group form-inline col-md-12">
    	<label><span class="Txt_red_12"> *</span> ชื่อผู้แจ้ง</label>
        {!! Form::select('notify_prefixs_id', dropdownOption('prefixs', 'id', 'name_th', '', 'name_th asc'), @$rs->notify_prefixs_id, array('class'=>'form-control','placeholder'=>'--')) !!}
   	 	<input name="notify_name" value="{{ @$rs->notify_name }}" type="text" class="form-control"  placeholder="ชื่อตัว" style="width:120px;">
        <input name="notify_lastname" value="{{ @$rs->notify_lastname }}" type="text" class="form-control"  placeholder="ชื่อสกุล" style="width:200px;">
        <input name="notify_secondname" value="{{ @$rs->notify_secondname }}" type="text" class="form-control"  placeholder="ชื่อรอง" style="width:120px;">
         <input name="notify_id_card" value="{{ @$rs-> notify_id_card }}" type="text" class="form-control" data-inputmask="'mask': '9-9999-99999-99-9'" placeholder="เลขบัตรประชาชน" style="width:150px;"  />

  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> ประเทศ</label>
      {!! Form::select('notify_countries_id', dropdownOption('countries', 'id', 'name', '', 'name asc'), @$rs->notify_countries_id, array('class'=>'form-control countries','placeholder'=>'--')) !!}
  		</div>

      <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> จังหวัด/รัฐ</label>
      <span class="spanProvince">
        <select name="notify_provinces_id" class="form-control" disabled="disabled">
            <option>--</option>
        </select>
      </span>
  		</div>

		<div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> เบอร์โทรศัพท์</label>
   	 	<input name="notify_tel" value="{{ @$rs->notify_tel }}" type="text" class="form-control"  placeholder="">
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label>ช่องทางที่รู้จัก1300</label>
      {!! Form::select('notify_channel_knows_id', dropdownOption('channel_knows', 'id', 'name', '', 'name asc'), @$rs->notify_channel_knows_id, array('class'=>'form-control','placeholder'=>'--')) !!}
  		</div>
        </div> <!--boxWrongCall-->
        </fieldset>


        <fieldset class="boxNotWrongCall">
        <legend>รายละเอียดเหตุการณ์</legend>

         <div class="form-group form-inline col-md-6">
    	 <label><span class="Txt_red_12"> *</span> วันที่เกิดเหตุ</label>
            <input name="event_date" value="{{ @DBToDate($rs->event_date) }}" type="text" class="form-control fdate"  style="width:100px;" data-provide="datepicker" data-date-language="th-th">
            <img src="images/calendar.png" width="24" height="24" />
         </div>

         <div class="form-group form-inline col-md-6">
         <label>เวลาเกิดเหตุ</label>
	    <input name="event_time" value="{{ @DBToTime($rs->event_date) }}" type="text" class="form-control ftime"  style="width:70px;"> <label style="width:20px;">น.</label>
   		</div>

        <div class="form-group form-inline col-md-6">
        <label><span class="Txt_red_12"> *</span> หัวข้อเหตุการณ์</label>
        <textarea name="event_title" class="form-control"  placeholder="" style="width:70%; height:80px;">{{ @$rs->event_title }}</textarea>
      	</div>

        <div class="form-group form-inline col-md-6">
        <label>สถานที่เกิดเหตุ</label>
        <textarea name="event_location" class="form-control"  placeholder="" style="width:70%; height:80px;">{{ @$rs->event_location }}</textarea>
      	</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> ประเทศ</label>
      {!! Form::select('event_countries_id', dropdownOption('countries', 'id', 'name', '', 'name asc'), @$rs->event_countries_id, array('class'=>'form-control countries','placeholder'=>'--')) !!}
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> จังหวัด/รัฐ</label>
      <span class="spanProvince">
        <select name="event_provinces_id" class="form-control" disabled="disabled">
            <option>--</option>
        </select>
      </span>
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> อำเภอ</label>
      <span class="spanAmphoe">
        <select name="event_amphoes_id" class="form-control" disabled="disabled">
            <option>--</option>
        </select>
      </span>
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> ตำบล</label>
      <span class="spanTumbon">
        <select name="event_tumbons_id" class="form-control" disabled="disabled">
            <option>--</option>
        </select>
      </span>
  		</div>

        <div class="form-group form-inline col-md-12">
        <label><span class="Txt_red_12"> *</span> ข้อมูลสภาพปัญหา (สรุป)</label>
        <textarea name="event_summary" class="form-control"  placeholder="" style="width:80%; height:150px;">{{ @$rs->event_summary }}</textarea>
      	</div>
        </fieldset>

        <fieldset class="boxNotWrongCall">
        <legend>การประเมินความเสี่ยง (จากการพูดคุยทางโทรศัพท์)</legend>
        @foreach($risks as $risk)
        <div class="form-group form-inline col-md-3" style="height:30px;">
       	 <label style="width:100%; text-align:left;"><input type="checkbox" name="risks_id[]" value="{{ @$risk->id }}" {{ in_array($risk->id, explode(',',@$rs->risks_id)) ? 'checked' : '' }}> {{ $risk->name }} </label>
    		</div>
        @endforeach



      	<div class="form-group form-inline col-md-12">
        <label>รายละเอียดเพิ่มเติม</label>
        <textarea name="risks_detail" class="form-control"  placeholder="" style="width:80%; height:100px;">{{ @$rs->risks_detail }}</textarea>
      	</div>
        </fieldset>


        <fieldset class="boxNotWrongCall">
        <legend>ผู้ขอรับการช่วยเหลือ</legend>
        <div style="float:right; margin-bottom:5px;">
          <a class='receiveFormBtn' href="ticket/ajaxloadreceiveform"><input type="button" value="เพิ่มข้อมูลผู้ขอรับการช่วยเหลือ" class="btn btn-success" /></a>
        </div>

        <!-- ajax-load-receive -->
        <span id="receive"></span>

        </fieldset>




        <fieldset class="boxNotWrongCall">
        <legend>ผู้กระทำความผิด</legend>
        <div style="float:right; margin-bottom:5px;">
          <a class="offenderFormBtn" href="ticket/ajaxloadoffenderform"><input type="button" value="เพิ่มข้อมูลผู้กระทำความผิด" class="btn btn-success" /></a>
        </div>

        <!-- ajax-load-offender -->
        <span id="offender"></span>

        </fieldset>


        <div id="btnBoxAdd">
          <input name="input" type="submit" title="บันทึกข้อมูลรับเรื่อง" value="บันทึกข้อมูลรับเรื่อง" class="btn btn-primary"/>
          <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
        </div>
    </div>

	</div>
  <!-- END Tab 1 : รับเรื่อง -->







  <div role="tabpanel" class="tab-pane" id="p2">
    	<div style="float:right; margin-bottom:5px;"><a class="planFormBtn" href="ticket/ajaxloadplanform"><input type="button" value="เพิ่มแผนและการช่วยเหลือ" class="btn btn-success" /></a></div>
      <!-- ajax-load-plan -->
      <span id="plan"></span>
  </div>
  <!-- END Tab 2 : แผนและการช่วยเหลือ -->







  <div role="tabpanel" class="tab-pane" id="p3">
  <div style="float:right; margin-bottom:5px;"><a class='resultFormBtn' href="ticket/ajaxloadresultform"><input type="button" value="เพิ่มผลการช่วยเหลือ" class="btn btn-success" /></a></div>

    <span id="result"></span>

  </div>
  <!-- END Tab 3 : ผลการช่วยเหลือ -->











  <div role="tabpanel" class="tab-pane" id="p4" style="margin-top:20px;">
 		<div class="form-group form-inline col-md-6">
        <label><span class="Txt_red_12"> *</span> ชื่อเจ้าหน้าที่ </label>
        <input name="conclude_users_id" value="1" type="text" class="form-control"  placeholder="" readonly="readonly" style="width:300px;">
      	</div>

        <div class="form-group form-inline col-md-6">
        <label><span class="Txt_red_12"> *</span> ตำแหน่ง</label>
        <input name="conclude_positions_id" value="1" type="text" class="form-control"  placeholder="" readonly="readonly" style="width:400px;">
      	</div>

		<div class="form-group form-inline col-md-6">
    	 <label><span class="Txt_red_12"> *</span> แจ้งปัญหายุติวันที่ </label>
            <input name="conclude_notify_date" value="{{ @$rs->conclude_notify_date }}" type="text" class="form-control fdate"  style="width:100px;" data-provide="datepicker" data-date-language="th-th">
            <img src="images/calendar.png" width="24" height="24" />
         </div>

         <div class="form-group form-inline col-md-6">
    	 	<label><span class="Txt_red_12"> *</span> วันที่ดำเนินการ</label>
            <input name="conclude_date" value="{{ @$rs->conclude_date }}" type="text" class="form-control fdate"  style="width:100px;" data-provide="datepicker" data-date-language="th-th">
            <img src="images/calendar.png" width="24" height="24" />

            <label>เวลา</label>
            <input name="conclude_time" value="{{ @$rs->conclude_time }}" type="text" class="form-control ftime"  style="width:70px;">  <label style="width:20px;">น.</label>

         </div>

		<div class="form-group form-inline col-md-12">
        <label><span class="Txt_red_12"> *</span> รายละเอียด</label>
        <textarea name="conclude_detail" class="form-control"  placeholder="" style="width:80%; height:150px;">{{ @$rs->conclude_detail }}</textarea>
      	</div>

        <div id="btnBoxAdd">
      <input name="input" type="submit" title="บันทึกสรุปยุติปัญหา" value="บันทึกสรุปยุติปัญหา" class="btn btn-primary"/>
    </div>
  </div>
  <!-- END Tab 4 : สรุปยุติปัญหา -->












  <div role="tabpanel" class="tab-pane" id="p5">
   <div style="float:right; margin-bottom:5px;"><a class='attachFormBtn' href="ticket/ajaxloadattachform"><input type="button" value="เพิ่มเอกสาร" class="btn btn-success" /></a></div>

      <span id="attach"></span>

  </div>
  <!-- END Tab 5 : เอกสารแนบ -->

</div>
</form>



<script type="text/javascript">
$(document).ready(function(){
  // load index
  ajaxloadreceive();
  ajaxloadoffender();
  ajaxloadplan();
  ajaxloadresult();
  ajaxloadattach();

  // load form
  $(".receiveFormBtn").colorbox({maxWidth:'95%'});
  $(".offenderFormBtn").colorbox({maxWidth:'95%'});
  $(".planFormBtn").colorbox({maxWidth:'95%'});
  $(".resultFormBtn").colorbox({maxWidth:'95%'});
  $(".attachFormBtn").colorbox({maxWidth:'95%'});

  // submit form to reload index
  $(document).on('click', ".submitReceiveBtn", function() {
    $.colorbox.close()
		ajaxloadreceive();
	});
  $(document).on('click', ".submitOffenderBtn", function() {
    $.colorbox.close()
		ajaxloadoffender();
	});
  $(document).on('click', ".submitPlanBtn", function() {
    $.colorbox.close()
		ajaxloadplan();
	});
  $(document).on('click', ".submitResultBtn", function() {
    $.colorbox.close()
		ajaxloadresult();
	});
  $(document).on('click', ".submitAttachBtn", function() {
    $.colorbox.close()
		ajaxloadattach();
	});

  // select ประเทศ หา จังหวัด
	$(document).on('change', "select.countries", function() {
    var prefix = $(this).attr("name").split(/_(.+)/)[0]+'_';
		var countries_id = $(this).val();
		var provinceElement = $(this).closest('.form-inline').next().find(".spanProvince");
    AjaxSelectProvince(prefix,countries_id,provinceElement);
	});

  // select จังหวัด หา อำเภอ
	$(document).on('change', "select.provinces", function() {
    var prefix = $(this).attr("name").split(/_(.+)/)[0]+'_';
		var provinces_id = $(this).val();
		var amphoeElement = $(this).closest('.form-inline').next().find(".spanAmphoe");
    AjaxSelectAmphoe(prefix,provinces_id,amphoeElement);
	});

  // select อำเภอ หา ตำบล
	$(document).on('change', "select.amphoes", function() {
    var prefix = $(this).attr("name").split(/_(.+)/)[0]+'_';
		var amphoes_id = $(this).val();
		var tumbonElement = $(this).closest('.form-inline').next().find(".spanTumbon");
    AjaxSelectTumbon(prefix,amphoes_id,tumbonElement);
	});

  // ฟอร์มแก้ไข รายละเอียดผู้แจ้ง : โหลดจังหวัด
  var prefix = 'notify_';
  var countries_id = '{{ @$rs->notify_countries_id }}';
  var provinceElement = $('select[name=notify_countries_id]').closest('.form-inline').next().find(".spanProvince");
  var province_id_selected = '{{ @$rs->notify_provinces_id }}';
  if(countries_id){
    AjaxSelectProvince(prefix,countries_id,provinceElement,province_id_selected);
  }

  // ฟอร์มแก้ไข รายละเอียดเหตุการณ์ : โหลดจังหวัด
  var prefix = 'event_';
  var countries_id = '{{ @$rs->event_countries_id }}';
  var provinceElement = $('select[name=event_countries_id]').closest('.form-inline').next().find(".spanProvince");
  var province_id_selected = '{{ @$rs->event_provinces_id }}';
  if(countries_id){
    AjaxSelectProvince(prefix,countries_id,provinceElement,province_id_selected);
  }

  // ฟอร์มแก้ไข รายละเอียดเหตุการณ์ : โหลดอำเภอ
  var prefix = 'event_';
  var provinces_id = '{{ @$rs->event_provinces_id }}';
  var amphoeElement = $('select[name=event_provinces_id]').closest('.form-inline').next().find(".spanAmphoe");
  var amphoe_id_selected = '{{ @$rs->event_amphoes_id }}';
  if(provinces_id){
    AjaxSelectAmphoe(prefix,provinces_id,amphoeElement,amphoe_id_selected);
  }

  // ฟอร์มแก้ไข รายละเอียดเหตุการณ์ : โหลดตำบล
  var prefix = 'event_';
  var amphoes_id = '{{ @$rs->event_amphoes_id }}';
  var tumbonElement = $('select[name=event_amphoes_id]').closest('.form-inline').next().find(".spanTumbon");
  var tumbon_id_selected = '{{ @$rs->event_tumbons_id }}';
  if(amphoes_id){
    AjaxSelectTumbon(prefix,amphoes_id,tumbonElement,tumbon_id_selected);
  }

});

/*############################## Function ##############################*/
//ผู้ขอรับการช่วยเหลือ
  // index
  function ajaxloadreceive(){
    $.get('ticket/ajaxloadreceive',{

    },function(data){
      $('#receive').html(data);
    });
  }

//ผู้กระทำความผิด
  // index
  function ajaxloadoffender(){
    $.get('ticket/ajaxloadoffender',{

    },function(data){
      $('#offender').html(data);
    });
  }

//แผนและการช่วยเหลือ
  // index
  function ajaxloadplan(){
    $.get('ticket/ajaxloadplan',{

    },function(data){
      $('#plan').html(data);
    });
  }

//ผลการช่วยเหลือ
  // index
  function ajaxloadresult(){
    $.get('ticket/ajaxloadresult',{

    },function(data){
      $('#result').html(data);
    });
  }

//เอกสารแนบ
  // index
  function ajaxloadattach(){
    $.get('ticket/ajaxloadattach',{

    },function(data){
      $('#attach').html(data);
    });
  }

// เลือกประเทศ แสดงจังหวัด
function AjaxSelectProvince($prefix,$countries_id,$province_element,$province_id_selected=false){
  if($countries_id == ""){
    $province_element.find('select').val('').attr("disabled", true);
    $province_element.find('select').selectpicker('refresh');
  }else{
    $.get('ajax/selectprovince',{
      'countries_id' : $countries_id,
      'provinces_id' :  $province_id_selected,
      'prefix' : $prefix
    },function(data){
      $province_element.html(data);
      // ถ้า select ข้อมูลที่ดึงมาใช้ data-live-search=true ต้องทำการ refresh ด้วย
      $province_element.find('select').selectpicker('refresh');
    });
  }
}

// เลือกจังหวัด แสดงอำเภอ
function AjaxSelectAmphoe($prefix,$provinces_id,$amphoe_element,$amphoes_id_selected=false){
  if($provinces_id == ""){
    $amphoe_element.find('select').val('').attr("disabled", true);
    $amphoe_element.find('select').selectpicker('refresh');
  }else{
    $.get('ajax/selectamphoe',{
      'provinces_id' : $provinces_id,
      'amphoes_id' :  $amphoes_id_selected,
      'prefix' : $prefix
    },function(data){
      $amphoe_element.html(data);
      // ถ้า select ข้อมูลที่ดึงมาใช้ data-live-search=true ต้องทำการ refresh ด้วย
      $amphoe_element.find('select').selectpicker('refresh');
    });
  }
}

// เลือกอำเภอ แสดงตำบล
function AjaxSelectTumbon($prefix,$amphoes_id,$tumbon_element,$tumbons_id_selected=false){
  if($amphoes_id == ""){
    $tumbon_element.find('select').val('').attr("disabled", true);
    $tumbon_element.find('select').selectpicker('refresh');
  }else{
    $.get('ajax/selecttumbon',{
      'amphoes_id' : $amphoes_id,
      'tumbons_id' :  $tumbons_id_selected,
      'prefix' : $prefix
    },function(data){
      $tumbon_element.html(data);
      // ถ้า select ข้อมูลที่ดึงมาใช้ data-live-search=true ต้องทำการ refresh ด้วย
      $tumbon_element.find('select').selectpicker('refresh');
    });
  }
}
</script>


@endsection
