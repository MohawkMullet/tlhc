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
