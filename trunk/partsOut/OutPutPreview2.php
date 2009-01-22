<?php
$boxes2 = $_POST["boxes2"];
if ($boxes2 != "") {
include('styles1.php');
}
?>
<style type="text/css">
<!--
.rt {
	background-image: url(../images/t2/54-copy_14.png);
	background-repeat: no-repeat;
	background-position: right top;
}
-->
</style>

<table width="844" height="255" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="whole" id="whole">
  <tr >
	<td colspan="3"><a name="top"></a>
<?php
include("descript2.php");
?>
  <tr valign="top"><td align="center">
<?php
	$boxes200 = $_POST["boxes200"];
	if ($boxes200 != "") {
	include('newListings2.php');
	}
?></td>
<td align="center">
<?php
	$boxes4 = $_POST["boxes4"];
	if ($boxes4 != "") {
//	echo "suck some tits";
	include('info/commentkeyVert.php');
	}
?></td>
<td align="right" background="../images/t2/54-copy_14.png" class="rt"><?php
	$boxes3 = $_POST["boxes3"];
	if ($boxes3 != "") {
	include('info/g1p2.php');
	}
?></td>
</tr>
  <tr valign="top">
    <td colspan="3" align="center"><?php
	$boxes5 = $_POST["boxes5"];
	if ($boxes5 != "") {
	include('feeds.php');
	}
?></td>
  </tr>

<?php
	$boxes6 = $_POST["boxes6"];
	if ($boxes6 != "") {
	include('grading.php');
	}
?>
<br><div align="center"><a href="#top" style="text-decoration:none;">Back to Top</a></div>
<?php
include("formOuts/catBoxes.php");
?>

  
  </tr>
</table>
<div align="center"><a href="#top" style="text-decoration:none;">Back to Top</a></div>
<!-- INCLUDE OR NOT TLHC TAG -->
<?php
//include('cheaterTag.php');
?>