<h3>เรื่องรับแจ้ง</h3>
<div id="search">
<div id="searchBox">
<div class="form-inline">
   <input type="text" class="form-control fid" style="width:120px;" id="exampleInputName2" placeholder="รหัสเรื่อง"> <input type="text" class="form-control" style="width:370px;" id="exampleInputName2" placeholder="ชื่อผู้แจ้ง / ชื่อผู้รับแจ้ง / ชื่อผู้ขอรับการช่วยเหลือ / รายละเอียด ">
    <select name="select4" class="form-control" style="width:auto;">
      <option>+ สถานะ +</option>
      <option>รอแจ้งผู้รับผิดชอบ</option>
      <option>พิจารณาการช่วยเหลือ</option>
      <option>รายงานการช่วยเหลือ</option>
      <option>ส่งต่อพื้นที่</option>
      <option>ช่วยเหลือเรียบร้อย</option>
      <option>ปัญหายุติแล้ว</option>
    </select>
  
  <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button>
  <button class="btn btn-default" data-toggle="collapse" data-target="#boxAdvanceSearch"><img src="images/advancesearch.png" width="22" height="22" /> ค้นหาขั้นสูง</button>
  
  <div id="boxAdvanceSearch" class="collapse" style="margin-top:5px;"><!--<div class="collapse" id="boxAdvanceSearch">-->
  <fieldset style="border:1px solid #E5E5E5; padding:10px; margin-bottom:10px;">
  <legend style="margin:0; padding:0; font-size:14px;">กลุ่มเป้าหมายและปัญหา</legend>
        <select class="form-control">
          <option>+ กลุ่มเป้าหมาย +</option>
          <option>เด็ก</option>
          <option>เยาวชน</option>
          <option>ผู้ใหญ่</option>
          <option>ผู้สูงอายุ</option>
        </select>

        <select class="form-control">
          <option>+ ปัญหาหลัก +</option>
        </select>

        <select class="form-control">
          <option>+ ปัญหาย่อย 1 +</option>
        </select>
        
        <select class="form-control">
          <option>+ ปัญหาย่อย 2 +</option>
        </select>
        
        <select class="form-control">
          <option>+ ปัญหาย่อย 3 +</option>
        </select>
    </fieldset>

<fieldset style="border:1px solid #E5E5E5; padding:10px; margin-bottom:10px;">
  <legend style="margin:0; padding:0; font-size:14px;">สถานที่เกิดเหตุ</legend>
<input type="text" class="form-control" style="width:280px;" id="exampleInputName2" placeholder="สถานที่เกิดเหตุ">
  <select class="form-control">
   <option>+ ประเทศที่เกิดเหตุ +</option>
  </select>
  <select class="form-control">
   <option>+ จังหวัดที่เกิดเหตุ +</option>
  </select>
  <select class="form-control">
   <option>+ อำเภอที่เกิดเหตุ +</option>
  </select>
  <select class="form-control">
   <option>+ ตำบลที่เกิดเหตุ +</option>
  </select>
</fieldset>
  
<fieldset style="border:1px solid #E5E5E5; padding:10px; margin-bottom:10px;">
  <legend style="margin:0; padding:0; font-size:14px;">อื่นๆ</legend>
  <select class="form-control">
   <option>+ สถานะส่งต่อ +</option>
  </select>
  <select class="form-control">
   <option>+ ความเร่งด่วน +</option>
  </select>
  <select class="form-control">
   <option>+ ประเภทสาย +</option>
  </select>
  <select class="form-control">
   <option>+ ช่องทางรับเรื่อง +</option>
  </select>
  
  <div style="margin-top:10px;">
  <select class="form-control">
   <option>+ หน่วยงานส่งต่อ +</option>
  </select>
  <input type="text" class="form-control" style="width:280px;" id="exampleInputName2" placeholder="ชื่ือเจ้าหน้าที่รับเรื่องส่งต่อ">
  <input type="text" class="form-control" style="width:280px;" id="exampleInputName2" placeholder="ชื่อนักสังคมสงเคราะห์">
  </div>
</fieldset>

<fieldset style="border:1px solid #E5E5E5; padding:10px;">
  <legend style="margin:0; padding:0; font-size:14px;">วันเวลารับแจ้งเหตุ</legend>
  
    วันที่รับแจ้งเหตุ
    <input type="text" class="form-control fdate" id="exampleInputEmail2" value="" style="width:100px;"> 
    <img src="images/calendar.png" width="24" height="24" /> 
  
 เวลา
    <input type="text" class="form-control" id="exampleInputEmail2" value="" style="width:70px;"> น. <span style="margin:0 20px;">ถึง</span>
    
    <input type="text" class="form-control fdate" id="exampleInputEmail2" value="" style="width:100px;"> 
    <img src="images/calendar.png" width="24" height="24" /> 
  
 เวลา
    <input type="text" class="form-control" id="exampleInputEmail2" value="" style="width:70px;"> น. 

</fieldset>
  
  
  

  
  
  </div>
  
</div>



  
</div>
</div>

<div id="btnBox">
  <input type="button" title="เพิ่มเรื่องร้องเรียน" value="เพิ่มเรื่องร้องเรียน" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-success vtip" />
</div>

<div id="status">
<span><img src="images/clock1.png" width="25" height="25" /> รอแจ้งผู้รับผิดชอบ</span>
<span><img src="images/clock2.png" width="25" height="25" /> พิจารณาการช่วยเหลือ</span>
<span><img src="images/clock3.png" width="25" height="25" /> ส่งต่อพื้นที่</span>
<span><img src="images/clock4.png" width="25" height="25" /> รายงานการช่วยเหลือ</span>
<span><img src="images/clock5.png" width="25" height="25" /> ช่วยเหลือเรียบร้อย</span>
<span><img src="images/clock6.png" width="25" height="25" /> ปัญหายุติแล้ว</span>
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
  <th>รหัสเรื่อง</th>
  <th>วันเวลารับแจ้ง</th>
  <th>ความเร่งด่วน</th>
  <th>หมวดปัญหา</th>
  <th style="width:25%">รายละเอียด</th>
  <th>สถานะ</th>
  <th>ผู้แจ้ง</th>
  <th>ผู้รับแจ้ง</th>
  <th>ประเภทสาย</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>ุ17-01-00038</td>
  <td>24 มกราคม 2560 16:26</td>
  <td>ปกติ</td>
  <td><img src="images/givehelp.png" width="16" height="16" class="vtip" title="นายทรงพล อาริยวัฒน์" style="margin-bottom:5px;" /> ผู้ใหญ่ </td>
  <td>สอบถามเงินอุดหนุนเด็กแรกเกิด <br />
    (ปราจีนบุรี) </td>
  <td>
  <img src="images/clock1.png" width="25" height="25" class="vtip" title="รอแจ้งผู้รับผิดชอบ" />
  <!--<div class="statusWait">รอแจ้งผู้รับผิดชอบ</div>--></td>
  <td>นางสาว พวงผกา -</td>
  <td>    นางสาว วรรณภา ผลสุข<br />
    (ศูนย์ช่วยเหลือสังคม)</td>
  <td>ปัญหาใหม่</td>
  <td><img src="images/add_tag.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="เพิ่มรายการโดยอ้างอิงรายการนี้" /><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>17-01-00030</td>
  <td>18 มกราคม 2560 19:05</td>
  <td>ปกติ</td>
  <td><img src="images/givehelp.png" width="16" height="16" class="vtip" title="นายวันชัย  ตราชูธรรม" style="margin-bottom:5px;" /> ผู้ใหญ่<br /> <img src="images/givehelp.png" width="16" height="16" class="vtip" title="เด็กชายสมพร  สุขธรรมนิตย์"  style="margin-bottom:5px;"/> เด็ก</td>
  <td>ขอความช่วยเหลือต้องการนำเด็กชายธีรเชษฐ์ บุญรอด อายุ 9 ปี บุตรชาย เข้าสถานสงเคราะห์<br />
    (กรุงเทพมหานคร)</td>
  <td>
  <img src="images/clock2.png" width="25" height="25" class="vtip" title="พิจารณาการช่วยเหลือ" />
  <!--<div class="statusProcess">พิจารณาการช่วยเหลือ</div>--></td>
  <td>นาย ธนัฐวรรณ บุญรวด</td>
  <td>    นางสาว พัชรีย์ เพชร์ทอง<br />
    (ศูนย์ช่วยเหลือสังคม)</td>
  <td>ปัญหาใหม่</td>
  <td><img src="images/add_tag.png" alt="" width="24" height="24" class="vtip" style="margin-right:10px;" title="เพิ่มรายการโดยอ้างอิงรายการนี้" /><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>
  <img src="images/clock3.png" width="25" height="25" class="vtip" title="ส่งต่อพื้นที่" />
  <!--<div class="statusReport">รายงานการช่วยเหลือ</div>--></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><img src="images/add_tag.png" alt="" width="24" height="24" class="vtip" style="margin-right:10px;" title="เพิ่มรายการโดยอ้างอิงรายการนี้" /><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>4</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>
  <img src="images/clock4.png" width="25" height="25"  class="vtip" title="รายงานการช่วยเหลือ" />
  <!--<div class="statusSend">ส่งต่อพื้นที่</div>--></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><img src="images/add_tag.png" alt="" width="24" height="24" class="vtip" style="margin-right:10px;" title="เพิ่มรายการโดยอ้างอิงรายการนี้" /><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>5</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>
  <img src="images/clock5.png" width="25" height="25" class="vtip" title="ช่วยเหลือเรียบร้อย" />
  <!--<div class="statusHelped">ช่วยเหลือเรียบร้อย</div>--></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><img src="images/add_tag.png" alt="" width="24" height="24" class="vtip" style="margin-right:10px;" title="เพิ่มรายการโดยอ้างอิงรายการนี้" /><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>6</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>
  <img src="images/clock6.png" width="25" height="25" class="vtip" title="ปัญหายุติแล้ว"/>
  <!--<div class="statusComplete">ปัญหายุติแล้ว</div>--></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><img src="images/add_tag.png" alt="" width="24" height="24" class="vtip" style="margin-right:10px;" title="เพิ่มรายการโดยอ้างอิงรายการนี้" /><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>7</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>
  <img src="images/clock6.png" width="25" height="25" class="vtip" title="ปัญหายุติแล้ว" />
  <!--<div class="statusComplete">ปัญหายุติแล้ว</div>--></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td class="odd"><img src="images/add_tag.png" alt="" width="24" height="24" class="vtip" style="margin-right:10px;" title="เพิ่มรายการโดยอ้างอิงรายการนี้" /><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
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