<?php
include('../../parts/config.php');
?>
<?php
$tabAdd = $_GET['tabAdd'];
?>

<h2>
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
//	echo "<a href='parts/jquery/demo/add1.php?tabAdd=$tabAdd'>Add A $tabAdd Comment?</a>";
	echo "<div class='ui-widget'><select class='ui-widget select ui-corner-all' name='$selectorName' size='8' multiple id='$tabAdd' style='width:320px;'>";
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>";
	}
	echo "</select>";
	  
//	echo "<br><br>Press the &nbsp;<button onclick='location.reload()' disabled class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all' style='font-size:smaller;'><span class='ui-icon ui-icon-refresh' style='font-size:smaller;'></span>Refresh</button>&nbsp; button to the left <-- to LOAD your new comment.";
	echo "</div>";	
}
?>
  <?php
/**
*   THIS IS THE FUCKER THAT ACTUALLY PROCESSES THE FUCKING FORM
*	let's do a little validating of the form and check for mysql connection
*/
$tabAdd = $_GET['tabAdd'];
if (empty($_POST["comValue"])) 
      $infos = "$highBeg Add an Entry $highEnd";
if ($_POST['comValue'] == "Enter A New Comment")
	$errors['comValue'] = "Type In A Comment";
if ($_POST['comValue'] == "")
	$errors['comValue'] = "Don't Leave It Blank";	
  if (count($errors))
  {
//	  echo "<div class=\"ui-widget-content\" style='width: 450px; padding: 6px;'>";	  
	  echo $infos;
	  echo "$errorIcon";
      echo "$errors[comValue]<br>";
	  echo "$errorIconEnd";
//	  echo "</div>";
	  echo "<h4><a href=\"../../../partsIn/commsAjaxAdd.php?tabAdd=$tabAdd\" style='text-decoration:none;'><span class='ui-icon ui-icon-arrowreturnthick-1-e' style='float:left; clear:none; display:inline;' title='Back to $tabAdd Form'></span>Back. Add $tabAdd Com...</a></h4>";
      exit;
  }
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
$comValue = $_POST['comValue'];
$sql = "INSERT INTO comms$tabAdd ( value, name )
		values( '$comValue', '$comValue')";
		$result = mysql_db_query($db,"$sql",$link);
		if (!$result) {
    		echo("ERROR: " . mysql_error() . "\n$sql\n"); }
		echo ("<div class='ui-widget-header ui-state-hover ui-corner-all' style='padding: 0 25px 0 25px; margin: 15px 25px 0 25px;'>");
		print "<span class=\"style1\">$comValue&nbsp;</span>";
		echo  "<span class=\"style3\">was added to </span><span class=\"style2\">$tabAdd</span><span class=\"style3\">&nbsp;database.<br></div>";
//		echo "<br><button onclick='location.reload()' disabled class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all' style='font-size:smaller;'><span class='ui-icon ui-icon-refresh' style='font-size:smaller;'></span>Update</button>&nbsp;the Form to use the new comment.";
//		echo "<br>New Drawer Comments appear that the END of list.";		
} 
?>
  <?php
//buildBox();
?>
</h2>
<?php
	echo "<h3><a href='partsIn/commsAjaxAdd.php?tabAdd=$tabAdd' style='text-decoration:none;' title='Add A New $tabAdd Comment?'><span class='ui-icon ui-icon-plusthick' style='float:left; clear:none; display:run-in; margin-left:25px;' title='Add A New $tabAdd Comment?'></span>Add Another?</a></h3>";
	echo "<h4><a href=\"../partsIn/demo/showDBcomms.php?tabAdd=$tabAdd\" style='text-decoration:none;'><span class='ui-icon ui-icon-arrowreturnthick-1-e' style='float:left; clear:none; display:inline;' title='Back to $tabAdd Form'></span>Back to $tabAdd Comments</a></h4>";
?>