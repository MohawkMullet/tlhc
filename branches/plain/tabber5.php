
<html>
<head>

<?php
		include('parts/tlhcVersion.php');
		include('parts/SpryAssets/includeSpry.php');
		include('parts/clearFields.php');
		include('partsIn/charsRemain.php');
		include('partsIn/charsRemain2.php');
		include('parts/unknownScriptFromInput.php');
?>
<link rel="shortcut icon" href="images/favicon.ico">
<link href="parts/TLhCforms.css" rel="stylesheet" type="text/css" />
<title>TLHC v 
<?php
		echo $version;
?>
 Input
</title>




	<!--Link the CSS style  sheet that styles the tabbed panel-->
	<link href="parts/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
	<!--Link the Spry TabbedPanels JavaScript library-->
	<script src="parts/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><style type="text/css">
<!--
body {
	background-color: #9E9E9E;
}
.style2 {
	font-size: 14px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	margin-top: 4px;
}
-->
</style></head> 
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center" class="style2">TurboLister &lt;html&gt; Cheater v
  <?php
echo $version
?>
	<!--Create the Tabbed Panel widget and assign classes to each element-->
</div>
<div class="TabbedPanels" id="TabbedPanels1">
		<ul class="TabbedPanelsTabGroup">
			<li class="TabbedPanelsTab">Welcome!</li>
			<li class="TabbedPanelsTab">Basic</li> 
			<li class="TabbedPanelsTab">ADVANCED</li> 
			<li class="TabbedPanelsTab">Update Drawers</li> 
			
		</ul>
		<div class="TabbedPanelsContentGroup">
			<div class="TabbedPanelsContent">
<?php
include('parts/firstTab.php');
?>	<br>
			<br><hr>		
			</div> 
			<div class="TabbedPanelsContent">
			<?php
				include('mainIn.php');			
			?>
			</div>
			<div class="TabbedPanelsContent"><?php include('punkIn.php');	?></div>
			<div class="TabbedPanelsContent">
			<?php			
				include('drawersIn.php');			
			?>
			</div> 
			
		</div> 
</div>
<!--Initialize the Tabbed Panel widget object-->
<script type="text/javascript">
	var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script> 
<div align="center">
<?php  include('license.php'); ?>
</div>
</body>
</html>