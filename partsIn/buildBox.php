<?php
/**
*
* FUNCTION TO BUILD THE SELECT BOXES
*
**/
$tabAdd = $_GET['tabAdd'];
function buildBox() {
	global $tabAdd;
	$selectorName = "$tabAdd"."Selector"."[]";
	$query = mysql_query(
    	"SELECT `id`, 
            	`value`,
            	`name`
       	FROM `comms$tabAdd`
   		ORDER BY `id` ASC"
	);
	echo "<select class='ui-widget input' name='$selectorName' size='8' multiple id='$tabAdd' style='width:320px;'>";
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>";
	}
	echo "</select>";
}
//buildBox();
?>
