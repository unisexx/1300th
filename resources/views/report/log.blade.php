@extends('layout/default')

@section('content')


<h3>ประวัติการใช้งาน</h3>
<div id="search">
<div id="searchBox">
<form class="form-inline">
  <input name="input" class="form-control" type="text" style="width:350px;" placeholder="ชื่อ-สกุลผู้ใช้งาน/ IP Address" />
  วันที่
  <input name="input2" class="form-control" type="text" style="width:90px;" />
  <img src="images/calendar.png" width="24" height="24" /> -
  <input name="input3" class="form-control" type="text" style="width:90px;" />
  <img src="images/calendar.png" alt="" width="24" height="24" />
<button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />Search</button>
  </form>
</div>
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
  <th align="left">วันเวลาใช้งาน</th>
  <th align="left">ชื่อ - สกุล ผู้ใช้งาน</th>
  <th align="left">รายละเอียด</th>
  <th align="left">IP Address</th>
  </tr>
<tr class="odd">
  <td>1</td>
  <td nowrap="nowrap">16/09/2559 12:30</td>
  <td nowrap="nowrap">ผู้ดูแลระบบ</td>
  <td>เพิ่ม ข้อมูลบุคคล (นางสาว ศศิภา อิทธิพลานุคุปต์)</td>
  <td>3.88.19.231</td>
  </tr>
<tr>
  <td>2</td>
  <td nowrap="nowrap" class="odd">16/09/2559 12:30</td>
  <td nowrap="nowrap" class="odd">ผู้ดูแลระบบ</td>
  <td class="odd">เพิ่ม ข้อมูลระดับการศึกษา (ก่อนวัยเรียน)</td>
  <td class="odd">3.88.19.231</td>
  </tr>
<tr>
  <td class="odd">3</td>
  <td nowrap="nowrap" class="odd">16/09/2559 12:30</td>
  <td nowrap="nowrap" class="odd">ผู้ดูแลระบบ</td>
  <td class="odd">เพิ่ม ข้อมูลอาชีพ (ว่างงาน)</td>
  <td class="odd">3.88.19.231</td>
  </tr>
<tr class="odd">
  <td>4</td>
  <td nowrap="nowrap">16/09/2559 10:10</td>
  <td nowrap="nowrap">ผู้ดูแลระบบ</td>
  <td>ล็อกอิน</td>
  <td>3.88.19.231</td>
  </tr>
<tr>
  <td class="odd">5</td>
  <td nowrap="nowrap">15/01/2559 14:20</td>
  <td nowrap="nowrap">เจ้าหน้าที่จังหวัดสงขลา</td>
  <td>แก้ไข คำขอผู้ได้รับผลกระทบ (60/0002)</td>
  <td>1.10.194.123</td>
  </tr>
<tr class="odd">
  <td>6</td>
  <td align="left">15/01/2559 14:20</td>
  <td>เจ้าหน้าที่จังหวัดสงขลา</td>
  <td>ล็อกอิน</td>
  <td>1.10.194.123</td>
  </tr>
<tr>
  <td class="odd">7</td>
  <td align="left">&nbsp;</td>
  <td align="left" width="503">&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
<tr class="odd">
  <td>8</td>
  <td align="left">&nbsp;</td>
  <td align="left">&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
<tr>
  <td class="odd">9</td>
  <td align="left">&nbsp;</td>
  <td align="left">&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
<tr class="odd">
  <td>10</td>
  <td align="left">&nbsp;</td>
  <td align="left">&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
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


@endsection
