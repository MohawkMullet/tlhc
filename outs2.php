
		<div id="accordion">
		
        			<div>

				<h3> <a href="#">Auction Listing Preview</a>
                </h3>
<div style="overflow-x: hidden; overflow-y:auto;">
<div style="width:830px; height: 540px; background:#FFFFFF;" align="center" class="ui-corner-all"><?php
$templateName = $_POST['templateName'];
//	echo $templateName;
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
?></div>
			</div>
			</div>
			
            <div>
				<h3><a href="#">Grab The Code Blocks</a></h3>
				<div style="padding-left:45px;">
<div style="float:left;"><form name="test2">
<a href="javascript:selectAll('test2.select2')" class="fg-button fg-button-icon-right2 ui-state-default ui-corner-all">
<span class="ui-icon ui-icon-circle-arrow-e"></span>Copy the Title&nbsp;&nbsp;</a>
&nbsp;&nbsp;<input class="ui-widget input" name="select2" type="text" value="<?php include('partsOut/formOuts/titleOut.php'); ?>" size="55">
</form></div>
<form name="test"><div style="float:left; clear:none; margin-left:5px; margin-top:4px;">
<a href="javascript:selectAll('test.select1')" class="fg-button fg-button-icon-left ui-state-default ui-corner-all" style="font-size:smaller;">
<span class="ui-icon ui-icon-circle-arrow-s"></span>Copy the Code&nbsp;&nbsp;</a><br />
</div><textarea class="ui-widget input ui-corner-all" name="select1" cols="100" rows="25" wrap="VIRTUAL">
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
			</div>

			<div>
				<h3><a href="#">TLhC Tools</a></h3>
				<div>
				<?php include('Output.php'); ?>
				</div>
			</div>
		</div>



