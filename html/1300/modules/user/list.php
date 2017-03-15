<h3>ผู้ใช้งาน</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
    <input type="text" class="form-control" style="width:350px;" id="exampleInputName2" placeholder="ชื่อ - สกุล">
  
  
  <select id="lunch" class="selectpicker" data-live-search="true" title="ตำแหน่ง">
    	<option style="font-weight:700;">- ทุกตำแหน่ง -</option>
        <option>Hotline</option>
        <option>นักสังคมสงเคราะห์</option>
        <option>นักพัฒนาสังคม</option>
        <option>นักสังคมสงเคราะห์ปฏิบัติการ</option>
        <option>นักพัฒนาสังคมปฏิบัติการ</option>
      </select>
      
      <select id="first-disabled" class="selectpicker" data-hide-disabled="true" data-live-search="true"  title="หน่วยงาน">
      <option style="font-weight:700;">- ทุกหน่วยงาน -</option>
      <option>ศูนย์ช่วยเหลือสังคม</option>
    <optgroup disabled="disabled" label="disabled">
      <option></option>
    </optgroup>
    <optgroup label="สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์">
      <option>สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์จังหวัดนนทบุรี</option>
      <option>สำนักงานพัฒนาสังคมและความมั่นคงของมนุษ์จังหวัดปทุมธานี</option>
    </optgroup>
    <optgroup label="บ้านพักเด็กและครอบครัว">
      <option>บ้านพักเด็กและครอบครัวจังหวัดนนทบุรี</option>
      <option>บ้านพักเด็กและครอบครัวจังหวัดปทุมธานี</option>
    </optgroup>
    <optgroup label="ศูนย์คุ้มครองคนไร้ที่พึ่ง">
      <option>ศูนย์คุ้มครองคนไร้ที่พึ่งจังหวัดนนทบุรี</option>
      <option>ศูนย์คุ้มครองคนไร้ที่พึ่งจังหวัดปทุมธานี</option>
    </optgroup>

  </select>
  
  <select name="select4" class="form-control" style="width:auto;" title="สิทธิ์การใช้งาน">
      <option style="font-weight:700;">- ทุกสิทธิ์การใช้งาน -</option>
      <option>SuperAdmin</option>
      <option>Executive</option>
      <option>User</option>
    </select>
      
      <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
</form>

  
</div>
</div>
<div id="btnBox">
  <input type="button" title="เพิ่มผู้ใช้งาน" value="เพิ่มผู้ใช้งาน" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-warning vtip" />
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
  <th align="left">ลำดับ</th>
  <th align="left">ชื่อ-สกุลผู้ใช้งาน</th>
  <th align="left">ตำแหน่ง</th>
  <th align="left">หน่วยงาน</th>
  <th align="left">สิทธิ์การใช้งาน</th>
  <th align="left">เปิดใช้งาน</th>
  <th align="left">จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>นาย เอกพินิจ แก้วเสนา</td>
  <td>นักพัฒนาสังคมชำนาญการ</td>
  <td>ศูนย์ช่วยเหลือสังคม</td>
  <td>SuperAdmin</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td align="left">นางสาว วิชุดา สมบูรณ์บัติ</td>
  <td class="odd cursor">นักพัฒนาสังคมชำนาญการพิเศษ</td>
  <td class="odd cursor">ศูนย์ช่วยเหลือสังคม</td>
  <td class="odd cursor">Executive</td>
  <td class="odd cursor"><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td align="left">นาย สุภวัฏ เนรา</td>
  <td>Hotline</td>
  <td><span class="odd cursor">ศูนย์ช่วยเหลือสังคม</span></td>
  <td>Call Center (Hotline)</td>
  <td><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td class="odd cursor"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>4</td>
  <td align="left">นางสาว สุภัสรา คงแก้ว</td>
  <td class="odd cursor">นักสังคมสงเคราะห์ปฏิบัติการ</td>
  <td class="odd cursor">สำนักงานพัฒนาสังคมและความมั่นคงของมนุษ์จังหวัดนนทบุรี </td>
  <td class="odd cursor">นักสังคมสงเคราะห์ฯ</td>
  <td class="odd cursor"><img src="images/icon_checkbox.png" width="24" height="24" /></td>
  <td><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>5</td>
  <td align="left" class="odd">นาย ศุธินัย มีทรัพย์</td>
  <td>นักวิเคราะห์นโยบายและแผนปฏิบัติการ</td>
  <td>บ้านพักเด็กและครอบครัวจังหวัดชุมพร</td>
  <td><span class="odd cursor">หน่วยงานจังหวัด</span></td>
  <td><span class="odd cursor"><img src="images/icon_checkbox.png" width="24" height="24" /></span></td>
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