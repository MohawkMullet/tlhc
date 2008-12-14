<hr align="left" width="312px" size="5" />
<div align="left">
<?php
			$Label = $_POST['Label'];
			$Label =ucwords(strtoupper($Label));
				if ($Label != "") {
				echo "<span class=\"greyFont\">Brand:&nbsp;</span>";
				echo "<span class=\"blueFontBold\"><strong>$Label</strong></span>";
				}
?>
<?php
			$recNum = $_POST['recNum'];
			$recNum =ucwords(strtoupper($recNum));
				if ($recNum != "NO.") {
					echo "<span class=\"greyFont\">&nbsp;&nbsp;Model No.&nbsp;</span>";
					echo "<span class=\"blueFontBold\"><strong>$recNum</strong></span>";
				}
?>
</div>
<hr align="left" width="312px" size="5" />