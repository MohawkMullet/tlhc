<table width="840" border="0" align="center" cellpadding="0" cellspacing="0" id="mainInfo" class="plug">
<tr>
<td align="left" valign="top" style="padding-top:20px">
<div align="left">
<?php include('formOuts/imagePicasaOut.php'); ?>
</div>
<br>
<font color="#ffffff" size="1">
<?php echo date('m/d/Y h:i:s A'); ?>
</font></td>
<td width="500" align="center" valign="top">
<table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="490" height="20"><img src="../images/t4/yT.png" width="489" height="20"></td>
</tr>
<tr>
<td height="106" valign="top" bgcolor="#FFD65E" class="bldG">
<span class="blueFontBold">
<?php 
if ($performer != "ARTIST OR BAND") {
	echo "$performer";
	} 
?>
</span>
<?php 
include('formOuts/artistsOut.php');
include('formOuts/sideAbOut.php');
include('formOuts/labelNnumOut.php');
?>
</td>
</tr>
<tr>
<td height="20"><img src="../images/t4/yB.png" width="490" height="20"></td>
</tr>
</table>
<br>
<table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="490" height="20"><img src="../images/t4/greenT.png" width="489" height="20"></td>
</tr>
<tr>
<td height="98" class="bld" bgcolor="#FFA443">
<?php
include('formOuts/gradeOut2.php');
include('formOuts/abbrevsOut.php');
echo "<span class='greyFont'>Comments:</span><br>";
include('formOuts/reusableOut.php');
echo "<br>";
include("formOuts/songInfoOut.php");
?>
</td>
</tr>
<tr>
<td><img src="../images/t4/greenB.png" width="490" height="20"></td>
</tr>
</table>
</td>
</tr>
</table>
<?php 
include('../styleY.php');
//include('../../parts/config.php'); 
?>
