<html>
<head>
<title>fetch me a brew will ya</title>

<?php include_once("../config.php");
?> 
<link type="text/css" rel="stylesheet" href="../jquery/theme/ui.all.css" />
<script type="text/javascript" src="../jquery/jquery-1.3.2.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui-personalized-1.6rc6.js"></script>
  </head>     
  
  
<body leftmargin="0" topmargin="20" marginwidth="0" marginheight="0">
  
  <div id="commentOut">
  <table>
<tr>
	<td>																											
<?php
$errorIcon = "<div class=\"ui-widget\"><div class=\"ui-state-error ui-corner-all\" style=\"padding: 0 .7em;\"><p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span><strong>Alert: </strong>";
$errorIconEnd = "</p></div></div>";
//session_start();
//if (!session_is_registered('errors'))
//	session_register('errors');
//	$errors = array();
//if (!session_is_registered("formVars"))
//     session_register("formVars");
if (empty($_POST["vinylValue"])) 
      // First name cannot be a null string
      $errors["vinylValue"] = "The vinyl value name field cannot be blank. fill it in and try again";
  if (count($errors))
  {
      // There are errors.  Relocate back to the 
      // client form
	  echo $errorIcon;
      echo $errors[vinylValue];
	  echo $errorIconEnd;
      exit;
  }
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$vinylValue = $_POST['vinylValue'];
$sql = "INSERT INTO commsVinyl ( value, name )
	values( '$vinylValue', '$vinylValue')";
		$result = mysql_db_query($db,"$sql",$link);
		if (!$result) {
    		echo("ERROR: " . mysql_error() . "\n$sql\n"); }
		echo $highBeg;
		print "<strong>$vinylValue</strong><br>";
		echo $highEnd;
		echo  "was added to the Vinyl database.";
		echo "<br><br><strong>Press the &nbsp;<input name=\"Update Drawers\" type=\"button\" value=\"Drawers\">&nbsp; button on left to LOAD your new comment.</strong>";
		echo "<br> <br />New Drawer Comments appear that the END of list.";
} 
?>
	</td>
	<td valign="top">
<?php
$query = mysql_query(
    "SELECT `id`, 
            `value`,
            `name`
       FROM `commsVinyl`
   ORDER BY `id` DESC"
);
echo "<select name='vinylSelector[]' size='1' multiple id='vinylSelector'>\n";
while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
{
    echo "<option value='{$data['value']}'>{$data['value']}</option>\n";
}
echo "</select>\n";
?>      
	</td>
</tr>
</table>     
<?php  include('../../license.php'); ?>
  </div>     

</body>  
</html>
      



