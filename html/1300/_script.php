<link rel="stylesheet" type="text/css" href="css/template.css"/>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->

<script src="js/jquery-min-1.11.3.js"></script>
<script src="js/jquery-ui-1.12.1.js"></script>
<link rel="stylesheet" href="css/jquery-ui-1.12.1.css">
<script type="text/javascript" src="js/cufon/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon/supermarket_400.font.js"></script>
<script type="text/javascript">
	Cufon.replace('h3');

</script>


<script src="js/jstree.min.js"></script>
<link rel="stylesheet" href="css/jstree.min.css" />
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />-->

<script>
  $(function () {
    // 6 create an instance when the DOM is ready
    $('#jstree').jstree();
    // 7 bind to events triggered on the tree
    $('#jstree').on("changed.jstree", function (e, data) {
      console.log(data.selected);
    });
    // 8 interact with the tree - either way is OK
    $('button').on('click', function () {
      $('#jstree').jstree(true).select_node('child_node_1');
      $('#jstree').jstree('select_node', 'child_node_1');
      $.jstree.reference('#jstree').select_node('child_node_1');
    });
  });
  </script>

<!-- Colorbox jquery -->
<script src="js/jquery.colorbox.js"></script>
<link media="screen" rel="stylesheet" href="css/colorbox.css" />
<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".inline").colorbox({inline:true, width:"95%"});
				$(".inline2").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
</script>


<!-- Tooltip jquery -->
<script type="text/javascript" src="js/vtip.js"></script>
<link rel="stylesheet" type="text/css" href="css/vtip.css" />

<!-- number format -->
<script type="text/javascript" src="js/jquery.number.js"></script>
<script type="text/javascript">
$(function(){
	$('input.numDecimal').number( true, 2 );
	$('input.numInt').number( true, 0 );
	
	$('input.numOnly').bind('keypress', function(e) {
    	return ( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57)) ? false : true ;
	});
});
</script>


<!-- Input format new -->
<script src="js/jquery.inputmask.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>



<!-- Input format -->
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
jQuery(function($){
   $(".fdate").mask("99/99/9999");
   $(".fmobile").mask("(999) 999-9999");
   $(".fnum").mask("999,999,999");
   $(".ftime").mask("99:99");
   $(".fid").mask("99-99-99999");
});
</script>





<!-- Listbox show/hide -->
<script type="text/javascript">
$(document).ready(function(){
	$(".boxDeptOUT").hide();
	$(".boxDeptInfo").hide();
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
			
			if($(this).attr("value")=="DeptIN"){
                $(".boxDeptIN").show();
				$(".boxDeptOUT").hide();
            }
            if($(this).attr("value")=="DeptOUT"){
                $(".boxDeptIN").hide();
				$(".boxDeptOUT").show();
            }
			
			if($(this).attr("value")=="DeptInfo"){
                $(".boxDeptInfo").show();
			 }
            if($(this).attr("value")=='Owner' || $(this).attr("value")== 'Goodman' || $(this).attr("value")== 'Family'){
                $(".boxDeptInfo").hide();
            }

			if($(this).attr("value")=='WrongCall' || $(this).attr("value")== 'Harry'){
                $(".boxNotWrongCall").hide();
			 }
            if($(this).attr("value")=='NewProblem' || $(this).attr("value")== 'OldProblem' || $(this).attr("value")== 'AskInfo' || $(this).attr("value")== 'Comment' ){
                $(".boxNotWrongCall").show();
            }
	
           
        });
    }).change();
});
</script>

<!-- Radio show/hide -->
<script type="text/javascript">
$(document).ready(function(){
	$(".boxStepEdu").hide();
	$(".boxEdu").hide();
	
    $('input[type="radio"]').click(function(){
		
		//personal/form 
        if($(this).attr("value")=="endEdo"){
			$(".boxStepEdu").show();
            $(".boxEdu").hide();	
			$(".boxLocationEdo").hide();
        }
		if($(this).attr("value")=="edoing"){
            $(".boxStepEdu").show();
            $(".boxEdu").show();
			$(".boxLocationEdo").show();
        }
		if($(this).attr("value")=="drop"){
            $(".boxStepEdu").hide();
            $(".boxEdu").hide();
			$(".boxLocationEdo").hide();
        }
		if($(this).attr("value")=="noEdo"){
            $(".boxStepEdu").hide();
            $(".boxEdu").hide();
			$(".boxLocationEdo").hide();
        }
		
		if($(this).attr("value")=="alive"){
            $(".boxDeadDate").hide();
        }
		if($(this).attr("value")=="dead"){
            $(".boxDeadDate").show();
        }
		
    });
});
</script>

<script>
  $( function() {
    var availableTags = [
      "สำนักงานรัฐมนตรี",
      "สำนักงานปลัดกระทรวง",
      "กองต่อต้านการค้ามนุษย์ [สป.]",
      "สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์จังหวัดกระบี่ [สป.]",
      "สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์จังหวัดกาญจนบุรี [สป.]",
      "กรมกิจการเด็ก",
      "กองคุ้มครองเด็กและเยาวชน [ดย.]",
      "กองส่งเสริมการพัฒนาและสวัสดิการเด็ก เยาวชน และครอบครัว [ดย.]",
      "ศูนย์อำนวยการรับเด็กเป็นบุตรบุญธรรม [ดย.]",
      "กรมกิจการผู้สูงอายุ",
      "กองส่งเสริมศักยภาพผู้สูงอายุ [ผส.]",
      "กองส่งเสริมสวัสดิการและคุ้มครองสิทธิผู้สูงอายุ [ผส.]",
      "กองบริหารกองทุนผู้สูงอายุ [ผส.]",
      "กรมกิจการสตรีและสถาบันครอบครัว",
      "กองส่งเสริมความเสมอภาคทางเพศ [กจ.]",
      "กองส่งเสริมสถาบันครอบครัว [กจ.]",
      "กองคุ้มครองและพัฒนาอาชีพ [กจ.]",
      "ศูนย์ปฏิบัติการกรมกิจการสตรีและสถาบันครอบครัว (ศปก.สค.) [กจ.]",
      "กรมพัฒนาสังคมและสวัสดิการ",
      "กองคุ้มครองสวัสดิการและเสริมสร้างคุณภาพชีวิต [พส.] ",
      "กรมส่งเสริมและพัฒนาคุณภาพชีวิตคนพิการ",
      "กองกองทุนและส่งเสริมและส่งเสริมความเสมอภาคคนพิการ [พก.]"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>




<!-- bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<link rel="stylesheet" href="css/bootstrap-select.css">
<script src="js/bootstrap-select.js"></script>









