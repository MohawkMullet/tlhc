<table width="810" border="0" align="center" cellpadding="0" cellspacing="0" id="mainInfo">
<tr>
<td align="left" valign="top" style="padding-top:20px">
<div align="center">
<?php include('formOuts/imagePicasaOut.php'); ?>
</div>
<br>
<font color="#ffffff" size="1">
<?php echo date('m/d/Y h:i:s A'); ?>
</font></td>
<td width="500" align="center" valign="top">
<table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="490" height="20"><img src="http://lh5.ggpht.com/_W_e1PG0tXUk/SZjCAymZElI/AAAAAAAAAyQ/Sb-ATHsxILI/s800/yT.jpg" width="489" height="20"></td>
</tr>
<tr>
<td height="106" valign="top" bgcolor="#FFD65E" class="bgTop">
<span class="blueFontBold">
<?php 
if ($performer != "ARTIST OR BAND") {
	echo "$performer";
	} 
?>
</span>
<?php 
echo "<br>";
echo "<span class='darkH'>$titler</span>";
include('formOuts/artistsOut.php');
include('formOuts/sideAbOut.php');
include('formOuts/labelNnumOut.php');
include('formOuts/howManyOut.php');

?>
</td>
</tr>
<tr>
<td height="20"><img src="http://lh3.ggpht.com/_W_e1PG0tXUk/SZjCBMyuV6I/AAAAAAAAAyY/9tXB4adR4Tw/s800/yB.jpg" width="490" height="20"></td>
</tr>
</table>
<br>
<table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="490" height="20"><img src="http://lh4.ggpht.com/_W_e1PG0tXUk/SZjCAcyiLBI/AAAAAAAAAx4/S-S8CHyMIoc/s800/greenT.jpg" width="489" height="20"></td>
</tr>
<tr>
<td height="98" class="bgBottom" bgcolor="#FFA443">
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
<td><img src="http://lh4.ggpht.com/_W_e1PG0tXUk/SZjCAv8xZLI/AAAAAAAAAyA/n44MpPjkDPs/s800/greenB.jpg" width="490" height="20"></td>
</tr>
</table>
</td>
</tr>
</table>
<?php 
//include('../styleY.php');
//include('../../parts/config.php'); 
?>
