<?php
		if ( ! empty( $_POST["cats"])) {
		$cats = $_POST["cats"];
		print "\n\n";
		foreach ( $cats as $howMany ) {
//		echo "<span class=multicomms>$howMany</span><br>\n";                                             
		}
		}
	if ($howMany == "5cats") {
//	echo "Its 5!!";
	include('partsOut/cats/5cats.php');
	}
	if ($howMany == "10cats") {
//	echo "Its 10!!";
	include('partsOut/cats/10cats.php');
	}
	if ($howMany == "20cats") {
//	echo "Its 20!!";
	include('partsOut/cats/20cats.php');
	}
?>