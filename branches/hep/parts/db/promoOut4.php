<html>
<head>
<title>fetch me a brew will ya</title>

<?php include_once("tlhcConnect.php");
?> 
<link href="../lowerCss.css" rel="stylesheet" type="text/css" />
  </head>     

<?php
session_start();
if (!session_is_registered('errors'))
	session_register('errors');
	$errors = array();
if (!session_is_registered("formVars"))
     session_register("formVars");
     session_register('value');
?>
  
  
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#cccccc">
 <form method="POST" action="" target="low" name="promoAdd" id="promoAdd">
<table width="356">
<tr>
<td width="65px" style="text-align:right;"><font color="#282828" size="2"><strong>LABELED&nbsp;</strong></font></td>
<td width="65"><input type="text" name="value" onfocus="if(this.value=='both sides')this.value='';" value="both sides"></td>
<td><input type="submit" value="Promo">
<input name="clearme" type="reset" id="clearme" tabindex="15" value="Clear" /></td>
</tr>
</table>
</form> 
  <div id="commentOut">
  <table>
<tr>
	<td>																											

<?php

if (empty($_POST["value"])) 
      // First name cannot be a null string
      $errors["value"] = "Dont submit the blank form. Asshole!.";
if ($_POST['value'] == "both sides")
	$errors['value'] = "fuck you dont just hit the button";
  if (count($errors))
  {
      // There are errors.  Relocate back to the 
      // client form
      echo "$errors[value]<br>";
      print_r ($_SESSION);
      
      exit;
  }
		if ($_SERVER['REQUEST_METHOD'] == "POST") {

		$value = $_POST['value'];
		$sql = "INSERT INTO promoComms ( value, name )
			values( '$value', '$value')";
	
		$result = mysql_db_query($db,"$sql",$link);
		if (!$result) {
    		echo("ERROR: " . mysql_error() . "\n$sql\n"); }

		echo ("You Added:<br>\n");
		print "<span class='stronger'>Labeled $value</span><br>";
		echo  "to the <span class=\"drawerName\">Promo</span> database.";
		echo "<br><br><strong>Press the &nbsp;<input name=\"Drawers\" type=\"button\" value=\"Drawers\">&nbsp; button on left to LOAD your new comment.</strong>";
} 
?>
	</td>
	
	<td valign="top">
<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `promoComms`
	   ORDER BY `id` DESC"
	);
	echo "<select name='promoSelector[]' size='1' multiple id='promoSelector'>\n";
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
      



