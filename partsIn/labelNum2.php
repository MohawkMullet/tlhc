<fieldset class="insideFields"><legend>
<?php
if ( $tabName == "soldierTab") {
echo "Brand, Number";
echo "<a href=\"docs/index.php\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\">";
echo "<span class=\"ui-icon ui-icon-help\"></span>&nbsp;</a></legend>";
echo "<input name=\"Brand\" type=\"text\" class=\"ui-widget input defaultText\" id=\"Brand\" accesskey=\"l\" tabindex=\"5\" size=\"20\" title=\"Brand of Soldier\" />&nbsp;<input name=\"recNum\" type=\"text\" class=\"ui-widget input defaultText\" id=\"recNum\" tabindex=\"6\" size=\"6\" title=\"No.\" />";
} else {
echo "Record Label, Number, & Sleeve:&nbsp;";
echo "<a href=\"docs/index.php\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\">";
echo "<span class=\"ui-icon ui-icon-help\"></span>&nbsp;</a></legend>";
echo "<input name=\"Label\" type=\"text\" class=\"ui-widget input defaultText\" id=\"Label\" accesskey=\"l\" tabindex=\"5\" size=\"20\" title=\"Record Company Name\" />&nbsp;<input name=\"recNum\" type=\"text\" class=\"ui-widget input defaultText\" id=\"recNum\" tabindex=\"6\" size=\"6\" title=\"No.\" />";
echo "<Label title=\"Does this 45 still have the Original Record Company Paper Sleeve?  If yes check this box.  this is not for picture sleeves.\"><input name=\"origSleeve\" type=\"checkbox\" value=\"origSleeve\"  tabindex=\"7\" class=\"ui-widget input\">Orig Sleeve?</label>";
}
?>


</fieldset>