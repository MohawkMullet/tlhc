<?php
		include("parts/db/tlhcConnect.php");
?>
<?php 
$emptyRow = "<tr><td class=\"RightHandLabels\">&nbsp;</td><td class=\"inputBGstyle\">";
$emptyRowEnd = "</td></tr>";
?>
<!-- START THE FORM -->
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




<form action="Output.php" method="POST" name="basic" target="topOne" id="slapIt" onSubmit="MM_changeProp('slapIt','','fontCase','capitalize','FORM')">
<table width="392" border="0" cellpadding="2" cellspacing="0" class="formTable" id="recInput">
<tr>
    <td width="70" class="LeftLabelColTop">&nbsp;</td>
    <td width="294" class="labelTableTop" align="center">
    <span class="versionNum">Standard 45 </span><a href="#" onMouseOver="MM_showHideLayers('Layer1','','show')">Component Or No</a></td>
</tr>

<?php
		echo	$emptyRow;
		include('partsIn/performerTitle.php');
		echo	$emptyRowEnd;
?>

<?php
		include('partsIn/AnB.php');
?>
<?php
		echo	$emptyRow;
		include('partsIn/LblNoSlvIN2.php');
		echo	$emptyRowEnd;
?>
<?php
		echo	$emptyRow;
		include('partsIn/gradeRadios.php');
		echo	$emptyRowEnd;
?>
<?php
		echo	$emptyRow;
?>
 <div class="CollapsiblePanelTabFake">comment drawers</div>
<?php
		include("partsIn/panels.php");
		echo	$emptyRowEnd;
?>
<?php
		include("partsIn/abrvs.php");
?>
<?php
		include("partsIn/sideBar.php");
?>
<?php
		include("partsIn/linkboxes.php");
?>
<?php
		include("partsIn/picasaImage.php");
?>
<?php
		echo	$emptyRow;
		include("partsIn/checkBoxes.php");
//		echo "&nbsp;";
		echo	$emptyRowEnd;
?>    
  <tr class="unnamed1">
    <td class="bottomLeftLabel">&nbsp;</td>
    <td class="bottomRow">          
<?php
		include("partsIn/buttonsNoClass.php");
?>
    </td>
  </tr>

</table>

<!-- SHOW THE COUNTDOWN LAYER -->
<div id="bombButtons">
<script>
		displaylimit("Input.slapIt.titler","titler",55)
</script>
</div>




</form>