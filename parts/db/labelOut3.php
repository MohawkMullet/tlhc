<html>
<head>
<title>fetch me a brew will ya</title>
<?php 
include("../config.php");
?> 
<link type="text/css" rel="stylesheet" href="../jquery/theme/ui.all.css" />
<script type="text/javascript" src="../jquery/jquery-1.3.2.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui-personalized-1.6rc6.js"></script>
  
  </head>     
<body leftmargin="0" topmargin="20" marginwidth="0" marginheight="0">
  <div id="commentOut">
  <table width="680">
<tr>
	<td>																											
<?php
if (empty($_POST["labelValue"])) 
      // First name cannot be a null string
      $errors["labelValue"] = "Dont submit the blank form. Asshole!.";
if ($_POST['labelValue'] == "shows blah blah")
	$errors['labelValue'] = "Write in there something else you dozy cunt";
  if (count($errors))
  {
      // There are errors.  Relocate back to the 
      // client form
	  echo $errorIcon;
      echo "$errors[labelValue]<br>";
	  echo $errorIconEnd;
      print_r ($_SESSION);
      exit;
  }
		if ($_SERVER['REQUEST_METHOD'] == "POST") {

$labelValue = $_POST['labelValue'];
$sql = "INSERT INTO commsLabel ( value, name )
values( '$labelValue', '$labelValue')";
	
		$result = mysql_db_query($db,"$sql",$link);
		if (!$result) {
    		echo("ERROR: " . mysql_error() . "\n$sql\n"); }

		echo ("You just added:<br>\n");
		print "<span class='stronger'>Label $labelValue</span><br>";
		echo  "to the <span class=\"drawerName\">Label</span> database.";
		echo "<br><br><strong>Press the &nbsp;<input name=\"Drawers\" type=\"button\" value=\"Drawers\">&nbsp; button on left to LOAD your new comment.</strong>";
} 
?>

	</td>
	
	<td valign="top">
<?php 
$query = mysql_query(
"SELECT `id`, `value`,
`name`
FROM `commsLabel`
ORDER BY `id` DESC"
);
echo "<select name='labelSelector[]' size='1' multiple id='labelSelector'>\n";
while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
{
echo " <option value='{$data['value']}'>{$data['value']}</option>\n";
}
echo "</select>\n";
?>
	</td>
</tr>
</table>     
  </div>     
</body>  
</html>
      



