
<?php 
$emptyRow = "<tr><td class=\"RightHandLabels\">&nbsp;</td><td class=\"inputBGstyle\">";
$emptyRowEnd = "</td></tr>";
?>
<div id="setfield"><fieldset><legend>Description</legend>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
<tr><td>
<?php
//		echo $emptyRow;
		include('partsIn/performerTitle2.php');
//		echo $emptyRowEnd;
?>	
<?php
		include('partsIn/AnB2.php');
?>
<?php
		include('partsIn/LblNoSlvIN2.php');
?>
<?php
//		echo $emptyRow;
		include('partsIn/gradeRadios.php');
//		echo $emptyRowEnd;
?>
<?php
//	echo $emptyRow;
	echo	"<div class=\"CollapsiblePanelTabFake\">comment drawers</div>";
	include("partsIn/panels.php");
//	echo $emptyRowEnd;
?>
<?php
		include("partsIn/abrvs2.php");
?>
<?php
		include("partsIn/sideBar2.php");
?>
<?php
		include("partsIn/linkboxes2.php");
?>
<?php
		include("partsIn/picasaImage2.php");
?>
</td></tr>
</table></fieldset>
</div>