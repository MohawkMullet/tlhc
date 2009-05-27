<?php
	$tabName ="45Tab";
	/**
	* this is the main form used to output the html
	* this document and all included in this package are licensed under the GPL
	**/
?>
<?php
echo $themeChooser;
?>
<form action="right.php?showOut=True" method="POST" name="basic" target="mainFrame" id="iSaidMarch2">
<table width="410" id="recInput" style="margin-left:1px;">
<tr>
		<td>
<div id="showTheme2">
		<?php
//			echo $themeChooser;
			include('partsOut/formOuts/themeOut.php'); 
		?>
</div>
<?php
	include('partsIn/performerTitle2.php');
	include('partsIn/sideAb2.php');
	include('partsIn/labelNum2.php');
	include('partsIn/grade.php');
?> 
<fieldset>
<legend>Stored Comments:&nbsp;&nbsp;
<span class="fg-toolbar">
    <a href="javascript:animatedcollapse.toggle('showComms')" target='mainFrame' class='fg-button fg-button-icon-left ui-state-default ui-corner-all' title="show all the 45 comments">
    <span class='ui-icon ui-icon-document'></span>All</a>
    <a href="docs/reusableComms.php#adding" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all">
    <span class="ui-icon ui-icon-help"></span>&nbsp;</a>
</span>
</legend>
<?php
	include('partsIn/commsAjaxTabs.php');
?>
</fieldset>
<?php
//	include('partsIn/songInfo.php');
	include("partsIn/imagePicasa2.php");
//	include("partsIn/components2.php");
	include("partsIn/submit.php");
?>
		</td>
	</tr>
</table>
</form>
<div id="dialog" style="display:none"></div>
<?php include('partsIn/themeIn.php'); ?>