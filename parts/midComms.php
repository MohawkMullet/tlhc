<?php
		include("config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>The Stored Comments</title>
<link type="text/css" rel="stylesheet" href="jquery/jquery-ui/css/right/jquery-ui-1.7.1.custom.css" />
<link type="text/css" rel="stylesheet" href="style.css" />
<script type="text/javascript" src="jquery/jquery-1.3.2.js"></script>
<script type="text/javascript" src="jquery/animatedcollapse.js"></script>
<script type="text/javascript" src="jquery/jquery-ui-1.7.1.js"></script>
</head>

<body>
<div id="commentshower" class="ui-widget-content ui-corner-all">
<?php
$soldierDB = $_GET['soldierDB'];
	echo "<div class='ui-state-default ui-widget-header ui-corner-all' style='padding: 6px; width: 250px;'>Comments Stored in Database</div><br>";	
/**
*
* FUNCTION TO BUILD THE SELECT BOXES
*
**/
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
	echo "<select class='ui-widget input ui-corner-all' name='$selectorName' size='8' multiple id='$tabAdd' style='width:320px;'>";
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>";
	}
	echo "</select>";
}
?>
<div style="padding: 5px;">
  <div id="tabs2-vinyl">
    <?php
if ( $soldierDB != "soldierShow" ) {
	$tabAdd = "Vinyl";
echo "<div id=\"info304\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 145px; padding:6px;\"><div class=\"ui-state-active ui-widget-header ui-corner-all\">Vinyl Comments</div></div>";
	buildBox();
}
?>
  </div>
  <div id="tabs2-label">
    <?php
if ( $soldierDB != "soldierShow" ) {
$tabAdd = "Label";
echo "<div id=\"info304\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 145px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Label Comments</div></div>";

buildBox();
}
?>
  </div>
  <div id="tabs2-3">
    <?php
if ( $soldierDB != "soldierShow" ) {

$tabAdd = "Promo";
echo "<div id=\"info304\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 145px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Promo Comments</div></div>";

buildBox();
}
?>
  </div>
  <div id="tabs2-">
    <?php
if ( $soldierDB != "soldierShow" ) {

$tabAdd = "Sleeve";
echo "<div id=\"info304\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 145px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Sleeve Comments</div></div>";

buildBox();
}
?>
    <div id="tabs2-7">
      <?php
if ( $soldierDB != "soldierShow" ) {

$tabAdd = "Misc";
echo "<div id=\"info304\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 145px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Misc & Ep Comments</div></div>";

buildBox();
}
?>
    </div>
    <div id="tabs2-2">
      <?php
if ( $soldierDB == "soldierShow" ) {
$tabAdd = "SolMisc";
echo "<div id=\"info304\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Misc Soldier Comments</div></div>";

buildBox();
}
?>
      <div id="tabs2-6">
        <?php
if ( $soldierDB == "soldierShow" ) {
$tabAdd = "SolPaint";
echo "<div id=\"info304\" align=\"center\" class=\"ui-widget-content ui-corner-all\" style=\"width: 195px; padding:6px;\"><div class=\"ui-state-selcted ui-widget-header ui-corner-all\">Soldier Paint Comments</div></div>";

buildBox();
}
?>
      </div>
    </div>
  </div>
</div>
</div></body>
</html>
