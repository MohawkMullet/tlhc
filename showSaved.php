<?php require_once('Connections/anothertry.php'); ?>
<?php
$currentPage = $_SERVER["PHP_SELF"];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Try to show the saved html in the database</title>
</head>

<body>
<?php
$maxRows_showSavedseeWhatseeWhat = 10;
$pageNum_showSavedseeWhatseeWhat = 0;
if (isset($_GET['pageNum_showSavedseeWhatseeWhat'])) {
  $pageNum_showSavedseeWhatseeWhat = $_GET['pageNum_showSavedseeWhatseeWhat'];
}
$startRow_showSavedseeWhatseeWhat = $pageNum_showSavedseeWhatseeWhat * $maxRows_showSavedseeWhatseeWhat;

mysql_select_db($database_anothertry, $anothertry);
$query_showSavedseeWhatseeWhat = "SELECT body FROM outPutter";
$query_limit_showSavedseeWhatseeWhat = sprintf("%s LIMIT %d, %d", $query_showSavedseeWhatseeWhat, $startRow_showSavedseeWhatseeWhat, $maxRows_showSavedseeWhatseeWhat);
$showSavedseeWhatseeWhat = mysql_query($query_limit_showSavedseeWhatseeWhat, $anothertry) or die(mysql_error());
$row_showSavedseeWhatseeWhat = mysql_fetch_assoc($showSavedseeWhatseeWhat);

if (isset($_GET['totalRows_showSavedseeWhatseeWhat'])) {
  $totalRows_showSavedseeWhatseeWhat = $_GET['totalRows_showSavedseeWhatseeWhat'];
} else {
  $all_showSavedseeWhatseeWhat = mysql_query($query_showSavedseeWhatseeWhat);
  $totalRows_showSavedseeWhatseeWhat = mysql_num_rows($all_showSavedseeWhatseeWhat);
}
$totalPages_showSavedseeWhatseeWhat = ceil($totalRows_showSavedseeWhatseeWhat/$maxRows_showSavedseeWhatseeWhat)-1;

mysql_select_db($database_anothertry, $anothertry);
$query_vinylComms = "SELECT * FROM commsVinyl";
$vinylComms = mysql_query($query_vinylComms, $anothertry) or die(mysql_error());
$row_vinylComms = mysql_fetch_assoc($vinylComms);
$totalRows_vinylComms = mysql_num_rows($vinylComms);

$queryString_showSavedseeWhatseeWhat = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_showSavedseeWhatseeWhat") == false && 
        stristr($param, "totalRows_showSavedseeWhatseeWhat") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_showSavedseeWhatseeWhat = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_showSavedseeWhatseeWhat = sprintf("&totalRows_showSavedseeWhatseeWhat=%d%s", $totalRows_showSavedseeWhatseeWhat, $queryString_showSavedseeWhatseeWhat);
echo $showSavedseeWhat;
?>
<?php echo ($startRow_showSavedseeWhatseeWhat + 1) ?><?php echo $totalRows_showSavedseeWhatseeWhat ?><?php echo $row_showSavedseeWhatseeWhat['body']; ?>
<?php do { ?>
<div id="showStuff">
<?php
									$templateName = $_POST['templateName'];
										if ($templateName == "card") {
											include('partsOut/preCards.php');
										}
										if ($templateName == "default") {
											include('partsOut/preDefault.php');
										}
										if ($templateName == "blue") {
											include('partsOut/preB.php');
										}
										if ($templateName == "blueGreen") {
											include('partsOut/preBlueGreen.php');
										}
										if ($templateName == "yellow") {
											include('partsOut/preY.php');
										}	
										if ($templateName == "soldier") {
											include('partsOut/preS.php');
										}		
										if ($templateName == "trains") {
											include('partsOut/preTrains.php');
										}		
									?></div>
<?php } while ($row_showSavedseeWhatseeWhat = mysql_fetch_assoc($showSavedseeWhatseeWhat)); ?>
<a href="<?php printf("%s?pageNum_showSavedseeWhatseeWhat=%d%s", $currentPage, min($totalPages_showSavedseeWhatseeWhat, $pageNum_showSavedseeWhatseeWhat + 1), $queryString_showSavedseeWhatseeWhat); ?>">Next</a>
</body>
</html>
<?php
mysql_free_result($showSavedseeWhatseeWhat);

mysql_free_result($vinylComms);
?>
