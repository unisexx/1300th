<h3>ช่องทางรับเรื่อง</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
 <input type="text" class="form-control " id="exampleInputName2" placeholder="ชื่อช่องทางรับเรื่อง" style="width:350px;">
 <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>
</div>
</div>
<div id="btnBox">
  <input type="button" title="เพิ่มช่องทางรับเรื่อง" value="เพิ่มช่องทางรับเรื่อง" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-success vtip" />
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
  <th>ชื่อช่องทางรับแจ้ง</th>
  <th>เปิดใช้งาน</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>โทร 1300 (Call Center)</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>Website</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>Line</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>4</td>
  <td>Skype</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>5</td>
  <td>Facebook</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>6</td>
  <td>Email</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>7</td>
  <td>Walk-in (ติดต่อด้วยตนเอง)</td>
  <td class="odd"><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td class="odd"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>8</td>
  <td>Moblie APP หญิงไทย</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>9</td>
  <td>APP แสนรู้</td>
  <td class="odd"><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td class="odd"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" alt="" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>10</td>
  <td>ทีวี</td>
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