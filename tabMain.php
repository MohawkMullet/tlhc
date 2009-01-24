<?php
	include("parts/db/tlhcConnect.php");
	$tabName ="mainTab";
?>
<form action="OutputT.php" method="POST" name="basic" target="mainFrame" id="slapIt" onSubmit="MM_changeProp('slapIt','','fontCase','capitalize','FORM')">
<table class="brow" id="recInput" style="margin-left:4px;">
	<tr>
		<td>
			<?php
				include('partsIn/template.php');
				include('inDescript2.php'); 
				include("partsIn/checkBoxes.php");
				include("partsIn/buttonsNoClass.php");
			?>
		</td>
	</tr>
</table>
<div id="bombButtons" title="this shows how many characters you have left.  warning broken">
	<script>
		displaylimit("Input.slapIt.titler","titler",55)
	</script>
</div>
</form>