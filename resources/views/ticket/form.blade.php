@extends('layout/default')

@section('content')


<h3>เรื่องรับแจ้ง (เพิ่ม / แก้ไข)</h3>
<div style="border-bottom:1px dotted #999; background:#FAFFF2; padding:10px; margin-bottom:10px; ">
<div class="form-inline">
  <div class="form-group">
    <label style="width:auto;"><span class="Txt_red_12"> *</span> เลขที่รับแจ้ง</label>
    <input type="text" class="form-control" id="exampleInputName2" readonly="readonly" placeholder="Auto" style="width:120px;">
  </div>

  <div class="form-group">
    <label style="width:auto;">ref.ticket</label>
    <a href="#"><span style="font-weight:700; display:inline-block; margin-top:3px;">17-01-00030</span></a>
  </div>

  <div class="form-group">
    <label><span class="Txt_red_12"> *</span> วันที่รับแจ้งเหตุ</label>
    <input type="text" class="form-control fdate" id="exampleInputEmail2" value="<? echo date("d/m").(date("Y")+543);?>" style="width:100px;">
    <img src="images/calendar.png" width="24" height="24" /> </div>

  <div class="form-group">
    <label><span class="Txt_red_12"> *</span> เวลาที่รับแจ้งเหตุ</label>
    <input type="text" class="form-control" id="exampleInputEmail2" value="<? echo (date('H')+6).date(':i');?>" style="width:70px;">  <label style="width:20px;">น.</label>
  </div>

  <div class="form-group">
    <label>สถานะเรื่อง</label>
    <select class="form-control">
      <option>รอแจ้งผู้รับผิดชอบ</option>
      <option>พิจารณาการช่วยเหลือ</option>
      <option>ส่งต่อพื้นที่</option>
      <option>รายงานการช่วยเหลือ</option>
      <option>ช่วยเหลือเรียบร้อย</option>
      <option>ปัญหายุติแล้ว</option>
	</select>
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
        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="" readonly="readonly">
      	</div>

        <div class="form-group form-inline col-md-6">
    	<label>ช่องทางรับเรื่อง</label>
      {!! Form::select('channels_id', dropdownOption('channels', 'id', 'name', '', 'name asc'), @$rs->channels_id, array('class'=>'form-control','placeholder'=>'--')) !!}

		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> ประเภทสาย</label>
      {!! Form::select('cable_types_id', dropdownOption('cable_types', 'id', 'name', '', 'name asc'), @$rs->cable_types_id, array('class'=>'form-control','placeholder'=>'--')) !!}
  		</div>

        <div class="boxNotWrongCall">
        <div class="form-group form-inline col-md-6">
    	<label>หมวดหมู่ของผู้แจ้ง</label>
      {!! Form::select('category_infos_id', dropdownOption('category_infos', 'id', 'name', '', 'name asc'), @$rs->category_infos_id, array('class'=>'form-control','placeholder'=>'--')) !!}
  		</div>

 		<div class="form-group form-inline col-md-6 boxDeptInfo">
    	<label>หน่วยงานที่แจ้ง</label>
      {!! Form::select('dept_infos_id', dropdownOption('dept_infos', 'id', 'name', '', 'name asc'), @$rs->dept_infos_id, array('class'=>'form-control','placeholder'=>'--')) !!}
  		</div>

        <div class="form-group form-inline col-md-12" style="margin-bottom:0px;">
    	<label></label>
   	 	<label>
     	 <input type="checkbox"> ไม่ประสงค์ออกนาม
    	</label>
  		</div>

        <div class="form-group form-inline col-md-12">
    	<label><span class="Txt_red_12"> *</span> ชื่อผู้แจ้ง</label>
        {!! Form::select('prefixs_id', dropdownOption('prefixs', 'id', 'name_th', '', 'name_th asc'), @$rs->prefixs_id, array('class'=>'form-control','placeholder'=>'--')) !!}
   	 	<input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อตัว" style="width:120px;">
        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อสกุล" style="width:200px;">
        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อรอง" style="width:120px;">
         <input type="text" class="form-control" data-inputmask="'mask': '9-9999-99999-99-9'" placeholder="เลขบัตรประชาชน" style="width:150px;"  />

  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> ประเทศ</label>
      {!! Form::select('countries_id', dropdownOption('countries', 'id', 'name', '', 'name asc'), @$rs->countries_id, array('class'=>'form-control','placeholder'=>'--')) !!}
  		</div>

      <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> จังหวัด/รัฐ</label>
      <span class="spanProvince">
        <select class="form-control" disabled="disabled">
            <option>--</option>
        </select>
      </span>
  		</div>

		<div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> เบอร์โทรศัพท์</label>
   	 	<input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label>ช่องทางที่รู้จัก1300</label>
      {!! Form::select('channel_knows_id', dropdownOption('channel_knows', 'id', 'name', '', 'name asc'), @$rs->channel_knows_id, array('class'=>'form-control','placeholder'=>'--')) !!}
  		</div>
        </div> <!--boxWrongCall-->
        </fieldset>


        <fieldset class="boxNotWrongCall">
        <legend>รายละเอียดเหตุการณ์</legend>

         <div class="form-group form-inline col-md-6">
    	 <label><span class="Txt_red_12"> *</span> วันที่เกิดเหตุ</label>
            <input type="text" class="form-control fdate" id="exampleInputEmail2" style="width:100px;">
            <img src="images/calendar.png" width="24" height="24" />
         </div>

         <div class="form-group form-inline col-md-6">
         <label>เวลาเกิดเหตุ</label>
	    <input type="text" class="form-control ftime" id="exampleInputEmail2" style="width:70px;"> <label style="width:20px;">น.</label>
   		</div>

        <div class="form-group form-inline col-md-6">
        <label><span class="Txt_red_12"> *</span> หัวข้อเหตุการณ์</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:70%; height:80px;"></textarea>
      	</div>

        <div class="form-group form-inline col-md-6">
        <label>สถานที่เกิดเหตุ</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:70%; height:80px;"></textarea>
      	</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> ประเทศ</label>
      {!! Form::select('countries_id', dropdownOption('countries', 'id', 'name', '', 'name asc'), @$rs->countries_id, array('class'=>'form-control','placeholder'=>'--')) !!}
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> จังหวัด/รัฐ</label>
      <span class="spanProvince2">
        <select class="form-control" disabled="disabled">
            <option>--</option>
        </select>
      </span>
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> อำเภอ</label>
      <span class="spanAmphoe2">
        <select class="form-control" disabled="disabled">
            <option>--</option>
        </select>
      </span>
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> ตำบล</label>
      <span class="spanTumbon2">
        <select class="form-control" disabled="disabled">
            <option>--</option>
        </select>
      </span>
  		</div>

        <div class="form-group form-inline col-md-12">
        <label><span class="Txt_red_12"> *</span> ข้อมูลสภาพปัญหา (สรุป)</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:80%; height:150px;"></textarea>
      	</div>
        </fieldset>

        <fieldset class="boxNotWrongCall">
        <legend>การประเมินความเสี่ยง (จากการพูดคุยทางโทรศัพท์) </legend>
        @foreach($risks as $risk)
        <div class="form-group form-inline col-md-3" style="height:30px;">
       	 <label style="width:100%; text-align:left;"><input type="checkbox" name="risks_id" value="{{ $risk->id }}"> {{ $risk->name }} </label>
    		</div>
        @endforeach



      	<div class="form-group form-inline col-md-12">
        <label>รายละเอียดเพิ่มเติม</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:80%; height:100px;"></textarea>
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
          <input name="input" type="button" title="บันทึกข้อมูลรับเรื่อง" value="บันทึกข้อมูลรับเรื่อง" class="btn btn-primary"/>
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
        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="" readonly="readonly" style="width:300px;">
      	</div>

        <div class="form-group form-inline col-md-6">
        <label><span class="Txt_red_12"> *</span> ตำแหน่ง</label>
        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="" readonly="readonly" style="width:400px;">
      	</div>

		<div class="form-group form-inline col-md-6">
    	 <label><span class="Txt_red_12"> *</span> แจ้งปัญหายุติวันที่ </label>
            <input type="text" class="form-control fdate" id="exampleInputEmail2" style="width:100px;">
            <img src="images/calendar.png" width="24" height="24" />
         </div>

         <div class="form-group form-inline col-md-6">
    	 	<label><span class="Txt_red_12"> *</span> วันที่ดำเนินการ</label>
            <input type="text" class="form-control fdate" id="exampleInputEmail2" style="width:100px;">
            <img src="images/calendar.png" width="24" height="24" />

            <label>เวลา</label>
            <input type="text" class="form-control ftime" id="exampleInputEmail2" style="width:70px;">  <label style="width:20px;">น.</label>

         </div>

		<div class="form-group form-inline col-md-12">
        <label><span class="Txt_red_12"> *</span> รายละเอียด</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:80%; height:150px;"></textarea>
      	</div>

        <div id="btnBoxAdd">
      <input name="input" type="button" title="บันทึกสรุปยุติปัญหา" value="บันทึกสรุปยุติปัญหา" class="btn btn-primary"/>
    </div>
  </div>
  <!-- END Tab 4 : สรุปยุติปัญหา -->












  <div role="tabpanel" class="tab-pane" id="p5">
   <div style="float:right; margin-bottom:5px;"><a class='attachFormBtn' href="ticket/ajaxloadattachform"><input type="button" value="เพิ่มเอกสาร" class="btn btn-success" /></a></div>

      <span id="attach"></span>

  </div>
  <!-- END Tab 5 : เอกสารแนบ -->

</div>



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
</script>


@endsection
