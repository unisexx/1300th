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
        <select class="form-control">
          <option>--</option>
          <option>โทร 1300</option>
          <option>Website</option>
          <option>Line</option>
          <option>Skype</option>
          <option>Facebook</option>
          <option>Email</option>
          <option>Walk-in (ติดต่อด้วยตนเอง)</option>
          <option>Moblie APP หญิงไทย</option>
          <option>APP แสนรู้</option>
          <option>ทีวี</option>
        </select>
   	 	<!--<input type="text" class="form-control" id="exampleInputEmail2" placeholder="อื่นๆ ระบุ">-->
		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> ประเภทสาย</label>
   	 	<select class="form-control">
          <option>--</option>
          <option value="NewProblem">ปัญหาใหม่</option>
          <option value="OldProblem">ติดตามปัญหา (เดิม)</option>
          <option value="WrongCall">*โทรผิด</option>
          <option value="Harry">*ก่อกวน</option>
          <option value="AskInfo">สอบถามข้อมูล</option>
          <option value="Comment">ให้ข้อคิดเห็น</option>
        </select>
  		</div>

        <div class="boxNotWrongCall">
        <div class="form-group form-inline col-md-6">
    	<label>หมวดหมู่ของผู้แจ้ง</label>
   	 	<select class="form-control">
          <option>--</option>
          <option value="Owner">ติดต่อด้วยตนเอง</option>
          <option value="DeptInfo">*หน่วยงาน</option>
          <option value="Goodman">พลเมืองดี</option>
          <option value="Family">บิดา มารดา หรือญาติฯ</option>
        </select>
  		</div>

 		<div class="form-group form-inline col-md-6 boxDeptInfo">
    	<label>หน่วยงานที่แจ้ง</label>
   	 	<select class="form-control">
          <option>--</option>
          <option>สถานีตำรวจ</option>
          <option>โรงพยาบาล</option>
          <option>ศูนย์บริการสาธารณสุข</option>
          <option>จส.100</option>
          <option>สวพ.91</option>
          <option>ร่วมด้วยช่วยกัน</option>
          <option>มูลนิธิ</option>
          <option>สำนักงานเขต</option>
          <option>สถานีจราจรเพื่อสังคม</option>
          <option>องค์การบริหารส่วนตำบล</option>
          <option>หน่วยงานจากต่างประเทศ</option>
        </select>
   	 	<!--<input type="text" class="form-control" id="exampleInputEmail2" placeholder="อื่นๆ ระบุ">-->
  		</div>

        <div class="form-group form-inline col-md-12" style="margin-bottom:0px;">
    	<label></label>
   	 	<label>
     	 <input type="checkbox"> ไม่ประสงค์ออกนาม
    	</label>
  		</div>

        <div class="form-group form-inline col-md-12">
    	<label><span class="Txt_red_12"> *</span> ชื่อผู้แจ้ง</label>
        <select class="form-control">
          <option>--</option>
          <option>นาย/Mr.</option>
          <option>นาง/Mrs.</option>
          <option>นางสาว/Miss</option>
          <option>เด็กหญิง/Miss</option>
          <option>เด็กชาย/Master</option>
        </select>
   	 	<input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อตัว" style="width:120px;">
        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อสกุล" style="width:200px;">
        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อรอง" style="width:120px;">
         <input type="text" class="form-control" data-inputmask="'mask': '9-9999-99999-99-9'" placeholder="เลขบัตรประชาชน" style="width:150px;"  />

  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> ประเทศ</label>
   	 	<select class="form-control">
          <option>--</option>
          <option selected="selected">ประเทศไทย</option>
          <option>ญี่ปุ่น</option>
          <option>สหรัฐ</option>
        </select>
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> จังหวัด/รัฐ</label>
   	 	<select class="form-control">
          <option>--</option>
          <option>กรุงเทพฯ</option>
          <option>นนทบุรี</option>
          <option>นครปฐม</option>
        </select>
  		</div>

		<div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> เบอร์โทรศัพท์</label>
   	 	<input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label>ช่องทางที่รู้จัก1300</label>
   	 	<select class="form-control">
          <option>--</option>
          <option>Website 1300</option>
          <option>โทรทัศน์</option>
          <option>Mobile Application</option>
          <option>Facebook</option>
          <option>เครือข่ายอื่นๆ</option>
        </select>
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
   	 	<select class="form-control">
          <option>--</option>
          <option selected="selected">ประเทศไทย</option>
          <option>ญี่ปุ่น</option>
          <option>สหรัฐ</option>
        </select>
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> จังหวัด/รัฐ</label>
   	 	<select class="form-control">
          <option>--</option>
          <option>กรุงเทพฯ</option>
          <option>นนทบุรี</option>
          <option>นครปฐม</option>
        </select>
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> อำเภอ</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>

        <div class="form-group form-inline col-md-6">
    	<label><span class="Txt_red_12"> *</span> ตำบล</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>

        <div class="form-group form-inline col-md-12">
        <label><span class="Txt_red_12"> *</span> ข้อมูลสภาพปัญหา (สรุป)</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:80%; height:150px;"></textarea>
      	</div>
        </fieldset>

        <fieldset class="boxNotWrongCall">
        <legend>การประเมินความเสี่ยง (จากการพูดคุยทางโทรศัพท์) </legend>
        <div class="form-group form-inline col-md-3" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> ไม่มีความเสี่ยง </label>
  		</div>

        <div class="form-group form-inline col-md-3" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> การรับและแพร่เชื้อโรคติดต่อร้ายแรง เช่น HIV </label>
  		</div>

        <div class="form-group form-inline col-md-3" style="height:30px;">
     	<label style="width:100%; text-align:left;"><input type="checkbox"> การทำแท้ง / ทอดทิ้งบุตร </label>
  		</div>

        <div class="form-group form-inline col-md-3" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> เกิดปัญหาสุขภาพจิต / จิตเวช</label>
  		</div>

        <div class="form-group form-inline col-md-3" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> การทำร้ายผู้อื่น / ทำร้ายบุคคลในครอบครัว </label>
  		</div>

        <div class="form-group form-inline col-md-3" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> ได้รับการเลี้ยงดู / ดูแลไม่เหมาะสม</label>
  		</div>

        <div class="form-group form-inline col-md-3" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> การล่วงละเมิดทางเพศซ้ำ</label>
  		</div>

        <div class="form-group form-inline col-md-3" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> การหลบหนี ปฏิเสธการรักษา</label>
  		</div>

        <div class="form-group form-inline col-md-3" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> การเป็นเหยื่อการค้ามนุษย์</label>
  		</div>

        <div class="form-group form-inline col-md-3" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> การติดสารเสพติด / เสพซ้ำ</label>
  		</div>

        <div class="form-group form-inline col-md-3" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> การก่ออาชญากรรม</label>
  		</div>

        <div class="form-group form-inline col-md-3" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> ซึมเศร้า / ความเครียดสูง / การฆ่าตัวตาย</label>
  		</div>



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
   <div style="float:right; margin-bottom:5px;"><a class='inline' href="#inline_attachfile"><input type="button" value="เพิ่มเอกสาร" class="btn btn-success" /></a></div>

      <span id="attach"></span>

  </div>
  <!-- END Tab 5 : เอกสารแนบ -->

</div>















<!-- This contains the hidden content for inline calls -->
		<div style='display:none'>
			<div id='inline_attachfile' style='padding:10px; background:#fff;'>
            <h3 style="margin:0; padding:0; color:#F69">แนบไฟล์ (เพิ่ม/แก้ไข)</h3>

		<fieldset>
        <legend>ไฟล์เอกสาร</legend>
        <div class="form-group form-inline col-md-12">
        <label>ประเภทเอกสาร</label>
        <select name="select" class="form-control">
           <option>- เลือกประเภทเอกสาร -</option>
           <option>สำเนาบัตรประจำตัวประชาชน</option>
           <option>สำเนาทะเบียนบ้าน</option>
           <option>รูปถ่าย</option>
           <option>หลักฐานการศึกษา</option>
           <option>ใบแจ้งความ</option>
           <option>เอกสารอื่นๆ</option>
         </select>
       	</div>
		<div class="form-group form-inline col-md-12">
        <label>ชื่อเอกสาร</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;">
        <input name="" type="file" style="width:400px; display:inline" />
       </div>
        </fieldset>

            <div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
</div>

</div>
</div>


<!-- This contains the hidden content for inline calls -->
		<div style='display:none'>
			<div id='inline_docprint' style='padding:10px; background:#fff;'>
            <h3 style="margin:0; padding:0; color:#F69">เอกสารส่งต่อ</h3>

		<fieldset>
        <legend>พิมพ์แบบส่งต่อความช่วยเหลือฯ</legend>
		<div class="form-group form-inline col-md-4">
        	<div style="border:1px #FCC dashed; background:#FFF0FF; padding:10px; text-align:center; cursor:pointer" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=print1'"> <img src="images/document.png" width="24" height="24" /> แบบไม่ทางการ</div></a>
       	</div>
        <div class="form-group form-inline col-md-4">
        	<div style="border:1px #FCC dashed; background:#FFF0FF; padding:10px; text-align:center; cursor:pointer" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=print2'"> <img src="images/krut.png" width="24" height="24" /> แบบทางการ</div>
        	<div></div>
       	</div>

        </fieldset>
</div>

</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  // load index
  ajaxloadreceive();
  ajaxloadoffender();
  ajaxloadplan();
  ajaxloadresult();

  // load form
  $(".receiveFormBtn").colorbox({maxWidth:'95%'});
  $(".offenderFormBtn").colorbox({maxWidth:'95%'});
  $(".planFormBtn").colorbox({maxWidth:'95%'});
  $(".resultFormBtn").colorbox({maxWidth:'95%'});

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
