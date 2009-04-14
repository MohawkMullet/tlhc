<?php
	$tabName ="soldierTab";
	/**
	* this is the main form used to output the html
	* this document and all included in this package are licensed under the GPL
	**/
?>
<form action="Output.php" method="POST" name="basic" target="mainFrame" id="slapIt">
<table width="410" id="recInput" style="margin-left:1px;">
<tr>
		<td>

<input type="hidden" name= "templateName" value="soldier">
<?php
	include('partsIn/solTitle.php');
//	include('partsIn/sideAb2.php');
	include('partsIn/labelNum2.php');
	include('partsIn/howMany.php');
?> 
<fieldset><legend>Stored Comments:&nbsp;&nbsp;<span class="fg-toolbar">
<a href='../parts/midComms.php?soldierDB=soldierShow' target='mainFrame' class='fg-button fg-button-icon-left ui-state-default ui-corner-all' title="Show the Soldier comments">
<span class='ui-icon ui-icon-newwin'></span>Show All</a>
<a href="partsIn/addComments.php?soldierDB=soldierAdd" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all" title="ADD COMMENTS to the Soldier Databases">
<span class="ui-icon ui-icon-circle-plus"></span>&nbsp;</a>
<a href="docs/reusableComms.php#adding" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all">
<span class="ui-icon ui-icon-help"></span>&nbsp;</a></span>

</legend>
<?php
	include('partsIn/reusableComms3.php');
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
