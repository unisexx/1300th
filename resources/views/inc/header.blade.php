<!-- Fixed navbar -->

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="padding-top:10px;"><img src="images/logo-name.png" width="233" height="66" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          		<li><a href="ticket/form"><img src="images/add_ticket.png" width="16" height="16" /> เพิ่มเรื่อง</a></li>
          		<li><a href="ticket"><img src="images/help_ticket.png" width="16" height="16" /> เรื่องรับแจ้ง</a></li>

          </ul>

          <ul class="nav navbar-nav">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/report_ticket.png" width="16" height="16" /> รายงาน <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="report/r1">สถิติดำเนินงานตามกลุ่มเป้าหมาย</a></li>
                <li><a href="report/r2">จำนวนเรื่องจำแนกตามเขต/จังหวัด</a></li>
                <li><a href="report/r3">สถิติการดำเนินงานภาพรวม</a></li>
                <li><a href="report/r4">จำนวนเรื่องจำแนกตามสถานะ/จังหวัด</a></li>
                <li><a href="report/r5">รายงานการรับเรื่องของเจ้าหน้าที่</a></li>
                <li><a href="report/r6">สถิติการส่งต่อเรื่องร้องทุกข์</a></li>
                <li><a href="report/r7">การดำเนินงานจำแนกตามประเภทปัญหา</a></li>
                <li><a href="report/log">ประวัติการใช้งาน (Logfile)</a></li>
                </ul>
            </li>
          </ul>

         <ul class="nav navbar-nav navbar-right">
          	 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/setting_ticket.png" width="16" height="16" /> ตั้งค่าข้อมูลหลัก <span class="caret"></span></a>
              <ul class="dropdown-menu" style="height:auto; max-height:400px; overflow-x: hidden;">
                <li><a href="setting/user">ผู้ใช้งาน</a></li>
                <li><a href="setting/permission">สิทธิ์การช้งาน</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="setting/target">กลุ่มเป้าหมาย / ปัญหาหลัก / ปัญหาย่อย</a></li>
                <li><a href="setting/department">*กระทรวง / กรม / สำนัก/กอง</a></li>
                <li><a href="setting/dept_out">หน่วยงานภายนอก</a></li>
                <li><a href="setting/dept_out_type">ลักษณะหน่วยงานภายนอก</a></li>
                <li><a href="setting/country">*ประเทศ</a></li>
                <li><a href="setting/province">*จังหวัด/รัฐ</a></li>
                <li><a href="setting/amphoe">*อำเภอ</a></li>
                <li><a href="setting/tumbon">*ตำบล</a></li>
                <li><a href="setting/prefix">*คำนำหน้า</a></li>
                <li><a href="setting/gender">*เพศ</a></li>
                <li><a href="setting/religion">*ศาสนา</a></li>
                <li><a href="setting/nationality">*สัญชาติ</a></li>
                <li><a href="setting/race">เชื้อชาติ</a></li>
                <li><a href="setting/channel">ช่องทางรับแจ้ง</a></li>
                <li><a href="setting/dept_info">หน่วยงานที่แจ้ง</a></li>
                <li><a href="setting/career">อาชีพ</a></li>
                <li><a href="setting/marital_status">สถานภาพ</a></li>
                <li><a href="setting/cable_type">ประเภทสาย</a></li>
                <li><a href="setting/category_info">หมวดหมู่ผู้แจ้ง</a></li>
                <li><a href="setting/channel_know">ช่องทางรู้จัก 1300</a></li>
                <li><a href="setting/urgent">ระดับความเร่งด่วน</a></li>
                <li><a href="setting/doc_type">ประเภทเอกสาร</a></li>
                <li><a href="setting/position">ตำแหน่ง</a></li>
                <li><a href="setting/userservice_type">ประเภทผู้ใช้บริการ</a></li>
                <!-- <li><a href="setting/status">สถานะภาพ</a></li> -->
                <li><a href="setting/risk">การประเมินความเสี่ยง</a></li>
                <li><a href="setting/help">แนวทางการช่วยเหลือฯ</a></li>
              </ul>
            </li>
          <li><a href="user.php?act=form" class="vtip" title="นายเอกพินิจ แก้วเสนา"><img src="images/user_info.png" width="16" height="16" /></a></li>
            <li><a href="product.php"><img src="images/logout.png" width="16" height="16" class="vtip" title="ออกจากระบบ" /></a></li>
          </ul>

          <!--<ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="clear" style="margin-bottom:20px;"></div>
