<h3>เรื่องรับแจ้ง (เพิ่ม / แก้ไข)</h3>
<div style="border-bottom:1px dotted #999; background:#FAFFF2; padding:10px; margin-bottom:10px; ">
<div class="form-inline">
  <div class="form-group">
    <label style="width:auto;"><span class="Txt_red_12"> *</span> เลขที่รับแจ้ง</label>
    <input type="text" class="form-control" id="exampleInputName2" readonly="readonly" placeholder="Auto" style="width:120px;">
  </div>
  
  <div class="form-group">
    <label style="width:auto;">ref.ticket</label>
    <a href="#"><span style="font-weight:700; display:inline-block; margin-top:3px;">17-01-0030</span></a>
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
          <option>ติดต่อด้วยตนเอง</option>
          <option value="TypeisDept">*หน่วยงาน</option>
          <option>พลเมืองดี</option>
          <option>บิดา มารดา หรือญาติฯ</option>
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
        <div style="float:right; margin-bottom:5px;"><a class='inline' href="#inline_help"><input type="button" value="เพิ่มข้อมูลผู้ขอรับการช่วยเหลือ" class="btn btn-success" /></a></div>
    
<table class="tblist2">
<tr>
  <th>ลำดับ</th>
  <th>เลขบัตรประชาชน</th>
  <th>ชื่อผู้ขอรับการช่วยเหลือ</th>
  <th>กลุ่มเป้าหมาย</th>
  <th>ประเภทผู้ใช้บริการ</th>
  <th>ปัญหาหลัก</th>
  <th>ที่อยู่ปัจจุบัน</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>1234567891234</td>
  <td>นายทรงพล  อาริยวัฒน์</td>
  <td>ผู้ใหญ่</td>
  <td>คนพิการ</td>
  <td>เร่รอน/ขอทาน</td>
  <td>112/31  หมู่6  ซอยชินเขต1/5   ถนนงามวงศ์วาน  แขวงทุ่งสองห้อง   เขตหลักสี่ กรุงเทพมหานคร 10210</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
</table>
        
        </fieldset>
        
        <fieldset class="boxNotWrongCall">
        <legend>ผู้กระทำความผิด</legend>
        <div style="float:right; margin-bottom:5px;"><a class='inline' href="#inline_offender"><input type="button" value="เพิ่มข้อมูลผู้กระทำความผิด" class="btn btn-success" /></a></div>
    
<table class="tblist2">
<tr>
  <th>ลำดับ</th>
  <th>เลขบัตรประชาชน</th>
  <th>ชื่อผู้กระทำความผิด</th>
  <th>ตำหนิ รูปพรรณ</th>
  <th>ที่อยู่ปัจจุบัน</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>1314845151515</td>
  <td>นายสมบูรณ์    กิ่งแก้ว</td>
  <td>สูงดำ มีปานที่หน้า</td>
  <td>112/31  หมู่6  ซอยชินเขต1/5   ถนนงามวงศ์วาน  แขวงทุ่งสองห้อง   เขตหลักสี่ กรุงเทพมหานคร 10210</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
</table>
        
        </fieldset>
        <div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึกข้อมูลรับเรื่อง" value="บันทึกข้อมูลรับเรื่อง" class="btn btn-primary"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>
    </div> 
        
	</div>
    
    <div role="tabpanel" class="tab-pane" id="p2">
	<div style="float:right; margin-bottom:5px;"><a class='inline' href="#inline_plan"><input type="button" value="เพิ่มแผนและการช่วยเหลือ" class="btn btn-success" /></a></div>
    
<table class="tblist2">
<tr>
  <th>ลำดับ</th>
  <th>วันที่เวลา</th>
  <th>ชื่อเจ้าหน้าที่</th>
  <th>แผนการช่วยเหลือ</th>
  <th>ส่งต่อ</th>
  <th style="width:40%">รายละเอียด</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>07/02/2560<br />
10:20 น.</td>
  <td>นาย วิทธิลักษณ์ จันทร์ธนสมบัติ<br />
    ศูนย์ส่วนเหลือสังคม 1300<br />
    (นักสังคมสงเคราะห์)</td>
  <td><img src="images/detail.png" width="32" height="32" class="vtip">
  </td>
  <td>นายวรพจน์  จงจิตต์<br />
    ศูนย์ส่วนเหลือสังคมจังหวัดนนทบุรี<br />
    (นักสังคมสงเคราะห์ปฎิบัติการ)</td>
  <td>สำรวจพื้นที่การช่วยเหลืออย่างเร่งด่วน</td>
  <td><a class='inline2' href="#inline_docprint"><img src="images/print2.png" width="16" height="14" style="margin-right:10px;" class="vtip" title="พิมพ์ใบส่งต่อ" /></a><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>06/02/2560<br />
    20:39 น.</td>
  <td>นาย วิทธิลักษณ์ จันทร์ธนสมบัติ<br />
    ศูนย์ส่วนเหลือสังคม 1300<br />
    (นักสังคมสงเคราะห์)</td>
  <td><img src="images/detail.png" alt="" width="32" height="32" class="vtip" title="- ให้คำปรึกษา / แนะนำด้าน   (สวัสดิการสังคม กฏหมาย/พรบ.ที่เกี่ยวข้อง)      &lt;br /&gt;
    - ให้คำปรึกษาของนักสังคมสงเคราะห์ &lt;br /&gt;
    - การประสาน/ ขอข้อมูลเพิ่มเติม" /></td>
  <td>-</td>
  <td> นางสาวพุทธิดา เจริญพากรากุล เจ้าหน้าที่รับเรื่องศูนย์ช่วยเหลือสังคม ให้คำแนะนำเบื้องต้น รายละเอียดการรับลงทะเบียน คุณสมบัติผู้มีสิทธิ์รับเงินอุดหนุน และหลักเกณฑ์การจ่ายเงิน โครงการเงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด 1. การรับลงทะเบียน/สถานที่รับลงทะเบียน - เด็กที่เกิดตั้งแต่วันที่ 1 ตุลาคม 2558-30 กันยายน 2559 สามารถลงทะเบียนได้ ตั้งแต่วันที่ 1 เมษายน 2559-30 กันยายน 2559 - เด็กที่เกิดตั้งแต่วันที่ 1 ตุลาคม 2559-30 กันยายน 2560 สามารถลงทะเบียนได้ตั้งแต่วันที่ 1 เมษายน 2559-30 กันยายน 2560 โดยสามารถลงทะเบียนได้ที่ - กรุงเทพมหานคร ลงทะเบียน ณ สำนักงานเขต - ส่วนภูมิภาค ลงทะเบียน ณ สำนักงานเทศบาล หรือ องค์การบริหารส่วนตำบล 2. คุณสมบัติผู้ลงทะเบียน/หลักเกณฑ์ - เด็กต้องเป็นผู้มีสัญชาติไทย - ไม่เป็นผู้รับสวัสดิการหรือสิทธิประโยชน์อื่นใดจากหน่วยงานของรัฐหรือรัฐวิสาหกิจ - เงินสงเคราะห์บุตรจากกองทุนประกันสังคม - สวัสดิการข้าราชการหรือรัฐวิสาหกิจ - ไม่อยู่ในความดูแลของหน่วยงานรัฐ เช่น บ้านพักเด็กและครอบครัว , สถานสงเคราะห์ของรัฐ - ครอบครัวที่เสี่ยงต่อความยากจน หมายถึง สมาชิกภายในครอบครัวมีรายได้เฉลี่ยต่ำกว่า 3,000 บาท ต่อคน ต่อเดือน โดยนำรายได้ของสมาชิกภายในครอบครัวทั้งหมด หารด้วยจำนวนสมาชิกภายในครอบครัว ทั้งหมดซึ่งรวมถึงเด็กแรกเกิดด้วย</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
</table>

    </div>
    
    <div role="tabpanel" class="tab-pane" id="p3">
    <div style="float:right; margin-bottom:5px;"><a class='inline' href="#inline_result"><input type="button" value="เพิ่มผลการช่วยเหลือ" class="btn btn-success" /></a></div>
<table class="tblist2">
<tr>
  <th>ลำดับ</th>
  <th>วันที่เวลา</th>
  <th>ชื่อเจ้าหน้าที่</th>
  <th style="width:40%">รายละเอียด</th>
  <th>สถานะ</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>07/02/2560<br />
15:30 น.</td>
  <td>นายวรพจน์  จงจิตต์<br />
ศูนย์ส่วนเหลือสังคมจังหวัดนนทบุรี<br />
(นักสังคมสงเคราะห์ปฎิบัติการ)</td>
  <td>ได้ลงพื้นที่พร้อมสอบถามและแนะนำวิธีการช่วยเหลือในเบื้องต้น และในวันที่ 09/02/2560 จะมาพานักจิตวิทยามาช่วยอีกครั้ง</td>
  <td>-</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>09/02/2560<br />
    10:10 น.</td>
  <td>นายวรพจน์  จงจิตต์<br />
    ศูนย์ส่วนเหลือสังคมจังหวัดนนทบุรี<br />
    (นักสังคมสงเคราะห์ปฎิบัติการ)</td>
  <td>เจ้าหน้าที่นักจิตวิทยา ได้ให้ผู้รับการช่วยเหลือไปประจำที่ รพ.</td>
  <td>ให้ความช่วยเหลือเรียบร้อย</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
</table>
    </div>
    
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
    
    <div role="tabpanel" class="tab-pane" id="p5">
   <div style="float:right; margin-bottom:5px;"><a class='inline' href="#inline_attachfile"><input type="button" value="เพิ่มเอกสาร" class="btn btn-success" /></a></div>
<table class="tblist2">
<tr>
  <th>ลำดับ</th>
  <th>ชื่อเอกสาร</th>
  <th>ประเภทเอกสาร</th>
  <th>ดาวน์โหลด</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><a href=""><img src="images/edit2.png" width="16" height="16" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove2.png" width="16" height="16" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
</table>
    </div>
    
    
</div>



<!-- This contains the hidden content for inline calls ข้อมูลผู้ขอรับการช่วยเหลือ-->
<div style='display:none'>
			<div id='inline_help' style='padding:5px; background:#fff;'>
            <h3 style="margin:0; padding:0; color:#F69">ข้อมูลผู้ขอรับการช่วยเหลือ (เพิ่ม/แก้ไข)</h3>

<fieldset>
    <legend>กลุ่มเป้าหมายและปัญหา</legend>   
    	<div class="form-group form-inline col-md-12">
        <label><span class="Txt_red_12"> *</span> ความพิการ</label>
        <label style="width:auto; padding-right:20px;"><input name="" type="radio" value="" /> ไม่พิการ</label>  <label style="width:auto"><input name="" type="radio" value="" /> พิการ</label>
        </div>  
        
        <div class="form-group form-inline col-md-4">
        <label><span class="Txt_red_12"> *</span> อายุ ณ วันที่แจ้ง</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:70px;" maxlength="3"> <label style="width:20px;">ปี</label>
        </div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> กลุ่มเป้าหมาย</label>
   	 	<select class="form-control" disabled="disabled">
          <option>--</option>
          <option>เด็ก</option>
          <option>เยาวชน</option>
          <option>ผู้ใหญ่</option>
          <option>ผู้สูงอายุ</option>
          <option>อื่นๆ</option>
        </select>
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label><span class="Txt_red_12"> *</span> ปัญหาหลัก</label>
   	 	<select class="form-control">
          <option>--</option>
          <option>ปัญหารายได้และความเป็นอยู่ </option>
          <option>ปัญหาความสัมพันธ์ในครอบครัว</option>
          <option>ปัญหาความรุนแรง</option>
          <option>เร่ร่อน/ขอทาน</option>
          <option>ปัญหาสุขภาพ/ อุบัติเหตุ อุบัติภัย</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
        <label><span class="Txt_red_12"> *</span> ปัญหาย่อย1</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
        <label>ปัญหาย่อย2</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
        <label>ปัญหาย่อย3</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>
        
    </fieldset>
    
    
    <fieldset>
    <legend>ข้อมูลส่วนตัว</legend>
        <div class="form-group form-inline col-md-12">
    	<label><span class="Txt_red_12"> *</span> ชื่อผู้รับการช่วยเหลือ</label>
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
  		</div>
        
        <div class="form-group form-inline col-md-6">
        <label>ตำหนิ รูปพรรณ</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>เพศ</label>
        <select class="form-control">
          <option>--</option>
          <option>เพศชาย</option>
          <option>เพศหญิง</option>
          <option>เพศที่สาม</option>
        </select>
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>ประเภทผู้ใช้บริการ</label>
         <select class="form-control">
          <option>--</option>
          <option>คนพิการ</option>
          <option>เด็ก/เยาวชน</option>
          <option>ผู้ติดเชื้อ HIV</option>
          <option>สตรี</option>
          <option>ผู้สูงอายุ</option>
          <option>คนเร่ร่อน/ไร้ที่พึ่ง</option>
          <option>อื่นๆ</option>
        </select>
        <label style="width:50px;">ระบุ</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;" placeholder="อื่นๆ ระบุ">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>เลขบัตรประชาชน</label>
        <input type="text" class="form-control" data-inputmask="'mask': '9-9999-99999-99-9'" placeholder="เลขบัตรประชาชน" style="width:150px;"  />
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>เลขที่หนังสือเดินทาง</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>เอกสารประจำตัวอื่นๆ</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:150px;" maxlength="3">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>ศาสนา</label>
        <select class="form-control">
          <option>--</option>
          <option>พุทธ</option>
          <option>อิสลาม</option>
          <option>คริสต์</option>
          <option>ซิกซ์</option>
          <option>ฮินดู</option>
        </select>
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>เชื้อชาติ</label>
        <select class="form-control">
          <option>--</option>
          <option>ไทย</option>
        </select>
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>สัญญาติ</label>
        <select class="form-control">
          <option>--</option>
          <option>ไทย</option>
        </select>
        <label style="width:50px;">อื่นๆ</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>อาชีพ</label>
        <select class="form-control">
          <option>--</option>
          <option>พนักงานบริษัท</option>
          <option>นักเรียน/นักศึกษา</option>
          <option>ข้าราชการ</option>
          <option>ค้าขาย</option>
          <option>พนักงานของรัฐ</option>
          <option>รับจ้าง</option>
          <option>แม่บ้าน</option>
          <option>ไม่ระบุ</option>
        </select>
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>เกิดวันที่</label>
        <input type="text" class="form-control fdate" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>สถานะภาพ</label>
        <select class="form-control">
          <option>--</option>
          <option>โสด</option>
          <option>แต่งงาน</option>
          <option>หย่าร้าง</option>
          <option>แยกกันอยู่</option>
        </select>
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>รหัสอ้างอิงพิสูจน์ลักษณะบุคคล</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:400px;">
        </div>
    </fieldset>
    
    
    <fieldset>
    <legend>ที่อยู่ตามทะเบียนบ้าน</legend>
        <div class="form-group form-inline col-md-4">
        <label>บ้านเลขที่</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>หมู่</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>หมู่บ้าน</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>แยก</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>ซอย</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>ถนน</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>เบอร์โทรศัพท์</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:180px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> ประเทศ</label>
   	 	<select class="form-control">
          <option>--</option>
          <option selected="selected">ประเทศไทย</option>
          <option>ญี่ปุ่น</option>
          <option>สหรัฐ</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> จังหวัด/รัฐ</label>
   	 	<select class="form-control">
          <option>--</option>
          <option>กรุงเทพฯ</option>
          <option>นนทบุรี</option>
          <option>นครปฐม</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> อำเภอ</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> ตำบล</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>
    </fieldset>
    
    
    <fieldset>
    <legend>ที่อยู่ปัจจุบัน <label style="font-size:14px; color:#069; margin-left:40px;"><input name="" type="checkbox" value="" /> ที่อยู่เดียวกับทะเบียนบ้าน</label></legend>
        <div class="form-group form-inline col-md-4">
        <label>บ้านเลขที่</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>หมู่</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>หมู่บ้าน</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>แยก</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>ซอย</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>ถนน</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>เบอร์โทรศัพท์</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:180px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> ประเทศ</label>
   	 	<select class="form-control">
          <option>--</option>
          <option selected="selected">ประเทศไทย</option>
          <option>ญี่ปุ่น</option>
          <option>สหรัฐ</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> จังหวัด/รัฐ</label>
   	 	<select class="form-control">
          <option>--</option>
          <option>กรุงเทพฯ</option>
          <option>นนทบุรี</option>
          <option>นครปฐม</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> อำเภอ</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> ตำบล</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>
    </fieldset>
    
    <fieldset>
    <legend>ข้อมูลครอบครัว</legend>
    	<div class="form-group form-inline col-md-12">
    	<label>ชื่อ-สกุลบิดา</label>
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
        
        <div class="form-group form-inline col-md-12">
    	<label>ชื่อ-สกุลมารดา</label>
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
        
        <div class="form-group form-inline col-md-12">
        <label>ครอบครัว สถานะภาพ</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:400px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>มีบุตรชาย</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:50px;" maxlength="2">
        <label style="width:30px;">คน</label>
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>มีบุตรสาว</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:50px;" maxlength="2">
        <label style="width:30px;">คน</label>
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>รวมบุตร</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:50px;" maxlength="2" readonly="readonly">
        <label style="width:30px;">คน</label>
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>บุตรที่ไม่ได้ศึกษา</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:50px;" maxlength="2">
        <label style="width:30px;">คน</label>
        </div>
        
      <div class="form-group form-inline col-md-8">
        <label>บุตรที่กำลังศึกษา</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:50px;" maxlength="2">
        <label style="width:30px;">คน</label>
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>บุตรที่ทำงานแล้ว</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:50px;" maxlength="2">
        <label style="width:30px;">คน</label>
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>บุตรที่ไม่ได้ทำงาน</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:50px;" maxlength="2">
        <label style="width:30px;">คน</label>
        </div>
    </fieldset>
    
    
    <fieldset>
    <legend>การให้คำปรึกษา</legend>
    	<div class="form-group form-inline col-md-12">
        <label>ความต้องการของผู้ใช้บริการ</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:80%; height:80px;"></textarea>
      	</div>
        
        <div class="form-group form-inline col-md-12">
        <label>ความเห็นนักสังคมสงเคราะห์</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:80%; height:80px;"></textarea>
      	</div>
    
    </fieldset>


<div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึกข้อมูลผู้รับการช่วยเหลือ" value="บันทึกข้อมูลผู้รับการช่วยเหลือ" class="btn btn-primary" />
</div>


</div>
</div>



<!-- This contains the hidden content for inline calls ผู้กระทำความผิด -->
		<div style='display:none'>
			<div id='inline_offender' style='padding:10px; background:#fff;'>
            <h3 style="margin:0; padding:0; color:#F69">ผู้กระทำความผิด (เพิ่ม/แก้ไข)</h3>
    <fieldset>
    <legend>ข้อมูลส่วนตัว</legend>
        <div class="form-group form-inline col-md-12">
    	<label><span class="Txt_red_12"> *</span> ชื่อผู้กระทำความผิด</label>
        <select class="form-control">
          <option>--</option>
          <option>นาย/Mr.</option>
          <option>นาง/Mrs.</option>
          <option>นางสาว/Miss</option>
          <option>เด็กหญิง/Miss</option>
          <option>เด็กชาย/Master</option>
        </select>
   	 	<input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อตัว" style="width:120px;">
        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อรอง" style="width:120px;">
        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อสกุล" style="width:200px;">
  		</div>
        
        <div class="form-group form-inline col-md-6">
        <label>ตำหนิ รูปพรรณ</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>เพศ</label>
        <select class="form-control">
          <option>--</option>
          <option>เพศชาย</option>
          <option>เพศหญิง</option>
          <option>เพศที่สาม</option>
        </select>
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>ประเภทผู้ใช้บริการ</label>
         <select class="form-control">
          <option>--</option>
          <option>คนพิการ</option>
          <option>เด็ก/เยาวชน</option>
          <option>ผู้ติดเชื้อ HIV</option>
          <option>สตรี</option>
          <option>ผู้สูงอายุ</option>
          <option>คนเร่ร่อน/ไร้ที่พึ่ง</option>
          <option>อื่นๆ</option>
        </select>
        <label style="width:50px;">ระบุ</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;" placeholder="อื่นๆ ระบุ">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>เลขบัตรประชาชน</label>
        <input type="text" class="form-control fidcard" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>เลขที่หนังสือเดินทาง</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>เอกสารประจำตัวอื่นๆ</label>
        <input type="text" class="form-control numOnly" id="exampleInputEmail2" style="width:150px;" maxlength="3">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>ศาสนา</label>
        <select class="form-control">
          <option>--</option>
          <option>พุทธ</option>
          <option>อิสลาม</option>
          <option>คริสต์</option>
          <option>ซิกซ์</option>
          <option>ฮินดู</option>
        </select>
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>เชื้อชาติ</label>
        <select class="form-control">
          <option>--</option>
          <option>ไทย</option>
        </select>
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>สัญญาติ</label>
        <select class="form-control">
          <option>--</option>
          <option>ไทย</option>
        </select>
        <label style="width:50px;">อื่นๆ</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>อาชีพ</label>
        <select class="form-control">
          <option>--</option>
          <option>พนักงานบริษัท</option>
          <option>นักเรียน/นักศึกษา</option>
          <option>ข้าราชการ</option>
          <option>ค้าขาย</option>
          <option>พนักงานของรัฐ</option>
          <option>รับจ้าง</option>
          <option>แม่บ้าน</option>
          <option>ไม่ระบุ</option>
        </select>
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>เกิดวันที่</label>
        <input type="text" class="form-control fdate" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>สถานะภาพ</label>
        <select class="form-control">
          <option>--</option>
          <option>โสด</option>
          <option>แต่งงาน</option>
          <option>หย่าร้าง</option>
          <option>แยกกันอยู่</option>
        </select>
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>รหัสอ้างอิงพิสูจน์ลักษณะบุคคล</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:400px;">
        </div>
    </fieldset>
    
    
    <fieldset>
    <legend>ที่อยู่ตามทะเบียนบ้าน</legend>
        <div class="form-group form-inline col-md-4">
        <label>บ้านเลขที่</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>หมู่</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>หมู่บ้าน</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>แยก</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>ซอย</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>ถนน</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>เบอร์โทรศัพท์</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:180px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> ประเทศ</label>
   	 	<select class="form-control">
          <option>--</option>
          <option selected="selected">ประเทศไทย</option>
          <option>ญี่ปุ่น</option>
          <option>สหรัฐ</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> จังหวัด/รัฐ</label>
   	 	<select class="form-control">
          <option>--</option>
          <option>กรุงเทพฯ</option>
          <option>นนทบุรี</option>
          <option>นครปฐม</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> อำเภอ</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> ตำบล</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>
    </fieldset>
    
    
    <fieldset>
    <legend>ที่อยู่ปัจจุบัน <span style="font-size:14px; color:#090; margin-left:40px;"><input name="" type="checkbox" value="" /> ที่อยู่เดียวกับทะเบียนบ้าน</span></legend>
        <div class="form-group form-inline col-md-4">
        <label>บ้านเลขที่</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>หมู่</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>หมู่บ้าน</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>แยก</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:100px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>ซอย</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>ถนน</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
        <label>เบอร์โทรศัพท์</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:180px;">
        </div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> ประเทศ</label>
   	 	<select class="form-control">
          <option>--</option>
          <option selected="selected">ประเทศไทย</option>
          <option>ญี่ปุ่น</option>
          <option>สหรัฐ</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> จังหวัด/รัฐ</label>
   	 	<select class="form-control">
          <option>--</option>
          <option>กรุงเทพฯ</option>
          <option>นนทบุรี</option>
          <option>นครปฐม</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> อำเภอ</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>
        
        <div class="form-group form-inline col-md-4">
    	<label><span class="Txt_red_12"> *</span> ตำบล</label>
   	 	<select class="form-control">
          <option>--</option>
        </select>
  		</div>
    </fieldset>



<div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึกข้อมูลผู้กระทำความผิด" value="บันทึก" class="btn btn-primary"/>
</div>

</div>
</div>



<!-- This contains the hidden content for inline calls แผนและการช่วยเหลือ-->
		<div style='display:none'>
			<div id='inline_plan' style='padding:10px; background:#fff;'>
            <h3 style="margin:0; padding:0; color:#F69">แผนและการช่วยเหลือ (เพิ่ม/แก้ไข</h3>
            
        <fieldset>
        <legend>ข้อมูลการช่วยเหลือ</legend>    
		<div class="form-group form-inline col-md-6">
        <label>ชื่อเจ้าหน้าที่</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;" readonly="readonly">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>ตำแหน่ง</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;" readonly="readonly">
		</div>
        
        <div class="form-group form-inline col-md-6">
        <label><span class="Txt_red_12"> *</span> วันที่ดำเนินการ</label>
            <input type="text" class="form-control fdate" id="exampleInputEmail2" style="width:100px;"> 
            <img src="images/calendar.png" width="24" height="24" /> 

            <label>เวลา</label>
            <input type="text" class="form-control ftime" id="exampleInputEmail2" style="width:70px;">  <label style="width:20px;">น.</label>
        </div>   
        
        <div class="form-group form-inline col-md-6">
        <label><span class="Txt_red_12"> *</span> ความเร่งด่วน</label>
        <select class="form-control">
          <option>--</option>
          <option>ปกติ</option>
          <option>ด่วน</option>
          <option>ด่วนที่สุด</option>
        </select> 
        </div>
        </fieldset>
        
        <fieldset>
        <legend>ข้อมูลหน่วยงานประสานส่งต่อ <img src="images/add.png" width="16" height="16" class="vtip" title="เพิ่มหน่วยงาน" />   </legend>   
        
        <div class="form-group form-inline col-md-6">
        <label>ประสานความช่วยเหลือ</label>
         <select name="select" class="form-control">
           <option value="DeptIN">หน่วยงานภายใน พม.</option>
           <option value="DeptOUT">หน่วยงานภายนอก </option>
         </select>
               </div>
         
         <div class="form-group form-inline col-md-6">
         <label>ชื่อหน่วยงาน</label>
         
         <span class="boxDeptIN">
         <input type="text" class="form-control" id="tags" style="width:300px;" placeholder="พิมพ์ชื่อหน่วยงาน (auto complete)">
         </span>
         
         <span class="boxDeptOUT">
         <select name="select" class="form-control">
         	<option selected="selected">- เลือกลักษณะหน่วยงาน -</option>
            <option>โรงพยาบาล</option>
            <option>ศูนย์บริการสาธารณสุข</option>
            <option>สถานีตำรวจ</option>
          	<option>สำนักงานเขต</option>
          	<option>องค์กรบริหารส่วนท้องถิ่น</option>
          	<option>โรงเรียน</option>
          	<option>มูลนิธิ</option>
            <option>อื่นๆ</option>
      	 </select>
         <select id="lunch" class="selectpicker" data-live-search="true" title="เลือกโรงพยาบาล">
            <option>ร.พ.กล้วยน้ำไท 1</option>
            <option>ร.พ.สินแพทย์</option>
          	<option>ร.พ.เมโย</option>
          	<option>ร.พ.วิภาวดี 1</option>
          	<option>ร.พ.บางปะกอก 9 อินเตอร์เนชั่นแนล</option>
          	<option>ร.พ.มิชชั่น</option>
            <option>ร.พ.ธนบุรี 2</option>
      	 </select>
         </span>
         
		</div>

        
        
        <div class="form-group form-inline col-md-6">
        <label>ชื่อผู้รับผิดชอบ</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>ตำแหน่ง</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;">
		</div>
        
        <div class="form-group form-inline col-md-6">
        <label>หมายเลขโทรศัพท์</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;">
        </div>
        </fieldset>
        
        
       <fieldset>
        <legend>ความคิดเห็นและรายละเอียด</legend>   
       	<div class="form-group form-inline col-md-12">
        <label><span class="Txt_red_12"> *</span> ความเห็นของนักสังคมสงเคราะห์/ผู้รับผิดชอบ</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:80%; height:100px;"></textarea>
      	</div>
        
        <div class="form-group form-inline col-md-12">
        <label><span class="Txt_red_12"> *</span> รายละเอียด</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:80%; height:200px;">นายเอกพินิจ แก้วเสนา ตำแหน่งนักพัฒนาสังคมชำนาญการ หน่วยงานศูนย์ช่วยเหลือสังคม</textarea>
      	</div>
        
        </fieldset>
            
            
        <fieldset>
        <legend>แนวทางการช่วยเหลือตามสภาพปัญหาและความต้องการของผู้ใช้บริการ </legend>
        <div class="form-group form-inline col-md-4" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> ให้คำปรึกษา / แนะนำด้าน  (สวัสดิการสังคม กฏหมาย/พรบ.ที่เกี่ยวข้อง)</label>
  		</div>
        
        <div class="form-group form-inline col-md-4" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> การช่วยเหลือผู้ประสบปัญหาสังคกรณีฉุกเฉิน/วิกฤตการ</label>
  		</div>
        
        <div class="form-group form-inline col-md-4" style="height:30px;">
     	<label style="width:100%; text-align:left;"><input type="checkbox"> ให้คำปรึกษาของนักสังคมสงเคราะห์ </label>
  		</div>
        
        <div class="form-group form-inline col-md-4" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> การประสาน/ ขอข้อมูลเพิ่มเติม</label>
  		</div>
        
        <div class="form-group form-inline col-md-4" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> การประสานเครือข่ายทางสังคมเพื่อให้การช่วยเหลือ เช่น ตำรวจ โรงพยาบาล  </label>
  		</div>
        
        <div class="form-group form-inline col-md-4" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> ติดตามผลการช่วยเหลือ </label>
  		</div>
        
        <div class="form-group form-inline col-md-4" style="height:30px;">
     	 <label style="width:100%; text-align:left;"><input type="checkbox"> อื่นๆ โปรดระบุ <input type="text" class="form-control" id="exampleInputEmail2" style="width:250px;"></label>
         
  		</div>
        </fieldset>
            <div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <label style="text-align:left; padding-left:20px; width:250px"> <input type="checkbox"> วา่งแผนความช่วยเหลือเรียบร้อย</label>
</div>

</div>
</div>


<!-- This contains the hidden content for inline calls -->
		<div style='display:none'>
			<div id='inline_result' style='padding:10px; background:#fff;'>
            <h3 style="margin:0; padding:0; color:#F69">ผลการช่วยเหลือ (เพิ่ม/แก้ไข)</h3>

		<fieldset>
        <legend>ข้อมูลผลการช่วยเหลือ</legend>    
		<div class="form-group form-inline col-md-6">
        <label>ชื่อเจ้าหน้าที่</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;" readonly="readonly">
        </div>
        
        <div class="form-group form-inline col-md-6">
        <label>ตำแหน่ง</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;" readonly="readonly">
		</div>
        
        <div class="form-group form-inline col-md-6">
        <label><span class="Txt_red_12"> *</span> วันที่ดำเนินการ</label>
            <input type="text" class="form-control fdate" id="exampleInputEmail2" style="width:100px;"> 
            <img src="images/calendar.png" width="24" height="24" /> 

            <label>เวลา</label>
            <input type="text" class="form-control ftime" id="exampleInputEmail2" style="width:70px;">  <label style="width:20px;">น.</label>
        </div>   
        
        <div class="form-group form-inline col-md-6">
        <label>แนบไฟล์</label>
         <input name="" type="file" class="form-control" style="width:350px;" />
		</div>
        
        <div class="form-group form-inline col-md-12">
        <label><span class="Txt_red_12"> *</span> รายละเอียด</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:80%; height:200px;">นายเอกพินิจ แก้วเสนา ตำแหน่งนักพัฒนาสังคมชำนาญการ หน่วยงานศูนย์ช่วยเหลือสังคม</textarea>
      	</div>
        
        </fieldset>
            
           
            <div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/> 
  <label style="text-align:left; padding-left:20px; width:225px"> <input type="checkbox"> ให้ความช่วยเหลือเรียบร้อย</label>
</div>

</div>
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