<?php
	require_once("class.inputfilter_clean.php");
		$tags = array("a", "link");
		$attr = array("href", "star");
		$myFilter = new InputFilter($tags, $attr, 1, 1, 0);
		$result = $myFilter->process($_POST["picasaImage"]);	
			if ($result != "") {
		echo "<div align=\"left\" style=\"float:right;\">";
		echo "<span class=\"imgB\" align=\"right\">$result</span>";
		echo "</div>";
		}
?>