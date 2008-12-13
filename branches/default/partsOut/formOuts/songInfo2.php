
<?php
$info = $_POST['sideBar2'];
if ($info == "")
{
echo "<div style=\"float:left;\" align=\"center\">";
echo	"$storeLogo";
echo	"</div><br>";
}
else 

{
	echo "<span class=\"greyFontSmaller\">Additional Information:<br /> $info</span>";
	
	}
?>
<br>
<?php
$link = 	  $_POST['link'];		  
$linkText = 	  $_POST['linkText'];
	if ($link != "") {		  	  
	print "<br /><br /><a href=\"$link\">$linkText</a>";
	}
?>