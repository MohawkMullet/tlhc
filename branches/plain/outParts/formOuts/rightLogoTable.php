
<?php
$info = $_POST['sideBar2'];
if ($info == "")
{
echo "<div align=\"center\">$storeLogo</div>";
}
else 

{
	echo "<span class=\"greyFontSmaller\">Features or Specs<br /> $info</span>";
	
	}
?>

<?php
$link = 	  $_POST['link'];		  
$linkText = 	  $_POST['linkText'];
	if ($link != "") {		  	  
	print "<br /><br /><a href=\"$link\">$linkText</a>";
	}
?>