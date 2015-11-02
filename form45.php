<?php
	$tabName ="45Tab";
	/**
	* this is the main form used to output the html
	* this document and all included in this package are licensed under the GPL
	**/
?>
<form action="right.php?showOut=True" method="POST" name="basic" target="mainFrame" id="slapIt">
<table width="410" id="recInput" style="margin-left:1px;">
<tr>
		<td>

<fieldset class="pane">
<div align="left">
  <legend title="Choose a theme for the new listing"><a href="#" class="fg-button fg-button-icon-solo delete" title="Close this section"><span class="ui-icon silk-icon-bomb"></span>&nbsp;</a>Listing Theme&nbsp;<a href="docs/templateDesign.php" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all" title="Change the Listing Design and Style"><span class="ui-icon ui-icon-key"></span>&nbsp;</a></legend>
</div>
<label><input class="ui-widget input" name="templateName" type="radio" value="default"/>Old</label>
    <label><input class="ui-widget input" name="templateName" type="radio" value="yellow" />Yellow & Orange</label>   
<label><input class="ui-widget input" name="templateName" type="radio" value="blue" />Blue</label>
    <label><input class="ui-widget input" name="templateName" type="radio" value="orange" checked/>Green & Blue</label>
</fieldset>
<?php
	include('partsIn/performerTitle2.php');
	include('partsIn/sideAb2.php');
	include('partsIn/labelNum2.php');
	include('partsIn/grade.php');
?> 
<fieldset><legend>Stored Comments:&nbsp;&nbsp;<span class="fg-toolbar"><a href='parts/midComms.php?showOut=45s' target='mainFrame' class='fg-button fg-button-icon-left ui-state-default ui-corner-all' title="show all comments"><span class='ui-icon ui-icon-document'></span>All</a><a href="partsIn/addCommentsEX.php?showOut=45s" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all" title="ADD COMMENTS"><span class="ui-icon ui-icon-circle-plus"></span>&nbsp;</a><a href="docs/reusableComms.php#adding" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all"><span class="ui-icon ui-icon-help"></span>&nbsp;</a></span>

</legend>
<?php
	include('partsIn/reusableComms45s.php');
?>
</fieldset>
<?php
	include('partsIn/songInfo.php');
	include("partsIn/imagePicasa2.php");
	include("partsIn/components2.php");
	include("partsIn/submit.php");
?>
		</td>
	</tr>
</table>
</form>
