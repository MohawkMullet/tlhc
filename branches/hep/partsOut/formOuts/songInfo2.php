
<?php
$info = $_POST['sideBar2'];
if ($info == "")
{
echo "<div style=\"float:left;\" align=\"center\"><img alt=\"Hep Vinyl\" src=\"http://lh6.ggpht.com/_W_e1PG0tXUk/STT6iOiFxsI/AAAAAAAAAH4/mJEonzm0ob0/s144/preview_32x32.png\" align=top height=\"32\" width=\"32\"></div>";
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