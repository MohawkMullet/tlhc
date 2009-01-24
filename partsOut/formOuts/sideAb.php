<div align="left">
<?php
		$sideA = $_POST['sideA'];
		$sideA = ucwords(strtolower($sideA));
		if ($sideA != "") {
				echo "<span class=\"greyFont\">Side A: </span>";		
				echo "<span class=\"blueFontBold\"><strong>$sideA</strong></span>";
			}
?>
<?php
		$sideB = $_POST['sideB'];
		$sideB = ucwords(strtolower($sideB));
		if ($sideB == "Same") {
				echo "<br>";
				echo "<span class=\"greyFont\">Side B:&nbsp;</span>";	
				echo "<span class=\"blueFontBold\">same</span>";
			}
		else if ($sideB != "") {
				echo "<br>";
				echo "<span class=\"greyFont\">Side B:&nbsp;</span>";		
				echo "<span class=\"blueFontBold\"><strong>$sideB</strong></span>";
			}
?>
</div>   