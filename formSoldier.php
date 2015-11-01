<?php
	$tabName ="soldierTab";
	/**
	* this is the main form used to output the html
	* this document and all included in this package are licensed under the GPL
	**/
?>
<form action="right.php?showOut=True" method="POST" name="formSoldier" target="mainFrame" id="soldierForms">
<table width="400" id="recInput" style="margin-left:1px;">
<tr>
		<td>

<input type="hidden" name= "templateName" value="soldier">
<?php
	include('partsIn/solTitle.php');
//	include('partsIn/sideAb2.php');
	include('partsIn/labelNum2.php');
	include('partsIn/howMany.php');
?> 
<fieldset style="margin-top:0; margin-bottom:0;"><legend>Stored Comments:&nbsp;&nbsp;<span class="fg-toolbar">
<a href="javascript:animatedcollapse.toggle('showComms2')" target='mainFrame' class='fg-button fg-button-icon-left ui-state-default ui-corner-all' title="Show the Soldier comments">
<span class='ui-icon ui-icon-newwin'></span>Show All</a>
<?php
echo $addCommsButton2;
echo $helpButton;
?>
</legend>
<?php
//	include('partsIn/reusableCommsSoldiers.php');
?>
</fieldset>
<?php
	include('partsIn/songInfo.php');
	include("partsIn/imagePicasa2.php");
//	include("partsIn/components2.php");
	include("partsIn/submit.php");
?>
<input type="hidden" name= "boxes2" value="boxes2">
		</td>
	</tr>
</table>
</form>
