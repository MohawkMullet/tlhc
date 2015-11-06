<?php require_once('Connections/anothertry.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "txtBoxHTMLout")) {
  $insertSQL = sprintf("INSERT INTO outPutter (id, body) VALUES (%s, %s)",
                       GetSQLValueString($_POST['selectIt'], "int"),
                       GetSQLValueString($_POST['selectIt'], "text"));

  mysql_select_db($database_anothertry, $anothertry);
  $Result1 = mysql_query($insertSQL, $anothertry) or die(mysql_error());

  $insertGoTo = "showSaved.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<script language="Javascript">
						function selectAll(theField) {
						var tempval=eval("document."+theField)
						tempval.focus()
						tempval.select()
						}
</script>
<div id="titlePaster" class="ui-state-error ui-corner-all" style="float:left; clear:both; border-width:thick; border-style:groove; margin:3px; padding:10px; display:block;">
		<div class="ui-state-active ui-corner-all" style="margin:4px; padding:10px; border-width:thick; border-style:double; display:block;">
				<form name="test2" style="float:left; clear:both;">
						 <button class="buttonBack ui-corner-all" style="float:left; clear:none;">
						 <a href="javascript:selectAll('test2.select2')">
						Select Title:
						<span class="ui-icon silk-icon-arrow-down" style="display:inline;"></span>
						 </a>
						 </button>
  						<input name="select2" class="ui-state-default ui-corner-all" type="text" value="<?php include('partsOut/formOuts/titleOut.php'); ?>" size="40" style="float:left; clear:right; display:inline;" />
				</form>
		</div>
</div>
<div id="htmlPaster" class="ui-state-error ui-corner-all" style="float:left; clear:both; border-width:thick; border-style:groove; margin:3px; padding:10px; display:block;">
		<div class="ui-state-active ui-corner-all" style="margin:4px; padding:10px; border-width:thick; border-style:double; display:block;">
<form method="POST" action="<?php echo $editFormAction; ?>" name="txtBoxHTMLout" style="float:left; clear:both;">
	<button class="buttonBack ui-corner-all" style="float:left; clear:none;"><a href="javascript:selectAll('test.select1')">
	  Select Code:<span class="ui-icon silk-icon-arrow-down" style="display:inline-block;"></span>	</a></button>
    <textarea name="selectIt" cols="120" rows="36" wrap="VIRTUAL" style="float:left; clear:both;">
								<?php
								$templateName = $_POST['templateName'];
								$itemType = $_POST['itemType'];
									echo "$templateName is the template you chose";
									echo "$itemType is the form you are outputting";
									if ($templateName == "default") {
										include('partsIn/partsOut/preDefault.php');
									}
									if ($templateName == "blue") {
										include('partsIn/partsOut/preB.php');
									}
									if ($templateName == "blueGreen") {
										include('partsIn/partsOut/preBlueGreen.php');
									}
									if ($templateName == "yellow") {
										include('partsIn/partsOut/preY.php');
									}	
									if ($templateName == "soldier") {
										include('partsIn/partsOut/preS.php');
									}		
									if ($templateName == "trains") {
										include('partsIn/partsOut/preTrains.php');
									}		
									if ($templateName == "cards") {
										include('partsOut/preCards.php');
									}
								?>
    </textarea>
    <input type="hidden" name="MM_insert" value="txtBoxHTMLout">

<button class="buttonBack ui-corner-all tooltip" style="float:left; clear:left;" type="submit" name="Submit" value="Save A Copy?" title="Put this version of the HTML in the DATABASE">Save to Database?</button>

</form>
</div>
</div>

    <?php
									$templateName = $_POST['templateName'];
										if ($templateName == "card") {
											include('partsOut/preCards.php');
										}
										if ($templateName == "default") {
											include('partsOut/preDefault.php');
										}
										if ($templateName == "blueOld") {
											include('partsOut/preBlueOld.php');
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
	?>