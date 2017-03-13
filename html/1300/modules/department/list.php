<h3>กระทรวง / กรม / สำนัก/กอง / กลุ่ม/ฝ่าย</h3>

<div style="margin-bottom:20px;">
<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/dept_ministry.png"/> กระทรวง</span>
<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/dept_department.png"/> กรม</span>
<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/dept_bureau.png"/> สำนัก/กอง</span>

<span style="border:1px dotted #999; display:inline-block; height:35px; padding:5px; margin-right:10px;"><img src="images/dept_group.png" alt=""/> กลุ่ม/ฝ่าย</span></div>

<div id="btnBox">
  <input type="button" title="เพิ่มกระทรวง" value="เพิ่มกระทรวง" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=form'" class="btn btn-success vtip" />
</div>

<div id="jstree">
    <!-- in this example the tree is populated from inline HTML -->
    <ul>
      <li class="jstree-open" data-jstree='{"icon":"images/dept_ministry.png"}'>[06] กระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์  
        <img src="images/add_ticket.png" width="16" height="16" style="margin-left:50px;" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=add'" class="vtip" title="เพิ่มกรม" /> / 
        <img src="images/edit2.png" width="16" height="16"  onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=edit'"  class="vtip" title="แก้ไขกระทรวงนี้" /> / 
        <img src="images/remove2.png" width="16" height="16" />
        <ul>
        <li class="jstree-open" data-jstree='{"icon":"images/dept_department.png"}'>[06101] สำนักงานรัฐมนตรี (สร.) 
        <img src="images/add_ticket.png" width="16" height="16" style="margin-left:50px;" onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=add'" class="vtip" title="เพิ่มสำนัก/กอง" /> / 
        <img src="images/edit2.png" width="16" height="16"  onclick="document.location='<?=basename($_SERVER['PHP_SELF'])?>?act=edit'"  class="vtip" title="แก้ไขกรมนี้" /> / 
        <img src="images/remove2.png" width="16" height="16" />
        </li>
        <li class="jstree-open" data-jstree='{"icon":"images/dept_department.png"}'>[06102] สำนักงานปลัดกระทรวง (สป.)
          <ul>
          	  <li data-jstree='{"icon":"images/dept_bureau.png"}'>[06102026] สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์จังหวัดกระบี่</li>	
              <li data-jstree='{"icon":"images/dept_bureau.png"}'>[06102027] สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์จังหวัดกาญจนบุรี</li>
       	  </ul>     
        </li>
        <li class="jstree-open" data-jstree='{"icon":"images/dept_department.png"}'>[06103] กรมกิจการเด็กและเยาวชน
        	 <ul>
          	  <li class="jstree-open" data-jstree='{"icon":"images/dept_bureau.png"}'>[06103005] กองคุ้มครองเด็กและเยาวชน
              	<ul>
                  <li data-jstree='{"icon":"images/dept_group.png"}'>[06103005007] บ้านพักเด็กและครอบครัวจังหวัดกระบี่</li>	
                  <li data-jstree='{"icon":"images/dept_group.png"}'>[06103005008] บ้านพักเด็กและครอบครัวจังหวัดกาญจนบุรี</li>
              	</ul> 
              </li>	
              <li class="jstree-open" data-jstree='{"icon":"images/dept_bureau.png"}'>[06103006] กองส่งเสริมการพัฒนาและสวัสดิการเด็ก เยาวชน และครอบครัว
              	<ul>
                  <li data-jstree='{"icon":"images/dept_group.png"}'>[06103006008] สถานแรกรับเด็กหญิงบ้านธัญญพร</li>	
                  <li data-jstree='{"icon":"images/dept_group.png"}'>[06103006009] สถานสงเคราะห์เยาวชนมูลนิธิมหาราช</li>
                  <li data-jstree='{"icon":"images/dept_group.png"}'>[06103006019] สถานพัฒนาและฟื้นฟูเด็ก จังหวัดลำปาง</li>
              	</ul> 
              </li>
       	  </ul>  
        </li>
        <li data-jstree='{"icon":"images/dept_department.png"}'>[06104] กรมกิจการผู้สูงอายุ</li>
        <li data-jstree='{"icon":"images/dept_department.png"}'>[06105] กรมกิจการสตรีและสถาบันครอบครัว</li>
        <li data-jstree='{"icon":"images/dept_department.png"}'>[06106] กรมพัฒนาสังคมและสวัสดิการ</li>
        <li data-jstree='{"icon":"images/dept_department.png"}'>[06107] กรมส่งเสริมและพัฒนาคุณภาพชีวิตคนพิการ</li>
        </ul>
      </li>      
    </ul>
</div>