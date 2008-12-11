<?php
		include("parts/db/tlhcConnect.php");
?>
<!-- START THE FORM -->

<form action="Output.php" method="POST" name="basic" target="topOne" id="slapIt" onSubmit="MM_changeProp('slapIt','','fontCase','capitalize','FORM')">
<table id="recInput">
<tr><td>
<?php
	include('inDescript2.php'); 
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
</form>