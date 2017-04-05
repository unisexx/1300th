<div id='inline_plan' style='padding:10px; background:#fff;'>
    <h3 style="margin:0; padding:0; color:#F69">แผนและการช่วยเหลือ (เพิ่ม/แก้ไข)</h3>

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
        {!! Form::select('urgents_id', dropdownOption('urgents', 'id', 'name', '', 'name asc'), @$rs->urgents_id, array('class'=>'form-control','placeholder'=>'--')) !!}
        </div>
        </fieldset>

        <fieldset>
        <legend>แนวทางการช่วยเหลือตามสภาพปัญหาและความต้องการของผู้ใช้บริการ </legend>
          @foreach($helps as $help)
          <div class="form-group form-inline col-md-4" style="height:30px;">
         	 <label style="width:100%; text-align:left;"><input type="checkbox" name="helps_id[]" value="{{ $help->id }}"> {{ $help->name }}
             @if($help->fill == 1)
              <input type="text" class="form-control" style="width:250px;" name="fill[]" value="">
             @endif
           </label>
      		</div>
          @endforeach
        </fieldset>

        <fieldset>
        <legend>ความคิดเห็นของนักสังคมฯ / ผู้รับผิดชอบ <span class="note">* สำหรับสิทธิ์นักสังคมฯ</span></legend>
       	<div class="form-group form-inline col-md-12">
        <label><span class="Txt_red_12"> *</span> ความเห็นของนักสังคมสงเคราะห์/ผู้รับผิดชอบ</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:80%; height:100px;"></textarea>
      	</div>

        <div class="form-group form-inline col-md-12">
        <label>ชื่อนักสังคมฯ</label>
        <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;" readonly="readonly">
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
        <legend>รายละเอียดแผนการช่วยเหลือ</legend>
        <div class="form-group form-inline col-md-12">
        <label><span class="Txt_red_12"> *</span> รายละเอียด</label>
        <textarea class="form-control" id="exampleInputEmail2" placeholder="" style="width:80%; height:200px;">นายเอกพินิจ แก้วเสนา ตำแหน่งนักพัฒนาสังคมชำนาญการ หน่วยงานศูนย์ช่วยเหลือสังคม</textarea>
      	</div>

        </fieldset>

            <div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary submitPlanBtn" style="width:100px;"/>
  <label style="text-align:left; padding-left:20px; width:250px"> <input type="checkbox"> วา่งแผนความช่วยเหลือเรียบร้อย</label>
</div>

</div>
