<?php 
include('../../parts/db/rd2.php'); 
?>
<?php
$performer = $_POST['performer'];
$performer = ucwords(strtoupper($performer));				
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

?>
