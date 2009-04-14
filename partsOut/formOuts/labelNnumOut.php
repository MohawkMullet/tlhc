<hr align="left" width="312px" size="5" />
<div align="left">
<?php
			$Label = $_POST['Label'];
			$Label =ucwords(strtoupper($Label));
				if ($Label != "") {
				echo "<span class=\"greyFont\">Label:</span>";
				echo "<span class=\"blueFontBold\"><strong>$Label</strong></span>";
				}
?>
<?php
			$Brand = $_POST['Brand'];
			$Brand =ucwords(strtoupper($Brand));
				if ($Brand != "") {
				echo "<span class=\"greyFont\">Brand:</span>";
				echo "<span class=\"blueFontBold\"><strong>$Brand</strong></span>";
				}
?>
<?php
			$recNum = $_POST['recNum'];
			$recNum =ucwords(strtoupper($recNum));
				if ($recNum != "NO.") {
					echo "<span class=\"greyFont\">&nbsp;No.</span>";
					echo "<span class=\"blueFontBold\"><strong>$recNum</strong></span>";
				}
?>
</div>
<hr align="left" width="312px" size="5" />