<?php
include('../../parts/config.php');
?>
<style type="text/css">
<!--
.eeee {
	overflow: hidden;
}
-->
</style>

<p><a href="../../../partsIn/commsDialogAdd.php">Back To Form</a></p>

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
		echo ("<div class='ui-widget-header ui-state-default ui-corner-all' style='padding:3px; margin:3px;'>");
		print "<span class=\"style1\">$comValue&nbsp;</span>";
		echo  "<span class=\"style3\">was added to </span><span class=\"style2\">$tabAdd</span><span class=\"style3\">&nbsp;database.<br></div>";
//		echo "<div class='ui-widget ui-widget-content'><button onclick='location.reload()' disabled class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all' style='font-size:smaller;'><span class='ui-icon ui-icon-refresh' style='font-size:smaller;'></span>Update</button>&nbsp;the Form to use the new comment.";
//		echo "<br>New Drawer Comments appear that the END of list.</div>";		
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
	echo "<div class='ui-widget' align='center'><select class='ui-widget select ui-corner-all' name='$selectorName' size='5' disabled='disabled' multiple id='$tabAdd' style='width:320px; overflow:hidden;'>";
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>";
	}
	echo "</select>";
	  
	echo "<div style='ui-widget-content'>Press the &nbsp;<button onclick='location.reload()' disabled class='fg-button fg-button-icon-right2 ui-state-hover ui-corner-all' style='font-size:smaller;'><span class='ui-icon ui-icon-refresh' style='font-size:smaller;'></span>Update</button>&nbsp; button to the left <-- to LOAD your new comment.";
	echo "<br> <br />New Drawer Comments appear that the END of list.</div></div>";	
}
?>
<?php
buildBox();
?>
