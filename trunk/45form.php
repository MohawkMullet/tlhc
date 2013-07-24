<?php
	$tabName ="45Tab";
	/**
	* THIS DOCUMENT IS JUST AN INCLUDE SCRIPT FOR THE 45 LISTING FORM
	* this is the main form used to output the html
	* this document and all included in this package are licensed under the GPL
	**/
?>
<!-- <form action="partsOut/sepStyle.php" method="POST" name="basic" target="mainFrame" id="slapIt"> -->
<form action="right.php?showOut=True" method="POST" name="basic" target="mainFrame" id="slapIt">
<table width="410" id="recInput" style="margin-left:1px;">
<tr>
		<td>

<?php
	include('partsIn/themeIn3.php');
	include("partsIn/imagePicasa2.php");
	include('partsIn/performerTitle2.php');
	include('partsIn/sideAb2.php');
	include('partsIn/labelNum2.php');
	include('partsIn/grade.php');
?> 
<fieldset><legend>Stored Comments:&nbsp;&nbsp;<span class="fg-toolbar">
<a href='parts/midComms.php' target='mainFrame' class='fg-button fg-button-icon-left ui-state-default ui-corner-all' title="show all comments">
<span class='ui-icon ui-icon-document'></span>All</a>
<a href="partsIn/addCommentsEX.php" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all" title="ADD COMMENTS">
<span class="ui-icon ui-icon-circle-plus"></span>&nbsp;</a>
<a href="docs/reusableComms.php#adding" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all">
<span class="ui-icon ui-icon-help"></span>&nbsp;</a></span>

</legend><?php
	include('partsIn/reusableComms2.php');
?>
</fieldset>
<?php
	include('partsIn/songInfo.php');
	include("partsIn/components2.php");
	include("partsIn/submit.php");
?>
		</td>
	</tr>
</table>
</form>
