<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
-->
<?php 
include('config.php'); 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>jQuery dialog test</title>
    <link type="text/css" href="jqDialogForms/css/jqDialogForms.css" rel="Stylesheet" />
    <!--<link type="text/css" href="css/jqDialogForms-highlight.css" rel="Stylesheet" />-->
    <script language="JavaScript" type="text/javascript" src="jquery/jquery-1.3.2.js"></script>
    <script language="JavaScript" type="text/javascript" src="jqDialogForms/js/jqalert.js"></script>
    <script language="JavaScript" type="text/javascript" src="jquery/jquery.form.js"></script>

    <script language="javascript" type="text/javascript" src="jqDialogForms/js/jqDnR.js"></script>

    <script language="javascript" type="text/javascript" src="jqDialogForms/js/jqDialogForms.js"></script>

    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="jquery/jquery-ui/css/theme/jquery-ui-1.7.1.custom.css" rel="stylesheet" type="text/css">
</head>
<script type="text/javascript">
// prepare the form when the DOM is ready 
$(document).ready(function() { 
    // bind form using ajaxForm 
    $('#showTheme').ajaxForm({ 
        // target identifies the element(s) to update with the server response 
        target: '#showTheme2', 
 
        // success identifies the function to invoke when the server response 
        // has been received; here we apply a fade-in effect to the new content 
        success: function() { 
            $('#showTheme2').fadeIn('slow'); 
        } 
    }); 
});
</script>
		



<?php
echo $themeChooser;
?>
<div id="dontSee" style="display:none;">
<?php
function selectTheme() {
echo "<div id='AddNewCom'><form id='showTheme' method='POST' name='showTheme'>";
echo "<fieldset class='pane'><legend title='Choose a theme for the new listing'>";
echo "Listing Theme&nbsp;</legend>";
echo "<label><input class='ui-widget input' name='templateName' type='radio' value='default'/>Old</label>";
echo "<label><input class='ui-widget input' name='templateName' type='radio' value='yellow'/>Yellow & Orange</label>";
echo "<label><input class='ui-widget input' name='templateName' type='radio' value='blue' />Blue</label>";
echo "<label><input class='ui-widget input' name='templateName' type='radio' value='orange' />Green & Blue</label>";
echo "<input type='submit' name='go' id='go' value='Submit'></fieldset></form></div>";
}
selectTheme();
?>
</div>




<div id="showTheme2">
		<?php 
			include('../partsOut/formOuts/themeOut.php'); 
		?>
</div>
</body>
</html>
