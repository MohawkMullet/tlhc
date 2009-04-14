<?php
if (isset($_POST['sideBar2'])) {

	echo "<span class=\"greyFontSmaller\">Artist or Song Info:<br /> $info</span>";
} else {
if (isset($_POST['sideBar3'])) {

<?php
$info = $_POST['sideBar2'];
if ($info == "")
{
echo "\n";
}
else 

{
if ($info != "Paste extra info here and provide link below") 
{
	echo "<span class=\"greyFontSmaller\">Artist or Song Info:<br /> $info</span>";
}	
	}
?>
<?php
$info3 = $_POST['sideBar3'];
if ($info3 == "")
{
echo "\n";
}
else 

{
if ($info3 != "Paste extra info here and provide link below") 
{
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