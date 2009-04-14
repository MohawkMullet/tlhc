<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('parts/config.php'); ?>
<link href="parts/style.css" rel="stylesheet" type="text/css" />
<title>TLHC v<?php	echo $version; ?>Output Page</title>
<link type="text/css" rel="stylesheet" href="parts/jquery/theme/ui.all.css" />
<script type="text/javascript" src="parts/jquery/jquery-1.3.2.js"></script>
<script type="text/javascript" src="parts/jquery/jquery-ui-1.7.1.js"></script>
 <script type="text/javascript">
	$(function(){
		//all hover and click logic for buttons
		$(".fg-button:not(.ui-state-disabled)")
		.hover(
			function(){ 
				$(this).addClass("ui-state-hover"); 
			},
			function(){ 
				$(this).removeClass("ui-state-hover"); 
			}
		)
		.mousedown(function(){
				$(this).parents('.fg-buttonset-single:first').find(".fg-button.ui-state-active").removeClass("ui-state-active");
				if( $(this).is('.ui-state-active.fg-button-toggleable, .fg-buttonset-multi .ui-state-active') ){ $(this).removeClass("ui-state-active"); }
				else { $(this).addClass("ui-state-active"); }	
		})
		.mouseup(function(){
			if(! $(this).is('.fg-button-toggleable, .fg-buttonset-single .fg-button,  .fg-buttonset-multi .fg-button') ){
				$(this).removeClass("ui-state-active");
			}
		});
	});
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="margin-top: 25;">
<div id="Layer1" style="position:absolute; left:226px; top:578px; width:305px; height:63px; z-index:3; overflow: scroll; visibility: hidden;">
</div>
<script language="Javascript">
						function selectAll(theField) {
						var tempval=eval("document."+theField)
						tempval.focus()
						tempval.select()
						}
</script>
<div class="ui-state-highlight style="width:750px">
<form name="test2">
<a href="javascript:selectAll('test2.select2')" class="fg-button fg-button-icon-left ui-state-default ui-corner-all"><span class="ui-icon ui-icon-scissors"></span>Copy the Title</a><br />
<input class="ui-widget input" name="select2" type="text" value="<?php include('partsOut/formOuts/titleOut.php'); ?>" size="55">
</form>
<form name="test">
<a href="javascript:selectAll('test.select1')" class="fg-button fg-button-icon-right ui-state-default ui-corner-all"><span class="ui-icon ui-icon-copy"></span>Copy the Code&nbsp;&nbsp;</a><br />
<textarea class="ui-widget input" name="select1" cols="100" rows="4" wrap="VIRTUAL">
<?php
$templateName = $_POST['templateName'];
	if ($templateName == "default") {
		include('partsOut/preD.php');
	}
	if ($templateName == "blue") {
		include('partsOut/preB.php');
	}
	if ($templateName == "orange") {
		include('partsOut/preO.php');
	}
	if ($templateName == "yellow") {
		include('partsOut/preY.php');
	}	
	if ($templateName == "soldier") {
		include('partsOut/preS.php');
	}		
?>
</textarea>
</form>
</div>
<span class="fg-toolbar">
<?php
echo $loadRight;
echo $searchButton;
echo $picButton;
echo $helpButton;
?>
</span>
<div class="ui-state-active" style="width: 880;">
<?php
	if ($templateName == "default") {
		include('partsOut/preD.php');
	}
	if ($templateName == "blue") {
		include('partsOut/preB.php');
	}
	if ($templateName == "orange") {
		include('partsOut/preO.php');
	}
	if ($templateName == "yellow") {
		include('partsOut/preY.php');
	}	
	if ($templateName == "soldier") {
		include('partsOut/preS.php');
	}		
?>
</div>
</body>
</html>
