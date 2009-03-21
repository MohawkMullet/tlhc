<?php
/*
TL HTML Cheater is Copyright 2008 Damian C. Kelly.  mohawkdigital@gmail.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation,  version 3 of the License, or any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
ok
You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.  
*/
?>



<?php
		if ( ! empty( $_POST["vinylSelector"])) {
		$vinylSelector = $_POST["vinylSelector"];
//		print "\n\n";
		foreach ( $vinylSelector as $valueVinyl ) {
		print "<span class=\"multicomms\">$valueVinyl</span><br>\n";                                             
		}
		}
?>
<?php
		if ( ! empty( $_POST["labelSelector"])) {
		$labelSelector = $_POST["labelSelector"];
//		print "\n\n";
		foreach ( $labelSelector as $valueLabels ) {
		print "<span class=\"multicomms\">Label $valueLabels</span><br>\n";                                             
		}
		}
?> 
<?php
		if ( ! empty( $_POST["promoSelector"])) {
		$promoSelector = $_POST["promoSelector"];
//		print "\n\n";
		foreach ( $promoSelector as $valuePromo ) {
		print "<span class=\"multicomms\">Labeled $valuePromo</span><br>\n";                                             
		}
		}
?>
<?php
		if ( ! empty( $_POST["miscSelector"])) {
		$miscSelector = $_POST["miscSelector"];
//		print "\n\n";
		foreach ( $miscSelector as $valueMisc ) {
		print "<span class=\"multicomms\">$valueMisc</span><br>\n";                                             
		}
		}
?>

<?php
$freeStyle = $_POST['freeStyle'];
if ($freeStyle != "") {
	echo "<span class=\"multicomms\">$freeStyle</span><br>\n";
	}
?>
<?php
$origSleeve = $_POST['origSleeve'];
if ($origSleeve != "") {
	echo "<span class=\"multicomms\">Complete with original $Label paper sleeve</span><br>\n";
	}
?>
<?php
		if ( ! empty( $_POST["sleeveSelector"])) {
		$sleeveSelector = $_POST["sleeveSelector"];
//		print "\n\n";
		foreach ( $sleeveSelector as $valueSleeve ) {
		print "<span class=\"multicomms\">Sleeve $valueSleeve</span><br>\n";                                             
		}
		}
?>