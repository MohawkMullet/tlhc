<div id="brandItem" style="float:left; clear:both;">
<?php
			$Brand = $_POST['brand'];
			$Brand =ucwords(strtoupper($Brand));
				if ($Brand != "") {
				echo "<span class=\"greyFont\">OEM:</span>";
				echo "<span class=\"blueFontBold\"><strong>$Brand</strong></span>&nbsp;&nbsp;";
				}
?>
<?php
			$itemNum = $_POST['itemNum'];
			$itemNum =ucwords(strtoupper($itemNum));
				if ($itemNum != "") {
					echo "<span class=\"greyFont\">Item:</span>";
					echo "<span class=\"blueFontBold\"><strong>$itemNum</strong></span>";
				}
?>
</div>
