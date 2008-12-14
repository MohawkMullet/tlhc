
<html>
<head>
<?php
		include('parts/tlhcVersion.php');
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
<!--Link the CSS style  sheet that styles the tabbed panel-->
<link href="parts/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<!--Link the Spry TabbedPanels JavaScript library-->
<script src="parts/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<style type="text/css">
<!--
.style2 {
	font-size: 18px;
	font-weight: bolder;
	font-family: "Courier New", Courier, mono;
	margin-top: 4px;
	color: #333333;
}
.style4 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #333333;
	font-style: italic;
	font-variant: small-caps;
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
<div align="center" class="style2">TurboLister &lt;html&gt; Cheater v
  <?php
echo $version
?>
	<!--Create the Tabbed Panel widget and assign classes to each element-->
</div>
<div class="TabbedPanels" id="TabbedPanels1">
		<ul class="TabbedPanelsTabGroup">
			<li class="TabbedPanelsTab">Basic Listing</li> 
			<li class="TabbedPanelsTab">Advanced</li> 
			<li class="TabbedPanelsTab">Update Drawers</li> 
			<li class="TabbedPanelsTab">About TLhC</li>

			
		</ul>
		<div class="TabbedPanelsContentGroup">
		  <div class="TabbedPanelsContent">
			  <div>

			<?php
				include('inMain2.php');			
			?>
			  </div>
		  </div> 
			<div class="TabbedPanelsContent">
			Setup MySQL for using stored Comments.
<?php
 //include('inMainPunk.php');	
 ?>
			</div>
			<div class="TabbedPanelsContent">			<?php			
				include('inDrawers.php');			
			?></div>
			<div class="TabbedPanelsContent">
<?php
include('parts/mainTab.php');
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