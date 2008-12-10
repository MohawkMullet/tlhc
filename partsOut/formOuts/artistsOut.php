<?php
		$artists = $_POST['artists'];
		$artists = ucwords(strtolower($artists));
		if ($artists != "") {
				echo "<span class=\"greyFontLarge\">Artists:&nbsp;&nbsp;</span>";		
				echo "<span class=\"blueFont18\"><strong>$artists</strong></span>";
				echo "<br>";
				echo "<br>";
			}
?>