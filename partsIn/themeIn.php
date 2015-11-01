<div id="dontSee" style="display:inline;">
<?php
function selectTheme() {
echo "<div id='AddNewCom'>";
echo "<form id='showTheme' method='POST' name='showTheme'>";
echo "<fieldset class='pane'><legend title='Choose a theme for the new listing'>";
echo "Listing Theme&nbsp;</legend>";
echo "<label><input class='ui-widget input' name='templateName' type='radio' value='default'/>Old</label>";
echo "<label><input class='ui-widget input' name='templateName' type='radio' value='yellow'/>Yellow & Orange</label>";
echo "<label><input class='ui-widget input' name='templateName' type='radio' value='blue' />Blue</label>";
echo "<label><input class='ui-widget input' name='templateName' type='radio' value='orange' />Green & Blue</label>";
echo "<input type='submit' name='go' id='go' value='Submit'></fieldset>";
echo "</form>";
echo "</div>";
}
selectTheme();
?>
</div>
