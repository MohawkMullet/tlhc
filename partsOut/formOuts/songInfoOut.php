<?php
if (isset($_POST['sideBar2'])) {
	$info = $_POST['sideBar2'];
	echo "<span class=\"greyFontSmaller\">Artist or Song Info:<br /> $info</span>";
} else {
if (isset($_POST['sideBar3'])) {
	$info3 = $_POST['sideBar3'];
	echo "<span class=\"greyFontSmaller\">Item Information:<br /> $info3</span>";
	}	
}
?>
<?php
$link = 	  $_POST['link'];		  
$linkText = 	  $_POST['linkText'];
	if ($link != "http:// address here") {		  	  
	print "<br /><br /><a href=\"$link\">$linkText</a>";
	}
?>