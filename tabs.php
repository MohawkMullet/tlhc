<html>
<head>
<?php
		include('parts/config.php');
		include('parts/SpryAssets/includeSpry.php');
		include('parts/clearFields.php');
		include('partsIn/charsRemain.php');
		include('partsIn/charsRemain2.php');
?>
<link rel="shortcut icon" href="images/favicon.ico">
<link href="parts/inputForm.css" rel="stylesheet" type="text/css" />
<title>TLHC v
<?php
		echo $version;
?>
Input</title>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<!--Link the CSS style  sheet that styles the tabbed panel-->
<link href="parts/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<!--Link the Spry TabbedPanels JavaScript library-->
<script src="parts/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<style type="text/css">
<!--
.appName {
	font-size: 18px;
	font-weight: bolder;
	font-family: "Courier New", Courier, mono;
	margin-top: 4px;
	color: #FFFFFF;
}
-->
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
</head> 
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center" class="appName">TurboLister &lt;html&gt; Cheater v
  <?php
echo $version;
echo "<br>";
//include('partsIn/menu.php');
?>
	<!--Create the Tabbed Panel widget and assign classes to each element-->
</div>
<div class="TabbedPanels" id="TabbedPanels1">
		<ul class="TabbedPanelsTabGroup">
			<li class="TabbedPanelsTab">Basic 45</li> 
		  <li class="TabbedPanelsTab">Punk & or EP</li> 
		  <li class="TabbedPanelsTab">Update Drawers</li> 
		  <li class="TabbedPanelsTab">About TLhC</li>

			
  </ul>
		<div class="TabbedPanelsContentGroup">
		  <div class="TabbedPanelsContent">
			  <div>

			<?php
				include('tabMain.php');			
			?>
			  </div>
		  </div> 
			<div class="TabbedPanelsContent">
<?php include('tabPunk.php');	?>
			</div>
			<div class="TabbedPanelsContent">			
			<?php			
				include('tabAddComms.php');			
			?></div>
			<div class="TabbedPanelsContent">
<?php
include('parts/aboutTLhC.php');
?>
			</div> 
			
		</div> 
</div>
<!--Initialize the Tabbed Panel widget object-->

<div align="left">
  <script type="text/javascript">
	var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script> 
  </div>
</body>
</html>