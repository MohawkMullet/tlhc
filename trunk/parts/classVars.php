<?php
class tlhcForms {
		var $artists = $_POST['artists'];
		var $artists = ucwords(strtolower($artists));
		var $vinylSelector = $_POST["vinylSelector"];
				foreach ( $vinylSelector as $valueVinyl ) {
				}
		var $labelSelector = $_POST["labelSelector"];
				foreach ( $labelSelector as $valueLabels ) {
				}
		var $promoSelector = $_POST["promoSelector"];
				foreach ( $promoSelector as $valuePromo ) {
				}
		var $miscSelector = $_POST["miscSelector"];
				foreach ( $miscSelector as $valueMisc ) {
				}
		var $sleeveSelector = $_POST["sleeveSelector"];
				foreach ( $sleeveSelector as $valueSleeve ) {
				}
		var $freeStyle = $_POST['freeStyle'];
		var $gradeQ = $_POST["gradeQ"];
				foreach ( $gradeQ as $valueG ) {
				}
		var $performer = $_POST['performer'];
		var $performer = ucwords(strtoupper($performer));
//echo "$performer &nbsp;";
		var $titler = $_POST['titler'];
		var $titler = ucwords(strtolower($titler));										
//echo $titler;
		var $listingMast = "$performer $titler";
//echo $listingMast;
		var $Label = $_POST['Label'];
		var $Label =ucwords(strtoupper($Label));
		var $recNum = $_POST['recNum'];
		var $recNum =ucwords(strtoupper($recNum));
		var $notes = $_POST['notes'];
		var $sideA = $_POST['sideA'];
		var $sideA = ucwords(strtolower($sideA));
		var $sideB = $_POST['sideB'];
		var $sideB = ucwords(strtolower($sideB));
		var $info = $_POST['sideBar2'];
		var $link = 	  $_POST['link'];		  
		var $linkText = 	  $_POST['linkText'];
		var $picasaImage = $_POST['picasaImage'];
}
?>
