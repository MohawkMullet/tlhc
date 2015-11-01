<div id="mfgBox" style="float:left; clear:both;">
		<?php
				$mfg = $_POST['mfg'];
						$mfg = ucwords(strtoupper($mfg));
						if ($mfg != "") {
								echo "<br><span class=\"greyFont\">Chip MFG:&nbsp;&nbsp;</span>";		
								echo "<span class=\"blueFontBold\"><strong>$mfg</strong></span>";
				//				echo "<br>";
				//				echo "<br>";			
							}
		?>
</div>