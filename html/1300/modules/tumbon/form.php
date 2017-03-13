<h3>ตำบล (เพิ่ม / แก้ไข)</h3>
<table class="tbadd">
<tr>
  <th>ชื่อตำบล<span class="Txt_red_12"> *</span></th>
  <td>
    <input type="text" class="form-control" id="exampleInputName" placeholder="ชื่อตำบล" style="width:500px;" />
</td>
</tr>
<tr>
  <th>จังหวัด / อำเภอ<span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
    <select name="lunch" class="selectpicker" id="lunch2" title="เลือกจังหวัด" data-live-search="true">
    <option>กรุงเทพฯ</option>
    <option>กระบี่</option>
  </select> / 
  <select name="lunch" class="selectpicker" id="lunch2" title="เลือกอำเภอ" data-live-search="true">
    <option></option>
  </select></div>
  </td>
</tr>
<tr>
  <th>เปิด / ปิดการใช้งาน</th>
  <td><input name="checkbox" type="checkbox" id="checkbox" checked="checked" />
    เปิดใช้งาน</td>
</tr>
</table>
<div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>