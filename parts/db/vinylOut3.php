<html>
<head>
<title>fetch me a brew will ya</title>

<?php include_once("tlhcConnect.php");
?> 
<link href="../lowerCss.css" rel="stylesheet" type="text/css" />
  </head>     
  
  
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#cccccc">
  
  <div id="commentOut">
  <table>
<tr>
	<td>																											
<?php

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
      echo $errors[vinylValue];
      exit;
  }
	

if ($_SERVER['REQUEST_METHOD'] == "POST") {

$vinylValue = $_POST['vinylValue'];
$sql = "INSERT INTO commsVinyl ( value, name )
	values( '$vinylValue', '$vinylValue')";
	
		$result = mysql_db_query($db,"$sql",$link);
		if (!$result) {
    		echo("ERROR: " . mysql_error() . "\n$sql\n"); }

		echo ("Your new comment:&nbsp;");
		print "<span class='stronger'>$vinylValue</span><br>";
		echo  "was added to the <span class=\"drawerName\">Vinyl</span> database.";
		echo "<br><br><strong>Press the &nbsp;<input name=\"Drawers\" type=\"button\" value=\"Drawers\">&nbsp; button on left to LOAD your new comment.</strong>";
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
    echo "    <option value='{$data['value']}'>{$data['value']}</option>\n";
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
      



