<?php
//include('config.php');
?>
<?php
/*
*	BEGIN THE SELECTED THEME INDICATOR
*	this will show what theme is selected and show the button that is used to chage themes
*
*/
$templateName = $_POST['templateName'];
function templateButton() {
	global $templateName;
//	if ($templateName == '') {
//	$templateName = "orange";
//	}
//echo $templateName;
echo "Theme:<input type='button' disabled id='1templateName' value='$templateName'>";
echo "<input type='hidden' id='templateName' name='templateName' value='$templateName'>";
}
?>
<?php
templateButton();
?>


