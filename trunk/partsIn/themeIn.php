<!-- JULY 2013 A JQUERY THEMED THEME SELECTION CHECK BOXES -->
<?php
function selectTheme() {
echo "<div id='formUp'>";
echo "<form id='showTheme' method='POST' name='showTheme'>";
echo "<fieldset class='pane33'><legend title='Choose a theme for the new listing'>";
echo "Theme Color</legend>"; 
echo "<div id='radio' class='ui-buttonset'>";
echo "<input type='radio' id='radio1' name='templateName' value='default' /><label for='default'>Default</label>";
echo "<input type='radio' id='radio2' name='templateName' value='yellow' checked='checked' /><label for='yellow'>Yellow</label>";
echo "<input type='radio' id='radio3' name='templateName' value='blue' /><label for='blue'>Blue</label>";
echo "<input type='radio' id='radio4' name='templateName' value='orange' /><label for='orange'>Orange</label>";
echo "</div>";
echo "</form>";
//echo "<input type='submit' label='ApplyNow' name='Now' id='ShowNow'>";
echo "</fieldset>";
echo "</form>";
echo "</div>";
}
selectTheme();
?>
