<?php
		include("parts/db/tlhcConnect.php");
?>
<!-- START THE FORM -->
<form action="Output.php" method="POST" name="basic" target="mainFrame" id="slapIt" onSubmit="MM_changeProp('slapIt','','fontCase','capitalize','FORM')">
<table bgcolor="#006699" class="brow" id="recInput" style="margin-left:4px;">
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
<div id="bombButtons" title="this shows how many characters you have left.  warning broken">
<script>
		displaylimit("Input.slapIt.titler","titler",55)
</script>
</div>
</form>