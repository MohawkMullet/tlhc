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
	</head>
<body>
<?php
function selectTheme() {
//echo "<div id='formUp'>";
//echo "<form id='showTheme' method='POST' name='showTheme'>";
echo "<fieldset class='pane33'><legend title='Choose a theme for the new listing'>";
echo "Theme Color</legend>"; 
echo "<div id='radio' class='ui-buttonset'>";
echo "<input type='radio' id='radio1' name='templateName' value='default' /><label for='default'>Default</label>";
echo "<input type='radio' id='radio2' name='templateName' value='yellow' checked='checked' /><label for='yellow'>Yellow</label>";
echo "<input type='radio' id='radio3' name='templateName' value='blue' /><label for='blue'>Blue</label>";
echo "<input type='radio' id='radio4' name='templateName' value='orange' /><label for='orange'>Orange</label>";
echo "</div>";
//echo "</form>";
//echo "<input type='submit' label='ApplyNow' name='Now' id='ShowNow'>";
echo "</fieldset>";
//echo "</form>";
//echo "</div>";
}
selectTheme();
?>
</body>
</html>