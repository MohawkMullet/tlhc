<html>
<head>
<title>slap in some misc data</title>

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

if (empty($_POST["miscValue"])) 
      // First name cannot be a null string
      $errors["miscValue"] = "Dont submit the blank form. Asshole!.";
if ($_POST['miscValue'] == "misc")
	$errors['miscValue'] = "fuck you";
  if (count($errors))
  {
      // There are errors.  Relocate back to the 
      // client form
      echo "$errors[miscValue]<br>";
      print_r ($_SESSION);
      exit;
  }
		if ($_SERVER['REQUEST_METHOD'] == "POST") {

$miscValue = $_POST['miscValue'];
$sql = "INSERT INTO commsMisc ( value, name )
	values( '$miscValue', '$miscValue')";
	
		$result = mysql_db_query($db,"$sql",$link);
		if (!$result) {
    		echo("ERROR: " . mysql_error() . "\n$sql\n"); }

		echo ("Your new comment:&nbsp;");
		print "<span class='stronger'>$miscValue</span><br>";
		echo  "was added to the <span class=\"drawerName\">Misc</span> database.";
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
       FROM `commsMisc`
   ORDER BY `id` DESC"
);

echo "<select name='miscSelector[]' size='1' multiple id='miscSelector'>\n";

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
      



