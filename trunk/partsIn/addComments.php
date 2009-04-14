<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php 
include('../parts/config.php'); 
$tabName = "assTab";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Updater In One</title>
		<link type="text/css" href="../parts/style.css" rel="Stylesheet" />	

		<link type="text/css" href="../parts/jquery/jquery-ui/css/theme/jquery-ui-1.7.1.custom.css" rel="Stylesheet" />	
		<script type="text/javascript" src="../parts/jquery/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="../parts/jquery/jquery-ui-1.7.1.js"></script>
        <style type="text/css">
<!--
.style1 {
	color: #CC0000;
	font-size: 30px;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style2 {
	font-size: 20px;
	color: #0000FF;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	font-weight: bold;
}
-->
</style>
<script type="text/javascript">
	$(function(){
		//all hover and click logic for buttons
		$(".fg-button:not(.ui-state-disabled)")
		.hover(
			function(){ 
				$(this).addClass("ui-state-hover"); 
			},
			function(){ 
				$(this).removeClass("ui-state-hover"); 
			}
		)
		.mousedown(function(){
				$(this).parents('.fg-buttonset-single:first').find(".fg-button.ui-state-active").removeClass("ui-state-active");
				if( $(this).is('.ui-state-active.fg-button-toggleable, .fg-buttonset-multi .ui-state-active') ){ $(this).removeClass("ui-state-active"); }
				else { $(this).addClass("ui-state-active"); }	
		})
		.mouseup(function(){
			if(! $(this).is('.fg-button-toggleable, .fg-buttonset-single .fg-button,  .fg-buttonset-multi .fg-button') ){
				$(this).removeClass("ui-state-active");
			}
		});
	});
</script>
</head>

<body style="margin-top:85px; margin-left: 25px; margin-right: 25px; padding-right: 45px;">
<?php
/**
*
* 	THE FUNCTION FOR THE FIRST INPUT FORM
*
*/
$soldierDB = $_GET['soldierDB'];
function draw45form() {
	global $soldierDB;
	global $subButton;
	global $clearButton;
	echo "<div class='ui-state-default ui-widget-header ui-corner-all' style='padding: 6px; width: 450px;'> Add Comments to the 45 Databases</div>";	
	echo "<div class=\"ui-widget-content\" style='width: 450px;'>";	
	echo "<div><form method='POST' name='comAdd' id='comAdd'>";
	/**
	*
	*	after reading a nicely newbie oriented php article from Linux Format Magazine I can now see I should simplify these forms with a simple array
	*
	*/
	echo "<fieldset><legend title='Choose the comment category'><span class='ui-icon ui-icon-info' style='float: left;'></span>&nbsp;Choose a Comment Category:</legend>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='Vinyl' checked/>Vinyl</label>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='Label' />Label</label>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='Sleeve' />Sleeve</label>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='Promo' />Promo</label>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='Misc' />EP & Punk</label>";	
	echo "<br /></fieldset><table width='300'><tr width='300'><td>";
	echo "<fieldset><legend><span class='ui-icon ui-icon-comment' style='float: left;'></span>&nbsp;Enter your New Comment:</legend><input name='comValue' type='text' size='28' onfocus=\"if(this.value=='Enter A New Comment')this.value='';\" value=\"Enter A New Comment\" class='ui-widget input'></fieldset></td></tr>";
	echo "<tr><td><fieldset><legend>Submit Comment to Database:&nbsp;</legend>";
	echo "$subButton";
	echo "$clearButton";
	echo "</fieldset></td>";
	echo "</tr></table></form></div></div>";
}
function drawSoldierForm() {
	global $soldierDB;
	global $subButton;
	global $clearButton;
	echo "<div class='ui-state-default ui-widget-header ui-corner-all' style='padding: 6px; width: 450px;'> Add Comments to the Soldier Databases</div>";		
	echo "<div class=\"ui-widget-content\" style='width: 450px; padding: 6px;'>";
	echo "<form method='POST' name='comAdd' id='comAdd'>";
	echo "<fieldset><legend title='Choose the comment category'><span class='ui-icon ui-icon-info' style='float: left;'></span>&nbsp;Choose a Comment Category:</legend>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='SolPaint' checked/>Paint</label>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='SolMisc' />Soldier Misc</label>";	
	echo "<br /></fieldset><table width='300'><tr width='300'><td width='300'>";
	echo "<fieldset><legend><span class='ui-icon ui-icon-comment' style='float: left;'></span>&nbsp;Enter your New Comment:</legend><input name='comValue' type='text' size='28' onfocus=\"if(this.value=='Enter A New Comment')this.value='';\" value=\"Enter A New Comment\" class='ui-widget input'></fieldset></td></tr>";
	echo "<tr><td><fieldset><legend>Submit Comment to Database:&nbsp;</legend>";
	echo "$subButton";
	echo "$clearButton";
	echo "</fieldset></td>";
	echo "</tr></table></form></div>";
}
/**
*	alright.  we're done drawing these incredibly dumb forms.  fuck you jquery UI.  i wasted hours trying to stylize these scripts
*/
?>
<?php
/**
*
* 	DECIDE WHICH FUCKING FORM TO DRAW BASED ON THE INPUT
*	WE EITHER DRAW THE SOLDIER FORM OR THE 45 FORM
*	SO IF WE CATCH THE VARIABLE $SOLDIERDB COMING ACROSS THE PAGE WE KNOW WHAT TO DO
*
*/
if (isset ($soldierDB)) {
drawSoldierForm(); 
} else {
draw45form();
}
?>
<?php
/**
*
* 	BUILD THE OUTPUT INDICATORS
*	there needs to be some indication that the input was successful 
*	and how to proceed after 
*
*/
function buildBox() {
	global $tabAdd;
	$selectorName = "$tabAdd"."Selector"."[]";
	$query = mysql_query(
    	"SELECT `id`, 
            	`value`,
            	`name`
       	FROM `comms$tabAdd`
   		ORDER BY `id` DESC"
	);
	echo "<select class='ui-widget input' name='$selectorName' size='8' multiple id='$tabAdd' style='width:320px;'>";
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>";
	}
	echo "</select>";
	  
	echo "<br><br><strong>Press the &nbsp;<button onclick='location.reload()' disabled class='fg-button fg-button-icon-right ui-state-default ui-corner-all'><span class='ui-icon ui-icon-refresh'></span>Refresh</button>&nbsp; button to the left <-- to LOAD your new comment.</strong>";
	echo "<br> <br />New Drawer Comments appear that the END of list.";	
}
?>
<?php
$tabAdd = $_POST['tabAdd'];
if (empty($tabAdd)) 
      $errors["comValue"] = "Choose A Category!";
if (empty($_POST["comValue"])) 
      // First name cannot be a null string
      $infos = "$highBeg Add an Entry $highEnd2";

if ($_POST['comValue'] == "Enter A New Comment")
	$errors['comValue'] = "You've Got To Type In A Comment";
  if (count($errors))
  {
      // There are errors.  Relocate back to the 
      // client form
	  echo "<div class=\"ui-widget-content\" style='width: 450px; padding: 6px;'>";	  
	  echo $infos;
	  echo $errorIcon;
      echo "$errors[comValue]<br>";
	  echo "$errorIconEnd<br></div>";
      print_r ($_SESSION);
      exit;
  }
		if ($_SERVER['REQUEST_METHOD'] == "POST") {

$comValue = $_POST['comValue'];
$sql = "INSERT INTO comms$tabAdd ( value, name )
		values( '$comValue', '$comValue')";
		$result = mysql_db_query($db,"$sql",$link);
		if (!$result) {
    		echo("ERROR: " . mysql_error() . "\n$sql\n"); }
		echo ("<span class=\"style3\">You just added:&nbsp;</span>");
		print "<span class=\"style1\">$comValue&nbsp;</span>";
		echo  "<span class=\"style3\">to the </span><span class=\"style2\">$tabAdd</span><span class=\"style3\">&nbsp;database.<br>";
//		echo "<br><br><strong>Press the &nbsp;<input name=\"Drawers\" type=\"button\" value=\"Drawers\">&nbsp; button on left to LOAD your new comment.</strong>";
} 
?>
<?php
buildBox();
?>
</body>
</html>
