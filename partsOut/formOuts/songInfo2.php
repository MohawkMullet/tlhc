
<?php
$info = $_POST['sideBar2'];
if ($info == "")
{
echo "<div style=\"float:left;\" align=\"center\"><img alt=\"Hep Vinyl\" title=\"$storeName\" src=\"$logo\" align=top height=\"32\" width=\"48\"></div>";
}
else 

{
	echo "<span class=\"greyFontSmaller\">Artist or Song Info:<br /> $info</span>";
	
	}
?>

<?php
$link = 	  $_POST['link'];		  
$linkText = 	  $_POST['linkText'];
	if ($link != "") {		  	  
	print "<br /><br /><a href=\"$link\">$linkText</a>";
	}
?>