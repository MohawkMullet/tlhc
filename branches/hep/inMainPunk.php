<?php
		include("parts/db/tlhcConnect.php");
?>
<!-- START THE FORM -->

<form action="Output.php" method="POST" name="basic" target="topOne" id="slapIt" onSubmit="MM_changeProp('slapIt','','fontCase','capitalize','FORM')">
<table id="recInput" bgcolor="#B69A67" style="margin-left:-2px;">
<tr><td>
<?php
	include('inDescriptPunk.php'); 
?>
<?php
		include("partsIn/checkBoxes.php");
?>    
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
</form>ss