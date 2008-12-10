<?php

		$artists = $_POST['artists'];
			$artists = ucwords(strtolower($artists));
		$vinylSelector = $_POST["vinylSelector"];
				foreach ( $vinylSelector as $valueVinyl ) {
				}
		$labelSelector = $_POST["labelSelector"];
				foreach ( $labelSelector as $valueLabels ) {
				}
		$promoSelector = $_POST["promoSelector"];
				foreach ( $promoSelector as $valuePromo ) {
				}
		$miscSelector = $_POST["miscSelector"];
				foreach ( $miscSelector as $valueMisc ) {
				}
		$freeStyle = $_POST['freeStyle'];
		$gradeQ = $_POST["gradeQ"];
				foreach ( $gradeQ as $valueG ) {
				}
		$titler = $_POST['titler'];
			$titler = ucwords(strtolower($titler));	
		$Label = $_POST['Label'];
			$Label =ucwords(strtoupper($Label));
		$recNum = $_POST['recNum'];
			$recNum =ucwords(strtoupper($recNum));
		$notes = $_POST['notes'];
		$sideA = $_POST['sideA'];
			$sideA = ucwords(strtolower($sideA));
		$sideB = $_POST['sideB'];
			$sideB = ucwords(strtolower($sideB));
		$info = $_POST['sideBar2'];
		$link = 	  $_POST['link'];		  
		$linkText = 	  $_POST['linkText'];
		$picasaImage = $_POST['picasaImage'];


	$theGoods = array(
			"$titler", 
			"<br>$sideA<br>",
			"$sideB<br>",
			"$Label",
			"$recNum<br>",
			"$valueG<br>",
			"$valueVinyl<br>",
			"$valueLabels<br>",
			"$valuePromo<br>",
			"$valueMisc<br>",
			"$freeStyle<br>",
			"$notes<br>",
			"$info<br>",
			"$link<br>",
			"$linkText<br>",
			"$picasaImage<br>",
	);
?>