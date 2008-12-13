<html>
<head>
<title>slap in some sllever data</title>

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
session_start();
if (!session_is_registered('errors'))
	session_register('errors');
	$errors = array();
if (!session_is_registered("formVars"))
     session_register("formVars");
if (empty($_POST["sleeveValue"])) 
      // First name cannot be a null string
      $errors["sleeveValue"] = "Dont submit the blank form. Asshole!.";
if ($_POST['sleeveValue'] == "")
	$errors['sleeveValue'] = "there is an error";
  if (count($errors))
  {
      // There are errors.  Relocate back to the 
      // client form
      echo "$errors[sleeveValue]<br>";
      print_r ($_SESSION);
      exit;
  }
		if ($_SERVER['REQUEST_METHOD'] == "POST") {

$sleeveValue = $_POST['sleeveValue'];
$sql = "INSERT INTO commsSleeve ( value, name )
	values( '$sleeveValue', '$sleeveValue')";
	
		$result = mysql_db_query($db,"$sql",$link);
		if (!$result) {
    		echo("ERROR: " . mysql_error() . "\n$sql\n"); }

		echo ("Your new comment:&nbsp;");
		print "<span class='stronger'>$sleeveValue</span><br>";
		echo  "Just dropped in the <span class=\"drawerName\">Sleeve</span> database.";
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
       FROM `commsSleeve`
   ORDER BY `id` DESC"
);

echo "<select name='sleeveSelector[]' size='1' multiple id='sleeveSelector'>\n";

while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>\n";
}

echo "</select>\n";
?>      
	</td>
</tr>
</table>     

  </div>     

</body>  
</html>
      



