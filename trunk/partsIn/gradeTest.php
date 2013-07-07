<?php
include('../parts/config.php');
?>
<div id='NewDiv'>
<form id='showTheme' method='POST' name='showTheme'>
<fieldset class='pane33'><legend title='Choose a theme for the new listing'>
Listing Theme&nbsp;</legend>
<div id=radio>
<input type="radio" id="radio1" name="templateName" value='default' /><label for="default">Old</label>
<input type="radio" id="radio2" name="templateName" value='yellow' checked="checked" /><label for="yellow">Yellow & Orange</label>
<input type="radio" id="radio3" name="templateName" value='blue' /><label for="blue">Blue</label>
<input type="radio" id="radio3" name="templateName" value='orange' /><label for="orange">Green & Blue</label>
</div>
</form>
<input type='submit' name='go' id='go' value='Submit'></fieldset>
</form>
</div>

<hr>
<?php
echo "<div id='formUp'><h1>Show some fucking forms already</h1>";
echo "<form id='showTheme' method='POST' name='showTheme'>";
echo "<fieldset class='pane33'><legend title='Choose a theme for the new listing'>";
echo "Theme Color</legend>"; 
echo "<div id='radio'>";
echo "<input type='radio' id='radio1' name='templateName' value='default' /><label for='default'>Default</label>";
echo "<input type='radio' id='radio2' name='templateName' value='yellow' checked='checked' /><label for='yellow'>Yellow</label>";
echo "<input type='radio' id='radio3' name='templateName' value='blue' /><label for='blue'>Blue</label>";
echo "<input type='radio' id='radio4' name='templateName' value='orange' /><label for='orange'>Orange</label>";
echo "</div>";
echo "</form>";
echo "<input type='submit' label='ApplyNow' name='Now' id='ShowNow'></fieldset>";
echo "</form>";
echo "</div>";
?>
<hr>
<!-- <div id="dontSee"">
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
</div> -->

