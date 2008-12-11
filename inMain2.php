<?php
		include("parts/db/tlhcConnect.php");
?>
<!-- START THE FORM -->

<form action="Output.php" method="POST" name="basic" target="topOne" id="slapIt" onSubmit="MM_changeProp('slapIt','','fontCase','capitalize','FORM')">
<table width="392" border="0" cellpadding="2" cellspacing="0" class="formTable" id="recInput">
<!-- <tr>
    <td width="70" class="LeftLabelColTop">&nbsp;</td>
    <td width="294" class="labelTableTop" align="center">
    <span class="versionNum">Standard 45 </span></td>
</tr> -->
<?php
//	echo	"<fieldset><legend>Description Input</legend>"; 
	include('inDescript.php'); 
//	echo	"</fieldset>";
?>
    <tr><td class="RightHandLabels">&nbsp;</td>
    <td class="inputBGstyle">
<?php
		include("partsIn/checkBoxes.php");
?>    
    </td></tr>
  <tr class="unnamed1">
    <td class="bottomLeftLabel">&nbsp;</td>
    <td class="bottomRow">          
<?php
		include("partsIn/buttonsNoClass.php");
?>
    </td>
  </tr>

</table>

<!-- SHOW THE COUNTDOWN LAYER -->
<div id="bombButtons">
<script>
		displaylimit("Input.slapIt.titler","titler",55)
</script>
</div>




</form>