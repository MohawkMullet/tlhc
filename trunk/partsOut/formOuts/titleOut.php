<?php 
include('parts/db/rd2.php'); 
?>
<?php
$performer = $_POST['performer'];
$performer = ucwords(strtoupper($performer));
//echo "$performer &nbsp;";
$titler = $_POST['titler'];
$titler = ucwords(strtolower($titler));										
//echo $titler;
$listingMast = "$performer $titler";
echo $listingMast;
?>
<?php
//if ($_SERVER['REQUEST_METHOD'] == "POST") {
//$performer = $_POST['performer'];
//$performer = ucwords(strtoupper($performer));
$sql = "INSERT INTO `45artist` (performer) VALUES ('$performer')";
$result = mysql_db_query($db,"$sql",$link);
		if (!$result) {
    		echo("ERROR: " . mysql_error() . "\n$sql\n"); 
			}
//		}
$sql2 = "INSERT INTO `45info2` (45title) VALUES ('$titler')";
$result2 = mysql_db_query($db,"$sql2",$link);
		if (!$result2) {
    		echo("ERROR: " . mysql_error() . "\n$sql2\n"); 
			}
?>
