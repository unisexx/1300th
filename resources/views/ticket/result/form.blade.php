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
    <input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary submitResultBtn" style="width:100px;"/>
    <label style="text-align:left; padding-left:20px; width:225px"> <input type="checkbox"> ให้ความช่วยเหลือเรียบร้อย</label>
  </div>
</div>
