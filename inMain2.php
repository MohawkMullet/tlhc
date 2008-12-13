<?php
		include("parts/db/tlhcConnect.php");
?>
<!-- START THE FORM -->
<style type="text/css">
<!--
.brow {
	border-bottom-width: 10px;
	border-bottom-style: double;
	border-bottom-color: #333333;
}
-->
</style>


<form action="Output.php" method="POST" name="basic" target="topOne" id="slapIt" onSubmit="MM_changeProp('slapIt','','fontCase','capitalize','FORM')">
<table bgcolor="#9e9e9e" class="brow" id="recInput" style="margin-left:4px;">
<tr><td><div align="center">Default Listing Form</div></td></tr>
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