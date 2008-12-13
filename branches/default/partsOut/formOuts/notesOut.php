<?php
$notes = $_POST['notes'];
if ($notes != "") {
echo "<br><div class=\"greyFontSmall\"><a href=\"#comments\" style=\"text-decoration:none;\">Notes:&nbsp;&nbsp;</a>";
echo $notes;
echo "</div>";
}
?>
     