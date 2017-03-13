<h3>ตำบล</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
 <input type="text" class="form-control " id="exampleInputName2" placeholder="ชื่อตำบล" style="width:350px;">
 <select name="lunch" class="selectpicker" id="lunch2" title="ทุกจังหวัด" data-live-search="true">
    <option>ทุกจังหวัด</option>
    <option>กรุงเทพฯ</option>
    <option>กระบี่</option>
  </select>
  <select name="lunch" class="selectpicker" id="lunch2" title="ทุกอำเภอ" data-live-search="true">
    <option>ทุกอำเภอ</option>
  </select>
 <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>
</div>
</div>

<div id="btnBox">
  <input type="button" title="เพิ่มตำบล" value="เพิ่มตำบล" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-warning vtip" />
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
  <th>รหัส</th>
  <th>ชื่อตำบล</th>
  <th>อำเภอ</th>
  <th>จังหวัด</th>
  <th>เปิดใช้งาน</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>&nbsp;</td>
  <td>คลองท่อมเหนือ</td>
  <td>คลองท่อม</td>
  <td>กระบี่</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>&nbsp;</td>
  <td>คลองท่อมใต้</td>
  <td>คลองท่อม</td>
  <td>กระบี่</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>&nbsp;</td>
  <td>คลองพน</td>
  <td>คลองท่อม</td>
  <td>กระบี่</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>4</td>
  <td>&nbsp;</td>
  <td>พรุดินนา</td>
  <td>คลองท่อม</td>
  <td>กระบี่</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>5</td>
  <td>&nbsp;</td>
  <td>ลำทับ</td>
  <td>คลองท่อม</td>
  <td>กระบี่</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
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