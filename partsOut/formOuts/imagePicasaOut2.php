<!-- This is where you accept the url to the image and past some html around it.  This page will then be included in the template you have chosen --><?php
$picasaImage = $_POST['picasaImage'];
if ($picasaImage != "") {
		echo "<span class=\"imgB\" align=\"right\" title=\"$picasaImage\"><img src=\"$picasaImage\" width=\"300\" ></span>";
			}
?>