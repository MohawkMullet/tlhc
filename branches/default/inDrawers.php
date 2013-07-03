<?php
include("parts/db/tlhcConnect.php");
?>
<form action="Output.php" method="POST" target="right" id="slapIt" onSubmit="MM_changeProp('slapIt','','fontCase','capitalize','FORM')">
<table width="392" border="0" cellpadding="5" cellspacing="0" class="formTable" id="recInput">
<tr>
<td width="70" class="LeftLabelColTop">&nbsp;</td>
<td width="294" class="labelTableTop" align="center">Add to Drawers</td>
</tr>
<tr>
<td class="RightHandLabels">Open Sesame:</td>
<td class="inputBGstyle"> 
<div class="CollapsiblePanelTabFake">Add reusable comments to Comment Drawers:</div>
<?php
include("partsIn/panelsComms.php");
?>
</td>
</tr>
<tr>
<td class="bottomLeftLabel">LOAD:</td>
<td class="bottomRow">         
<?php
include("partsIn/buttonsNoClass.php");
?>
</td>
</tr>
</table>
</form>
