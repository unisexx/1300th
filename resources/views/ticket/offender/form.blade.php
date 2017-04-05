
  <div id='inline_offender' style='padding:10px; background:#fff;'>
        <h3 style="margin:0; padding:0; color:#F69">ผู้กระทำความผิด (เพิ่ม/แก้ไข)</h3>
<fieldset>
<legend>ข้อมูลส่วนตัว</legend>
    <div class="form-group form-inline col-md-12">
  <label><span class="Txt_red_12"> *</span> ชื่อผู้รับการช่วยเหลือ</label>
    {!! Form::select('prefixs_id', dropdownOption('prefixs', 'id', 'name_th', '', 'name_th asc'), @$rs->prefixs_id, array('class'=>'form-control','placeholder'=>'--')) !!}
  <input type="text" class="form-control"  placeholder="ชื่อตัว" style="width:120px;">

    <input type="text" class="form-control"  placeholder="ชื่อสกุล" style="width:200px;">
    <input type="text" class="form-control"  placeholder="ชื่อรอง" style="width:120px;">
  </div>

    <div class="form-group form-inline col-md-4">
    <label><span class="Txt_red_12"> *</span> เลขบัตรประชาชน</label>
    <input type="text" class="form-control" data-inputmask="'mask': '9-9999-99999-99-9'" placeholder="เลขบัตรประชาชน" style="width:150px;"  />
    </div>

    <div class="form-group form-inline col-md-4">
    <label>เกิดวันที่</label>
    <input type="text" class="form-control fdate"  style="width:100px;">
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
    <input type="text" class="form-control"  style="width:150px;">
    </div>

    <div class="form-group form-inline col-md-6">
    <label>เอกสารประจำตัวอื่นๆ</label>
    <input type="text" class="form-control"  style="width:250px;">
    </div>

    <div class="form-group form-inline col-md-6">
    <label>ตำหนิ รูปพรรณ</label>
    <input type="text" class="form-control"  style="width:350px;">
    </div>

    <div class="form-group form-inline col-md-6">
    <label>รหัสอ้างอิงพิสูจน์ลักษณะบุคคล</label>
    <input type="text" class="form-control"  style="width:400px;">
    </div>
</fieldset>


<fieldset>
<legend>ที่อยู่ตามทะเบียนบ้าน</legend>
    <div class="form-group form-inline col-md-4">
    <label>บ้านเลขที่</label>
    <input type="text" class="form-control"  style="width:100px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>หมู่</label>
    <input type="text" class="form-control"  style="width:100px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>หมู่บ้าน</label>
    <input type="text" class="form-control"  style="width:150px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>แยก</label>
    <input type="text" class="form-control"  style="width:100px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>ซอย</label>
    <input type="text" class="form-control"  style="width:150px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>ถนน</label>
    <input type="text" class="form-control"  style="width:150px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>เบอร์โทรศัพท์</label>
    <input type="text" class="form-control"  style="width:180px;">
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
</fieldset>


<fieldset>
<legend>ที่อยู่ปัจจุบัน <span style="font-size:14px; color:#090; margin-left:40px;"><input name="" type="checkbox" value="" /> ที่อยู่เดียวกับทะเบียนบ้าน</span></legend>
    <div class="form-group form-inline col-md-4">
    <label>บ้านเลขที่</label>
    <input type="text" class="form-control"  style="width:100px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>หมู่</label>
    <input type="text" class="form-control"  style="width:100px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>หมู่บ้าน</label>
    <input type="text" class="form-control"  style="width:150px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>แยก</label>
    <input type="text" class="form-control"  style="width:100px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>ซอย</label>
    <input type="text" class="form-control"  style="width:150px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>ถนน</label>
    <input type="text" class="form-control"  style="width:150px;">
    </div>

    <div class="form-group form-inline col-md-4">
    <label>เบอร์โทรศัพท์</label>
    <input type="text" class="form-control"  style="width:180px;">
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



<div id="btnBoxAdd">
<input name="input" type="button" title="บันทึกข้อมูลผู้กระทำความผิด" value="บันทึกข้อมูลผู้กระทำความผิด" class="btn btn-primary submitOffenderBtn"/>
</div>

</div>
