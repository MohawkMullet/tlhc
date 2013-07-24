<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('parts/config.php'); ?>
<link href="parts/style.css" rel="stylesheet" type="text/css" />
<title>TLHC v<?php	echo $version; ?>Output Page</title>
<link type="text/css" rel="stylesheet" href="parts/jquery/jquery-ui/css/theme/jquery-ui-1.7.1.custom.css" />
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
<script language="Javascript">
						function selectAll(theField) {
						var tempval=eval("document."+theField)
						tempval.focus()
						tempval.select()
						}
</script>
<?php
$showOut = $_GET['showOut'];
//echo $showOut;
?>

<div class="ui-widget-content ui-state-selected" style="width:650px; padding:8px; position: relative;" align="center">
<div style="float:left; clear:right;"><form name="test2">
<a href="javascript:selectAll('test2.select2')" class="fg-button fg-button-icon-right2 ui-state-default ui-corner-all">
<span class="ui-icon ui-icon-circle-arrow-e"></span>Copy the Title&nbsp;&nbsp;</a>
&nbsp;&nbsp;<input class="ui-widget input" name="select2" type="text" value="<?php include('partsOut/formOuts/titleOut.php'); ?>" size="55">
</form></div>
<form name="test"><div style="float:left; clear:none; margin-left:2px; margin-top:2px;">
<a href="javascript:selectAll('test.select1')" class="fg-button fg-button-icon-left ui-state-default ui-corner-all" style="font-size:smaller;">
<span class="ui-icon ui-icon-circle-arrow-s"></span>Copy the Code&nbsp;&nbsp;</a><br />
</div><textarea class="ui-widget input" name="select1" cols="110" rows="2" wrap="VIRTUAL">
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

<div style="width: 800;" class='ui-widget ui-widget-content ui-corner ui-corner-all'>
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
