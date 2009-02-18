<?php
	require_once("class.inputfilter_clean.php");
		$tags = array("a", "link");
		$attr = array("href", "star");
		$myFilter = new InputFilter($tags, $attr, 1, 1, 0);
		$result = $myFilter->process($_POST["picasaImage"]);	
			if ($result != "") {
		echo "<span class=\"imgB\" align=\"right\" title=\"$listingMast\">$result</span>";
		}
?>