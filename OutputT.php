<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

// initialize a session
//session_start();
?>
<?php
		include('parts/config.php');
?>
<link href="parts/inputForm.css" rel="stylesheet" type="text/css" />
<link href="parts/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TLHC v<?php		echo $version;?>Output</title>
<style type="text/css">

#codeGrabbers {
	position:absolute;
	left:12px;
	top:47px;
	width:300px;
	height:255px;
	z-index:1;
	overflow: visible;
	visibility: visible;
}
#outPrev {
	position:absolute;
	left:10px;
	top:180px;
	width:1000px;
	height:463px;
	z-index:2;
	overflow: auto;
}
a {
	color: #282828;
	font-stretch: wider;
	font-size: 12px;
	font-family: fantasy;
	font-weight: bold;
	text-align: center;
}
textarea {
	line-height: 12px;
	font-size: 12px;
	font-family: arial, helvetica, sans-serif;
	overflow: auto;
}

</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<?php
//include('partsOut/writeToFile.php');
?>

</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
		<div id="Layer1" style="position:absolute; left:226px; top:578px; width:305px; height:63px; z-index:3; overflow: scroll; visibility: hidden;">
		  <?php  include('license.php'); ?>
</div>
<script language="Javascript">
						function selectAll(theField) {
						var tempval=eval("document."+theField)
						tempval.focus()
						tempval.select()
						}
		</script>
<div id="codeGrabbers">
<form name="test2">
				<span class="TabbedPanelsTab"><a href="javascript:selectAll('test2.select2')">Grab the Title</a></span><br>
						<input name="select2" type="text" value="
								<?php
include('partsOut/formOuts/titleOut.php');
								?>
						" size="55">
		</form>
		
		<form name="test">
				<span class="TabbedPanelsTab"><a href="javascript:selectAll('test.select1')">Grab the Code</a></span><br />
						<textarea name="select1" cols="100" rows="4" wrap="VIRTUAL">
<?php
$templateName = $_POST['templateName'];
if ($templateName == "default") {
include('partsOut/previewDefault.php');
}
	if ($templateName == "blue") {
		include('partsOut/previewBlue.php');
	}
if ($templateName == "orange") {
	include('partsOut/previewOrange.php');
}
//	include("partsOut/previewBlue.php");
//	include("partsOut/previewOrange.php");

?>
						</textarea>
		</form>
</div>

<div id="outPrev">
<?php
if ($templateName == "default") {
include('partsOut/previewDefault.php');
}
	if ($templateName == "blue") {
		include('partsOut/previewBlue.php');
	}
if ($templateName == "orange") {
	include('partsOut/previewOrange.php');
}
//	include("partsOut/previewDefault.php");
//	include("partsOut/previewBlue.php");
//	include("partsOut/previewOrange.php");

?>
</div>
</body>
</html>