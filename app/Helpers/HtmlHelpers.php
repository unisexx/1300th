<?php
if(!function_exists('ticket_status_img'))
{
	function ticket_status_img($id)
	{
    switch ($id) {
      case 1:
        return '<img class="vtip" src="images/clock1.png" width="25" height="25" title="รอแจ้งผู้รับผิดชอบ">';
        break;
      case 2:
        return '<img class="vtip" src="images/clock2.png" width="25" height="25" title="พิจารณาการช่วยเหลือ">';
        break;
      case 3:
        return '<img class="vtip" src="images/clock3.png" width="25" height="25" title="ส่งต่อพื้นที่">';
        break;
      case 4:
        return '<img class="vtip" src="images/clock4.png" width="25" height="25" title="รายงานการช่วยเหลือ">';
        break;
      case 5:
        return '<img class="vtip" src="images/clock5.png" width="25" height="25" title="ช่วยเหลือเรียบร้อย">';
        break;
      case 6:
        return '<img class="vtip" src="images/clock6.png" width="25" height="25" title="ปัญหายุติแล้ว">';
        break;
      default:
        # code...
        break;
    }
	}
}
