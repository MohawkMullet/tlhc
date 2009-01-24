<?php
$artists = $_POST['artists'];
		$artists = ucwords(strtoupper($artists));
		if ($artists != "") {
				echo "<br><span class=\"greyFontLarge\">Artists:&nbsp;&nbsp;</span>";		
				echo "<span class=\"blueFont18\"><strong>$artists</strong></span>";
				echo "<br>";
				echo "<br>";			
			}
?>