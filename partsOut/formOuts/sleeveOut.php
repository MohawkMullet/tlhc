<?php
$origSleeve = $_POST["origSleeve"];
function paperSleeve() {
	global $origSleeve;
	global $Label;
	if ($origSleeve != ""){
	echo "<span class='mulitcomms'>Complete with orginal $Label paper sleeve</span>";
	}
}
paperSleeve();
?>
