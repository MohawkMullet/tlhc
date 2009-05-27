<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php 
include('../parts/config.php'); 
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Updater In One</title>
		<link type="text/css" href="../parts/style.css" rel="Stylesheet" />	

		<link type="text/css" href="../parts/jquery/jquery-ui/css/right/jquery-ui-1.7.1.custom.css" rel="Stylesheet" />	
		<script type="text/javascript" src="../parts/jquery/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="../parts/jquery/jquery-ui-1.7.1.js"></script>
        <style type="text/css">
<!--
.style1 {
	color: #FFFF00;
	font-size: 22px;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style2 {
	font-size: 16px;
	color: #00FF00;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
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

<body>
<div id="addComms" class="ui-corner-all" style="padding:8px; background:#ffffff;">
<?php
/**
*
* 	THE FUNCTION FOR THE INPUT FORMS
*
*/
function draw45form() {
/*
*	here we need to grab the standard submit anc clear buttons that are defined in config.php
*	so we'll call the globals to make them available in these functions
*/
	global $subButton;
	global $clearButton;
	$fvalue = array('Vinyl', 'Label', 'Sleeve', 'Promo', 'Misc');
	echo "<div class='ui-state-default ui-widget-header ui-corner-all' style='padding: 10px;'> Fuck Add Comments to the 45 Databases</div>";	
	echo "<form method='POST' name='comAdd' id='comAdd'>";
	echo "<span class='ui-icon ui-icon-notice' style='float: left;'></span>&nbsp;Category:&nbsp;&nbsp;";
	foreach ($fvalue as $f) {
	echo "<label style='font-size: 14px; font-weight:bolder;'><input class='ui-widget input' name='tabAdd' type='radio' value='$f' />$f</label>";
	}	
	echo "<br /><br>";
	echo "<input name='comValue' type='text' size='38' onfocus=\"if(this.value=='Enter A New Comment')this.value='';\" value=\"Enter A New Comment\" class='ui-widget input'>";
	echo "&nbsp;&nbsp;$subButton $clearButton";
	echo "</form>";
}
function drawSoldierForm() {
	global $subButton;
	global $clearButton;
	$fvalue = array('SolPaint', 'SolMisc');
	echo "<div class='ui-state-default ui-widget-header ui-corner-all' style='padding: 10px;'> Add Comments to the Soldier Databases</div>";		
	echo "<form method='POST' name='comAdd' id='comAdd'>";
	echo "<span class='ui-icon ui-icon-notice' style='float: left;'></span>&nbsp;Category:&nbsp;&nbsp;";
	foreach ($fvalue as $f) {
	echo "<label style='font-size: 14px; font-weight:bolder;'><input class='ui-widget input' name='tabAdd' type='radio' value='$f' />$f</label>";
	}		
	echo "<br /><br>";
	echo "<input name='comValue' type='text' size='38' onfocus=\"if(this.value=='Enter A New Comment')this.value='';\" value=\"Enter A New Comment\" class='ui-widget input'>";
	echo "&nbsp;&nbsp;$subButton $clearButton";
	echo "</form>";

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
$soldierDB = $_GET['soldierDB'];
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
	echo "<div class='ui-widget-content' style='padding: 6px; width: 450px;'><select class='ui-widget input' name='$selectorName' size='8' multiple id='$tabAdd' style='width:320px;'>";
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>";
	}
	echo "</select>";
	  
	echo "<br><br>Press the &nbsp;<button onclick='location.reload()' disabled class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all' style='font-size:smaller;'><span class='ui-icon ui-icon-refresh' style='font-size:smaller;'></span>Refresh</button>&nbsp; button to the left <-- to LOAD your new comment.";
	echo "<br> <br />New Drawer Comments appear that the END of list.</div>";	
}
?>
<?php
/**
*   THIS IS THE FUCKER THAT ACTUALLY PROCESSES THE FUCKING FORM
*	let's do a little validating of the form and check for mysql connection
*/
$tabAdd = $_POST['tabAdd'];
if (empty($tabAdd)) 
      $errors["comValue"] = "Choose A Category!";
//if (empty($_POST["comValue"])) 
//      $infos = "$highBeg Add an Entry $highEnd2";

if ($_POST['comValue'] == "Enter A New Comment")
	$errors['comValue'] = "You've Got To Type In A Comment";
  if (count($errors))
  {
//	  echo "<div class=\"ui-widget-content\" style='width: 450px; padding: 6px;'>";	  
	  echo $infos;
	  echo "<div style='position: relative; float:left; clear:both; top:10px;'>$errorIcon";
      echo "$errors[comValue]<br>";
	  echo "$errorIconEnd<br>";
	  echo "</div>";
      exit;
  }
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
$comValue = $_POST['comValue'];
$sql = "INSERT INTO comms$tabAdd ( value, name )
		values( '$comValue', '$comValue')";
		$result = mysql_db_query($db,"$sql",$link);
		if (!$result) {
    		echo("ERROR: " . mysql_error() . "\n$sql\n"); }
		echo ("<div class='ui-widget-header ui-state-active' style='padding: 6px;'>");
		print "<span class=\"style1\">$comValue&nbsp;</span>";
		echo  "<span class=\"style3\">was added to </span><span class=\"style2\">$tabAdd</span><span class=\"style3\">&nbsp;database.<br></div>";
		echo "<br><button onclick='location.reload()' disabled class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all' style='font-size:smaller;'><span class='ui-icon ui-icon-refresh' style='font-size:smaller;'></span>Update</button>&nbsp;the Form to use the new comment.";
		echo "<br>New Drawer Comments appear that the END of list.";		
} 
?>
<?php
buildBox();
?>
</div>
</body>
</html>
