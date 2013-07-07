<html><head>
<?php
include('parts/config.php');
?>
<!-- THESE ARE THE LATEST JQUERY FILES -->
<script src="docs/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
<script src="docs/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
<link href="docs/jquery-ui-1.10.3.custom/css/july12/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script>
	$(function() {
		$( "#radio" ).buttonset();
	});
	</script>
		<script>
	$(function() {
		$( "#radio" ).buttonset();
	});
	</script>
	</head>
<body>
<?php
function selectTheme() {
//echo "<div id='formUp'>";
//echo "<form id='showTheme' method='POST' name='showTheme'>";
//echo "<fieldset><legend title='Choose a theme for the new listing'>";
//echo "Theme Color</legend>"; 
echo "<div id='radioNoMo'>";
echo "<input type='radio' id='radio1' name='templateName' value='default' /><label for='default'>Default</label>";
echo "<input type='radio' id='radio2' name='templateName' value='yellow' checked='checked' /><label for='yellow'>Yellow</label>";
echo "<input type='radio' id='radio3' name='templateName' value='blue' /><label for='blue'>Blue</label>";
echo "<input type='radio' id='radio4' name='templateName' value='orange' /><label for='orange'>Orange</label>";
echo "</div>";
//echo "</form>";
echo "<input type='submit' label='ApplyNow' name='Now' id='ShowNow'>";
//echo "</fieldset>";
echo "</form>";
//echo "</div>";
}
selectTheme();
?>
<form>
<fieldset><legend title="Choose A New Theme">Choose Theme</legend>
	<div id="radio">
		<input type="radio" id="Default" name="radio" /><label for="Default">Default</label>
		<input type="radio" id="Yellow" name="radio"/><label for="Yellow">Yellow</label>
		<input type="radio" id="Blue" name="radio" checked="checked"  /><label for="Blue">Blue</label>
		<input type="radio" id="Green" name="orange"/><label for="Green">Green</label>
	</div>
</form>
</fieldset>

<div class="demo-description">
<p>A set of three radio buttons transformed into a button set.</p>
</div>
</body>
</html>