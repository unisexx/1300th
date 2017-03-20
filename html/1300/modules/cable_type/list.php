<h3>ประเภทสาย</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
 <input type="text" class="form-control " id="exampleInputName2" placeholder="ชื่อประเภทสาย" style="width:350px;">
 <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>
</div>
</div>
<div id="btnBox">
  <input type="button" title="เพิ่มประเภทสาย" value="เพิ่มประเภทสาย" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-success vtip" />
</div>

<div class="paginationTG">
	<ul>
    <li style="margin-right:10px;">หน้าที่</li>
	<li class="currentpage">1</li><li ><a href=''>2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">4</a></li>
	<li><a href="">5</a></li>
	<li><a href="">6</a></li>
	<li><a href="">7</a></li> . . . <li ><a href="">19</a></li>
	<li><a href="">20</a></li><li ><a href="">21</a></li>
	</ul>
</div>

<table class="tblist">
<tr>
  <th>ลำดับ</th>
  <th>ชื่อประเภทสาย</th>
  <th>เปิดใช้งาน</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>ปัญหาใหม่</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>ติดตามปัญหา (เดิม)</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>โทรผิด</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>4</td>
  <td>ก่อกวน</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>5</td>
  <td>สอบถามข้อมูล</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
</tr>
<tr>
  <td>ุ6</td>
  <td>ให้ข้อคิดเห็น</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
</tr>
</table>

<div class="paginationTG">
	<ul>
    <li style="margin-right:10px;">หน้าที่</li>
	<li class="currentpage">1</li><li ><a href=''>2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">4</a></li>
	<li><a href="">5</a></li>
	<li><a href="">6</a></li>
	<li><a href="">7</a></li> . . . <li ><a href="">19</a></li>
	<li><a href="">20</a></li><li ><a href="">21</a></li>
  </ul>
</div>