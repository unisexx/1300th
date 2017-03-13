<? include "include/config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
<? include '_meta.php'?>
<? include '_script.php'?>
</head>

<body>
<? include '_header.php'?>
<div id="page">


<? switch(@$_GET['act'])
	{
			case 'query':
				include "modules/ticket/query.php";
			break;
			case 'form':
				include "modules/ticket/form.php";
			break;
			case 'print1':
				include "modules/ticket/print1.php";
			break;
			case 'print2':
				include "modules/ticket/print2.php";
			break;
			default :
				include "modules/ticket/list.php";
 		    break;
	}
?>

</div><!--page-->
<? include '_script_foot.php'?>
</body>
</html>