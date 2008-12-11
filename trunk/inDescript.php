
<?php 
$emptyRow = "<tr><td class=\"RightHandLabels\">&nbsp;</td><td class=\"inputBGstyle\">";
$emptyRowEnd = "</td></tr>";
?>
<div id="setfield"><fieldset><legend>Description</legend>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
<?php
		echo $emptyRow;
		include('partsIn/performerTitle.php');
		echo $emptyRowEnd;
?>	
<?php
		include('partsIn/AnB.php');
?>
<?php
		include('partsIn/LblNoSlvIN.php');
?>
<?php
		echo $emptyRow;
		include('partsIn/gradeRadios.php');
		echo $emptyRowEnd;
?>
<?php
	echo $emptyRow;
	echo	"<div class=\"CollapsiblePanelTabFake\">comment drawers</div>";
	include("partsIn/panels.php");
	echo $emptyRowEnd;
?>
<?php
		include("partsIn/abrvs.php");
?>
<?php
		include("partsIn/sideBar.php");
?>
<?php
		include("partsIn/linkboxes.php");
?>
<?php
		include("partsIn/picasaImage.php");
?>
</table></fieldset>
</div>