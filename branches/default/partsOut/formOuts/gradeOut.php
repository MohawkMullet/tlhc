<div align="left">
		<?php
		$gradeQ = $_POST["gradeQ"];
			if ( ! empty( $gradeQ) ) {
			foreach ( $gradeQ as $valueG ) {
				echo "<span class=\"greyFont\"><a href=\"#grade\" style=\"text-decoration:none;\">Grade:</a></span>&nbsp;&nbsp;";
				print "<span class=\"blueFontBold\"><strong>$valueG</strong></span>\n";
				echo "</span>";
				}
			}
		?>
</div>