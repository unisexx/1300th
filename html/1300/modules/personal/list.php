<h3>ข้อมูลบุคคล</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
  <div class="col-xs-4">
    <input type="text" class="form-control " id="exampleInputName2" placeholder="เลขบัตรประชาชน / ชื่อ-สกุล">
  </div>
  <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>

  
</div>
</div>
<div id="btnBox">
  <input type="button" title="เพิ่มบุคคล" value="เพิ่มบุคคล" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-warning vtip" />
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
  <th>คำนำหน้า</th>
  <th>ชื่อ-สกุล</th>
  <th>เลขบัตรประชาชน</th>
  <th>วัน/เดือน/ปีเกิด</th>
  <th>ที่อยู่</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>นาย </td>
  <td>มาหามะสุกรี	มูซอ<br /></td>
  <td>1 9612 00010 72 8</td>
  <td>06/06/2529</td>
  <td>เลขที่	9 หมู่ 4 ซอย - ถนน -<br />
ตำบลคลองใหม่่	อำเภอยะรัง	จังหวัดปัตตานี</td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>น.ส.</td>
  <td> ฟารีดะห์	คาเร็ง</td>
  <td>1 9410 00083 65 9</td>
  <td>20/08/2528</td>
  <td>เลขที่	9 หมู่ 4 ซอย - ถนน -<br />
    ตำบลคลองใหม่่	อำเภอยะรัง	จังหวัดปัตตานี</td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
</tr>
<tr>
  <td>3</td>
  <td>น.ส.</td>
  <td> ศศิภา  อิทธิพลานุคุปต์<br /></td>
  <td>3 9098 00375 61 5</td>
  <td>10/05/2529</td>
  <td>เลขที่	23 หมู่ - ซอย 5 ถนนประชายินดี <br />
    ตำบลหาดใหญ่	อำเภอหาดใหญ่	จังหวัดสงขลา</td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
</tr>
<tr class="odd">
  <td>4</td>
  <td>นาย</td>
  <td> รอมลี	ดายะ</td>
  <td>3 9409 00302 90 5</td>
  <td>29/08/2511</td>
  <td>เลขที่ 7/1	หมู่ 2	ซอย - ถนน - <br />
    ตำบลบางเขา	อำเภอหนองจิก	จังหวัดปัตตานี</td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
</tr>
<tr>
  <td>5</td>
  <td>ส.ท.</td>
  <td>วัชรินทร์	อินต๊ะมา</td>
  <td>1 8206 00040 21 7</td>
  <td>16/03/2532</td>
  <td>เลขที่ 58/6		หมู่ 1	ซอย - ถนน - 	<br />
    ตำบลบางวัน	อำเภอคุระบุรี	จังหวัดพังงา</td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>6</td>
  <td>พลทหาร</td>
  <td>ปรีชา	เปรมปรี</td>
  <td>1 8699 00155 12 0</td>
  <td>12/11/2534</td>
  <td>เลขที่ 193		หมู่ 1	ซอย - ถนน - 	<br />
    ตำบลวังใหม่	อำเภอเมือง	จังหวัดชุมพร</td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>7</td>
  <td>นาย</td>
  <td>มะสุกรี เจ๊ะอูมาร์</td>
  <td>1 9410 00257 80 1</td>
  <td>11/01/2540</td>
  <td>เลขที่ 78/2	หมู่ 1		ซอย - ถนน - 	<br />
    ตำบลกระโด	อำเภอยะรัง	จังหวัดปัตตานี</td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /> <img src="images/remove.png" width="32" height="32" class="vtip" title="ลบรายการนี้"  /></td>
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