<?php
$origBox = $_POST['origBox'];
if ($origBox != "") {
	echo "<span class=\"multicomms\">Complete with original $brand box.</span><br>\n";
	}
?>
<?php
$origIns = $_POST['origIns'];
if ($origIns != "") {
	echo "<span class=\"multicomms\">Complete with original $mfg instruction sheet.</span><br>\n";
	}
?>