<?php 
include('../parts/config.php'); 
?>
<html>
<head>
<title>Updater In One</title>
		<link type="text/css" href="../parts/style.css" rel="Stylesheet" />	
		<link type="text/css" href="../parts/jq/jquery-ui.css" rel="Stylesheet" />	
		<script type="text/javascript" src="../parts/jq/jquery.js"></script>
		<script type="text/javascript" src="../parts/jq/jquery-ui.js"></script>
		<link href='../parts/jq/silk/jquery-silk-icons.css' rel='stylesheet' type='text/css'>
<script>
  $(document).ready(function(){
		$( "input" ).addClass( "ui-corner-all" );
  });
</script>
<script>
  $(document).ready(function(){
		$( "legend" ).addClass( "ui-corner-all pane" );
		$( "button" ).addClass( "ui-corner-all" );
  });
</script>
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
<script type="text/javascript">
$(document).ready(function(){
	$(".pane .delete").click(function(){
		$(this).parents(".pane").animate({ opacity: 'hide' }, "slow");
	});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $("input[name$='tabAdd']").click(function() {
        var test = $(this).val();
        $("div.desc").hide();
        $("#Cars" + test).show();
    });
});
</script>
</head>
<body>
<?php
/* grab the get variable and decide what to display */
	$showComms = $_GET['showComms'];
	if ( $showComms == "Trains" ){ 	
		drawTrainsForm();
	} 
	if ( $showComms == "Soldiers" ){ 	
		drawSoldierForm();
	} 
	if ( $showComms == "45s" ){ 	
		draw45form();
	} 
	if ( $showComms == "Cards" ){ 	
		drawCardsform();
	} 
?>
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
	echo "<div class='ui-state-default ui-widget-header ui-corner-all pane style100' style='padding: 6px;'> Add Comments to the 45s<a style='float:right; clear:none; padding:5px; margin-bottom:10px;' href=\"#\" class=\"fg-button ui-corner-all fg-button-icon-solo delete\" title=\"Close this section\"><span class=\"ui-icon ui-corner-all silk-icon-bomb\"></span>&nbsp;</a></div>";	
	echo "<form method='POST' name='comAdd' id='comAdd' class='st1'>";
	echo "<fieldset><legend>Category</legend>";
	foreach ($fvalue as $f) {
	echo "<label style='font-size:medium;'><input class='ui-widget input' name='tabAdd' type='radio' value='$f' />$f</label>";
	}	
	echo "</fieldset>";
	echo "<input name='comValue' type='text' size='32' onfocus=\"if(this.value=='Enter A New Comment')this.value='';\" value=\"Enter A New Comment\" class='ui-corner-all st0'>";
	echo "$subButton $clearButton";
	echo "</form>";
}
function drawSoldierForm() {
	global $subButton;
	global $clearButton;
	$fvalue = array('SolPaint', 'SolMisc');
	echo "<div class='ui-state-default ui-widget-header ui-corner-all pane style100' style='padding: 6px;'> Add Comments to the Soldier Databases<a href=\"javascript:animatedcollapse.toggle('inComs2')\" class=\"fg-button fg-button-icon-solo delete\" title=\"Close this section\" style=\"float:right; clear:none; display:inline;\"><span class=\"ui-icon silk-icon-page-white-magnify\"></span>&nbsp;</a></div>";		
	echo "<form method='POST' name='comAdd' id='comAdd' class='st1'>";
	echo "<fieldset><legend>Category</legend>";
	foreach ($fvalue as $f) {
	echo "<label style='font-size:medium;'><input class='ui-widget input' name='tabAdd' type='radio' value='$f' />$f</label>";
	}		
	echo "</fieldset>";
	echo "<input name='comValue' type='text' size='32' onfocus=\"if(this.value=='Enter A New Comment')this.value='';\" value=\"Enter A New Comment\" class='ui-corner-all st0'>";
	echo "$subButton $clearButton";
	echo "</form>";
}
function drawTrainsForm() {
	global $subButton;
	global $clearButton;
	$fvalue = array('Trains', 'Paint', 'TrainsPackaging', 'TrainsAccess');
	echo "<div class='ui-state-default ui-widget-header ui-corner-all pane style100' style='padding: 6px;'> Add Comments to the Model Trains Database<a href=\"javascript:animatedcollapse.toggle('inComs3')\" class=\"fg-button fg-button-icon-solo delete\" title=\"Close this section\" style=\"float:right; clear:none; display:inline;\"><span class=\"ui-icon ui-icon-close\"></span>&nbsp;</a></div>";		
	echo "<form method='POST' name='comAdd' id='comAdd' class='st1'>";
	echo "<fieldset><legend>Category</legend>";
	foreach ($fvalue as $f) {
	echo "<label style='font-size:medium;'><input class='ui-widget input' name='tabAdd' type='radio' value='$f' />$f</label>";
	}		
	echo "</fieldset>";
	echo "<input name='comValue' type='text' size='32' onfocus=\"if(this.value=='Enter A New Comment')this.value='';\" value=\"Enter A New Comment\" class='ui-corner-all st0'>";
	echo "$subButton $clearButton";
	echo "</form>";
}
function drawCardsForm() {
	global $subButton;
	global $clearButton;
	$fvalue = array('CardsMisc', 'CardsChips', 'CardsType');
	echo "<div class='ui-state-default ui-widget-header ui-corner-all pane style100' style='padding: 6px;'> Add Comments to the Cards Database<a href=\"javascript:animatedcollapse.toggle('inComs4')\" class=\"fg-button fg-button-icon-solo delete\" title=\"Close this section\" style=\"float:right; clear:none; display:inline;\"><span class=\"ui-icon silk-icon-chart-line-delete\"></span>&nbsp;</a></div>";		
	echo "<form method='POST' name='comAdd' id='comAdd' class='st1'>";
	echo "<fieldset><legend>Category</legend>";
	foreach ($fvalue as $f) {
	echo "<label style='font-size:medium;'><input class='ui-widget input' name='tabAdd' type='radio' value='$f' />$f</label>";
	}		
	echo "</fieldset>";
	echo "<input name='comValue' type='text' size='32' onfocus=\"if(this.value=='Enter A New Comment')this.value='';\" value=\"Enter A New Comment\" class='ui-corner-all st0'>";
	echo "$subButton $clearButton";
	echo "</form>";
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
	echo "</div>";	
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
if ($_POST['comValue'] == "Enter A New Comment")
	$errors['comValue'] = "You've Got To Type In A Comment";
  if (count($errors))
  {
	  echo "<div style='position: relative; float:left; clear:both; top:10px;' class='pane'>$errorIcon";
	  echo "$errors[comValue]<br>";
	  echo "$errorIconEnd";
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

} 
?>
<?php
buildBox();
?>

</body>
</html>
