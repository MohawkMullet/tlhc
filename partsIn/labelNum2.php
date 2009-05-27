<fieldset class="insideFields">

<?php
if ( $tabName == "soldierTab") {
echo "<legend>Brand, Number:&nbsp;&nbsp;";
echo "$helpButton</legend>";
echo "<input name=\"Brand\" type=\"text\" class=\"ui-widget input defaultText\" id=\"Brand\" accesskey=\"l\" tabindex=\"5\" size=\"20\" title=\"Brand of Soldier\" />&nbsp;<input name=\"recNum\" type=\"text\" class=\"ui-widget input defaultText\" id=\"recNum\" tabindex=\"6\" size=\"6\" title=\"No.\" />";
} else {
echo "<legend>Record Label, Number, & Sleeve:&nbsp;";
echo "</legend>";
echo "<input name=\"Label\" type=\"text\" class=\"ui-widget input defaultText\" id=\"Label\" accesskey=\"l\" tabindex=\"5\" size=\"20\" title=\"Record Company Name\" />&nbsp;<input name=\"recNum\" type=\"text\" class=\"ui-widget input defaultText\" id=\"recNum\" tabindex=\"6\" size=\"6\" title=\"No.\" />";
echo "<Label title=\"Does this 45 still have the Original Record Company Paper Sleeve?  If yes check this box.  this is not for picture sleeves.\"><input name=\"origSleeve\" type=\"checkbox\" value=\"origSleeve\"  tabindex=\"7\" class=\"ui-widget input\">Orig Sleeve?</label>";
}
?>
</fieldset>