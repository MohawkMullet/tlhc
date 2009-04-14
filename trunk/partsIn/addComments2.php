<?php
/**
*
* 	THE FUNCTION FOR THE FIRST INPUT FORM
*
*/
$soldierDB = $_GET['soldierDB'];
function draw45form() {
//global $tabAdd;
	global $soldierDB;
	global $subButton;
	global $clearButton;
	echo "<span class='ui-state-default ui-widget-header ui-corner-all' style='padding: 6px; width: 450px;'> Add Comments to the 45 Databases</span>";	
//	echo "<span class=\"ui-widget-content\" style='width: 450px; display: block;'>";	
	echo "<form method='POST' name='comAdd' id='comAdd'>";
	echo "<fieldset><legend title='Choose the comment category'><span class='ui-icon ui-icon-info' style='float: left;'></span>&nbsp;Choose a Comment Category:</legend>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='Vinyl' checked/>Vinyl</label>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='Label' />Label</label>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='Sleeve' />Sleeve</label>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='Promo' />Promo</label>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='Misc' />EP & Punk</label>";	
	echo "<br /></fieldset><table width='300'><tr width='300'><td>";
	echo "<fieldset><input name='comValue' type='text' size='28' onfocus=\"if(this.value=='Enter A New Comment')this.value='';\" value=\"Enter A New Comment\" class='ui-widget input'></fieldset></td></tr>";
	echo "<tr><td><fieldset>";
	echo "$subButton";
	echo "$clearButton";
	echo "</fieldset></td>";
	echo "</tr></table></form>";
//	echo "</span>";
}
function drawSoldierForm() {
//global $tabAdd;
	global $soldierDB;
	global $subButton;
	global $clearButton;
	echo "<div class='ui-state-default ui-widget-header ui-corner-all' style='padding: 6px; width: 450px;'> Add Comments to the Soldier Databases</div>";		
//	echo "<div class=\"ui-widget-content\" style='width: 450px; padding: 6px;'>";
	echo "<form method='POST' name='comAdd' id='comAdd'>";
	echo "<fieldset><legend title='Choose the comment category'><span class='ui-icon ui-icon-info' style='float: left;'></span>&nbsp;Choose a Comment Category:</legend>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='SolPaint' checked/>Paint</label>";
	echo "<label><input class='ui-widget input' name='tabAdd' type='radio' value='SolMisc' />Soldier Misc</label>";	
	echo "<br /></fieldset><table width='300'><tr width='300'><td width='300'>";
	echo "<fieldset><input name='comValue' type='text' size='28' onfocus=\"if(this.value=='Enter A New Comment')this.value='';\" value=\"Enter A New Comment\" class='ui-widget input'></fieldset></td></tr>";
	echo "<tr><td><fieldset>";
	echo "$subButton";
	echo "$clearButton";
	echo "</fieldset></td>";
	echo "</tr></table></form>";
//	echo "</div>";
}
/**
*
* 	CHECK THE NAME OF THE LINK AND DRAW THE APPROPRIATE FORM
*
*/
if ( $soldierDB != "soldierAdd" ) {
draw45form();
}
/**
*
* 	CHECK THE NAME OF THE LINK AND DRAW THE APPROPRIATE FORM
*
*/
if ( $soldierDB == "soldierAdd" ) {
drawSoldierForm();
}
?>
<?php
/**
*
* 	BUILD THE OUTPUT INDICATORS
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
	  
	echo "<br><br><strong>Press the &nbsp;<button onclick='' disabled class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all'><span class='ui-icon ui-icon-refresh'></span>Refresh</button>&nbsp; below the form <-- to LOAD your new comment.</strong>";
	echo "<br> <br />New Drawer Comments appear that the END of list.";	
}
?>
<?php
$tabAdd = $_POST['tabAdd'];
if (empty($tabAdd)) 
      $errors["comValue"] = "Choose A Category!";
if (empty($_POST["comValue"])) 
      $infos = "$highBeg Add an Entry $highEnd2";

if ($_POST['comValue'] == "Enter A New Comment")
	$errors['comValue'] = "You've Got To Type In A Comment";
  if (count($errors))
  {
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
} 
?>
<?php
buildBox();
?>