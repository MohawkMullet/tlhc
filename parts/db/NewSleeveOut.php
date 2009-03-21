<html>
<head>
<title>slap in some sllever data</title>

<?php 
include_once("../config.php");
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

if (empty($_POST["sleeveValue"])) 
      // First name cannot be a null string
      $errors["sleeveValue"] = "Dont submit the blank form. Asshole!.";
if ($_POST['sleeveValue'] == "")
	$errors['sleeveValue'] = "Say something about the condition of the sleeve and try again";
  if (count($errors))
  {
      // There are errors.  Relocate back to the 
      // client form
	  echo $errorIcon;
      echo "$errors[sleeveValue]<br>";
	  echo $errorIconEnd;
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
      



