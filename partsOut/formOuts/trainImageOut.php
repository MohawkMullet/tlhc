<?php
$picasaImage = $_POST['picasaImage'];
$listingMast = $_POST['listingMast'];

?>
<?php
//echo $tPic;
?>
<?php 
//	echo "<img src=\"$picasaImage\" />";
	echo "<span class=\"imgB\" align=\"center\" title=\"$listingMast\"><img src=\"$picasaImage\" style=\"overflow:hidden;\" max-width=\"320px\" max-height=\"320px\" /></span>";
?>