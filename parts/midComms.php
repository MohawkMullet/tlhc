<?php include('head.php'); ?>
<?php
		include("db/tlhcConnect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>The Stored Comments</title>
</head>

<body>
<br>
<br>
<br>
<?php
$query = mysql_query(
    "SELECT `id`, 
            `value`,
            `name`
       FROM `commsVinyl`
   ORDER BY `id` ASC"
);

echo "<select name='vinylSelector[]' size='8' multiple id='vinylSelector'>\n";

while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>\n";
}

echo "</select>\n";
?>
<hr>
<?php
$query = mysql_query(
    "SELECT `id`, 
            `value`,
            `name`
       FROM `commsLabel`
   ORDER BY `id` ASC"
);

echo "<select name='labelSelector[]' size='7' multiple id='labelSelector'>\n";

while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>\n";
}

echo "</select>\n";
?>  <hr>

<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsPromo`
	   ORDER BY `id` ASC"
	);
	
	echo "<select name='promoSelector[]' size='10' multiple scrolling='no' id='promoSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
?>
    <hr>

<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsSleeve`
	   ORDER BY `id` ASC"
	);
	
	echo "<select name='sleeveSelector[]' size='4' multiple scrolling='no' id='sleeveSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
?>
<hr>

<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsMisc`
	   ORDER BY `id` ASC"
	);
	
	echo "<select name='miscSelector[]' size='6' multiple scrolling='no' id='miscSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
?>
</body>
</html>
