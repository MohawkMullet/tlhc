<div id="upcBox" style="float:left; clear:both;">
<?php
$upc = $_POST['upc'];
if ($upc != "") {
				echo "<span class=\"greyFont\">UPC Bar Code #:</span>";
				print "<span class=\"blueFontBold\"><strong>$upc</strong></span>\n";
				echo "</span><br>";
			}
?>
</div>
