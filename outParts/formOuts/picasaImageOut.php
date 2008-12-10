<?php
require_once("class.inputfilter_clean.php");
//$result = $_POST['picasaImage'];
$tags = array("a", "link");
$attr = array("href", "star");
$myFilter = new InputFilter($tags, $attr, 1, 1, 0);
	// process input
$result = $myFilter->process($_POST["picasaImage"]);	
if ($result != "") {
echo "<td style=\"border-top-width:0px; border-bottom-width:0px; border-left-width:0px; border-right-width:0px;\">";
echo "<span class=\"imgB\">$result</span>";
echo "</td>";
}
?>
<!-- comment out lines 2, 4, 5, 6, 8, 9 to get rid of the link stripping.  
Uncomment Line 3 for regular return of image input. -->