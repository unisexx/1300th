<h3>ลักษณะการสูญเสียอวัยวะ (เพิ่ม / แก้ไข)</h3>
<table class="tbadd">
<tr>
  <th>ประเภทการสูญเสียอวัยวะ<span class="Txt_red_12"> *</span></th>
  <td><select name="select7" class="form-control" style="width:auto;">
    <option>+ เลือกประเภทการสูญเสียอวัยวะ +</option>
    <option>การมองเห็น</option>
    <option>การได้ยินหรือสิ่อความหมาย</option>
  </select></td>
</tr>
<tr>
  <th>ชื่อลักษณะการสูญเสียอวัยวะ<span class="Txt_red_12"> *</span></th>
  <td class="chkPermiss">
    <input type="text" class="form-control" id="exampleInputName" placeholder="ชื่อลักษณะการสูญเสียอวัยวะ" style="width:500px;" />
    </td>
</tr>
<tr>
  <th>เงินรายเดือน<span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
    <input type="text" class="form-control numInt" id="exampleInputName2" placeholder="จำนวนเงิน" style="width:250px;" />
    บาท</div></td>
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