<div id='inline_attachfile' style='padding:10px; background:#fff;'>
<h3 style="margin:0; padding:0; color:#F69">แนบไฟล์ (เพิ่ม/แก้ไข)</h3>

<fieldset>
    <legend>ไฟล์เอกสาร</legend>
    <div class="form-group form-inline col-md-12">
    <label>ประเภทเอกสาร</label>
    {!! Form::select('doc_types_id', dropdownOption('doc_types', 'id', 'name', '', 'name asc'), @$rs->doc_types_id, array('class'=>'form-control','placeholder'=>'- เลือกประเภทเอกสาร -')) !!}
    </div>
<div class="form-group form-inline col-md-12">
    <label>ชื่อเอกสาร</label>
    <input type="text" class="form-control" id="exampleInputEmail2" style="width:350px;">
    <input name="" type="file" style="width:400px; display:inline" />
   </div>
    </fieldset>

        <div id="btnBoxAdd">
<input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary submitAttachBtn" style="width:100px;"/>
</div>

</div>
