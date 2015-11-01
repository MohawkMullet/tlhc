<table width="350" border="3" cellspacing="3" cellpadding="3" style="float:left; clear:both; border:groove; border-width:medium;">
  <tr>
    <td>
<?php
function showImage() {
	require_once("class.inputfilter_clean.php");
		$tags = array("a", "link");
		$attr = array("href", "star");
		$myFilter = new InputFilter($tags, $attr, 1, 1, 0);
		$result = $myFilter->process($_POST["picasaImage"]);	
			if ($result != "") {
		echo "<span class=\"imgB\" align=\"center\" title=\"$listingMast\"><img src=\"$result\" width=\"320px\" height=\"320px\" /></span>";
		}
	}
showImage();
?>
</td>
  </tr>
</table>