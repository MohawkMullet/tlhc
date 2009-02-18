<div align="left">
		<?php
		$templateName = $_POST["templateName"];
		$gradeQ = $_POST["gradeQ"];
			if ($templateName == "orange"){
			foreach ( $gradeQ as $valueG ) {
				echo "<span class=\"greyFont\">Grade:</span>";
				print "<span class=\"blueFontBold\"><strong>$valueG</strong></span>\n";
				echo "</span>";
				}
			} else {
			if ( ! empty( $gradeQ) ) {
			foreach ( $gradeQ as $valueG ) {
				echo "<span class=\"greyFont\"><a href=\"#grade\" style=\"text-decoration:none;\">Grade:</a></span>;";
				print "<span class=\"blueFontBold\"><strong>$valueG</strong></span>\n";
				echo "</span>";
				}
			}
		}
		?>
</div>