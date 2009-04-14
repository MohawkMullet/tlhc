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
		if ( ! empty( $_POST["VinylSelector"])) {
		$VinylSelector = $_POST["VinylSelector"];
//		print "\n\n";
		foreach ( $VinylSelector as $valueVinyl ) {
		print "<span class=\"multicomms\">$valueVinyl</span><br>\n";                                             
		}
		}
?>
<?php
		if ( ! empty( $_POST["LabelSelector"])) {
		$LabelSelector = $_POST["LabelSelector"];
//		print "\n\n";
		foreach ( $LabelSelector as $valueLabels ) {
		print "<span class=\"multicomms\">Label $valueLabels</span><br>\n";                                             
		}
		}
?> 
<?php
		if ( ! empty( $_POST["PromoSelector"])) {
		$PromoSelector = $_POST["PromoSelector"];
//		print "\n\n";
		foreach ( $PromoSelector as $valuePromo ) {
		print "<span class=\"multicomms\">Labeled $valuePromo</span><br>\n";                                             
		}
		}
?>
<?php
		if ( ! empty( $_POST["SleeveSelector"])) {
		$SleeveSelector = $_POST["SleeveSelector"];
//		print "\n\n";
		foreach ( $SleeveSelector as $valueSleeve ) {
		print "<span class=\"multicomms\">Sleeve $valueSleeve</span><br>\n";                                             
		}
		}
?>
<?php
		if ( ! empty( $_POST["MiscSelector"])) {
		$MiscSelector = $_POST["MiscSelector"];
//		print "\n\n";
		foreach ( $MiscSelector as $valueMisc ) {
		print "<span class=\"multicomms\">$valueMisc</span><br>\n";                                             
		}
		}
?>
<?php
/**
*
* 	PRINT OUT THE COMMENTS FROM THE commsSolPaint table
*
*/
		if ( ! empty( $_POST["SolPaintSelector"])) {
		$SolPaintSelector = $_POST["SolPaintSelector"];
		foreach ( $SolPaintSelector as $valueSolPaint ) {
		print "<span class=\"multicomms\">$valueSolPaint</span><br>\n";                                             
		}
		}
?>
<?php
/**
*
* 	PRINT OUT THE COMMENTS FROM THE commsSolMisc table
*
*/
		if ( ! empty( $_POST["SolMiscSelector"])) {
		$SolMiscSelector = $_POST["SolMiscSelector"];
		foreach ( $SolMiscSelector as $valueSolMisc ) {
		print "<span class=\"multicomms\">$valueSolMisc</span><br>\n";                                             
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