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
{!! Form::select('targets_id', dropdownOption('targets', 'id', 'name', 'parent_id = 0', 'name asc'), @$rs->channel_knows_id, array('class'=>'form-control','placeholder'=>'--')) !!}
</div>

<div class="form-group form-inline col-md-4">
<label><span class="Txt_red_12"> *</span> ปัญหาหลัก</label>
<span class="spanTarget">
  <select class="form-control" disabled="disabled">
      <option>--</option>
  </select>
</span>
</div>

<div class="form-group form-inline col-md-4">
<label><span class="Txt_red_12"> *</span> ปัญหาย่อย1</label>
<span class="spanTarget">
  <select class="form-control" disabled="disabled">
      <option>--</option>
  </select>
</span>
</div>

<div class="form-group form-inline col-md-4">
<label>ปัญหาย่อย2</label>
<span class="spanTarget">
  <select class="form-control" disabled="disabled">
      <option>--</option>
  </select>
</span>
</div>

<div class="form-group form-inline col-md-4">
<label>ปัญหาย่อย3</label>
<span class="spanTarget">
  <select class="form-control" disabled="disabled">
      <option>--</option>
  </select>
</span>
</div>

</fieldset>


<fieldset>
<legend>ข้อมูลส่วนตัว</legend>
<div class="form-group form-inline col-md-12">
<label><span class="Txt_red_12"> *</span> ชื่อผู้รับการช่วยเหลือ</label>
{!! Form::select('prefixs_id', dropdownOption('prefixs', 'id', 'name_th', '', 'name_th asc'), @$rs->prefixs_id, array('class'=>'form-control','placeholder'=>'--')) !!}
<input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อตัว" style="width:120px;">

<input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อสกุล" style="width:200px;">
<input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อรอง" style="width:120px;">
</div>

<div class="form-group form-inline col-md-4">
<label><span class="Txt_red_12"> *</span> เลขบัตรประชาชน</label>
<input type="text" class="form-control" data-inputmask="'mask': '9-9999-99999-99-9'" placeholder="เลขบัตรประชาชน" style="width:150px;"  />
</div>

<div class="form-group form-inline col-md-4">
<label>เกิดวันที่</label>
<input type="text" class="form-control fdate" id="exampleInputEmail2" style="width:100px;">
</div>

<div class="form-group form-inline col-md-4">
<label>เพศ</label>
{!! Form::select('genders_id', dropdownOption('genders', 'id', 'name', '', 'name asc'), @$rs->genders_id, array('class'=>'form-control','placeholder'=>'--')) !!}
</div>

<div class="form-group form-inline col-md-4">
<label>สัญญาติ</label>
{!! Form::select('nationalities_id', dropdownOption('nationalities', 'id', 'name_th', '', 'name_th asc'), @$rs->nationalities_id, array('class'=>'form-control','placeholder'=>'--')) !!}
</div>

<div class="form-group form-inline col-md-4">
<label>เชื้อชาติ</label>
{!! Form::select('races_id', dropdownOption('races', 'id', 'name', '', 'name asc'), @$rs->races_id, array('class'=>'form-control','placeholder'=>'--')) !!}
</div>

<div class="form-group form-inline col-md-4">
<label>ศาสนา</label>
{!! Form::select('religions_id', dropdownOption('religions', 'id', 'name', '', 'name asc'), @$rs->religions_id, array('class'=>'form-control','placeholder'=>'--')) !!}
</div>

<div class="form-group form-inline col-md-4">
<label>อาชีพ</label>
{!! Form::select('careers_id', dropdownOption('careers', 'id', 'name', '', 'name asc'), @$rs->careers_id, array('class'=>'form-control','placeholder'=>'--')) !!}
</div>

<div class="form-group form-inline col-md-4">
<label>สถานะภาพ</label>
{!! Form::select('marital_statuses_id', dropdownOption('marital_statuses', 'id', 'name', '', 'name asc'), @$rs->marital_statuses_id, array('class'=>'form-control','placeholder'=>'--')) !!}
</div>

<div class="form-group form-inline col-md-4">
<label>เลขที่หนังสือเดินทาง</label>
<input type="text" class="form-control" id="exampleInputEmail2" style="width:150px;">
</div>

<div class="form-group form-inline col-md-6">
<label>เอกสารประจำตัวอื่นๆ</label>
<input type="text" class="form-control" id="exampleInputEmail2" style="width:250px;">
</div>

<div class="form-group form-inline col-md-6">
<label>ตำหนิ รูปพรรณ</label>
<input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;">
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
{!! Form::select('countries_id', dropdownOption('countries', 'id', 'name', '', 'name asc'), @$rs->countries_id, array('class'=>'form-control','placeholder'=>'--')) !!}
</div>

<div class="form-group form-inline col-md-4">
<label><span class="Txt_red_12"> *</span> จังหวัด/รัฐ</label>
<span class="spanProvince">
  <select class="form-control" disabled="disabled">
      <option>--</option>
  </select>
</span>
</div>

<div class="form-group form-inline col-md-4">
<label><span class="Txt_red_12"> *</span> อำเภอ</label>
<span class="spanAmphoe">
  <select class="form-control" disabled="disabled">
      <option>--</option>
  </select>
</span>
</div>

<div class="form-group form-inline col-md-4">
<label><span class="Txt_red_12"> *</span> ตำบล</label>
<span class="spanTumbon">
  <select class="form-control" disabled="disabled">
      <option>--</option>
  </select>
</span>
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
<input name="input" type="button" title="บันทึกข้อมูลผู้รับการช่วยเหลือ" value="บันทึกข้อมูลผู้รับการช่วยเหลือ" class="btn btn-primary submitReceiveBtn" />
</div>

</div>
