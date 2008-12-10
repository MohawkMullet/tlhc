<?php
$boxes2 = $_POST["boxes2"];
if ($boxes2 != "") {
include('styles.php');
}
?>
<table width="100%" cellspacing="6" id="whole" class="whole">
  <tr>
	<td bordercolor="#1C2C53"><a name="top"></a>
<?php
include("descript3.php");
?>
<br>
<table cellpadding="0" cellspacing="0" align="center" width="100%" id="blockOutBG" style="border-width:medium; border-color:#282828; border-style:groove;>
<tr align="center">
<td width="100%" bgcolor="#cccccc">
<?php
	$boxes200 = $_POST["boxes200"];
	if ($boxes200 != "") {
	include('rss5.php');
	}
?>
<?php
	$boxes6 = $_POST["boxes6"];
	if ($boxes6 != "") {
	include('relItems2.php');
	}
?>
<?php
	$boxes3 = $_POST["boxes3"];
	if ($boxes3 != "") {
	include('about.php');
	}
?>
<?php
	$boxes4 = $_POST["boxes4"];
	if ($boxes4 != "") {
	include('gradeandkeytable.php');
	}
?>
</td>
</tr>
</table>
<br><div align="center"><a href="#top" style="text-decoration:none;">Back to Top</a></div>
<?php
include("formOuts/catBoxes.php");
?>
<?php
	$boxes5 = $_POST["boxes5"];
	if ($boxes5 != "") {
	include('feeds.php');
	}
?>
  </td>
  </tr>
</table>
<div align="center"><a href="#top" style="text-decoration:none;">Back to Top</a></div>
<div align="center"><img src=" http://i5.ebayimg.com/03/i/001/21/72/d5b0_1_bo.JPG"><br>
<font face="Arial,Helvetica" size="2">Powered by <a href="http://code.google.com">TL html Cheater</a>.<br>
The Free as in Freedom (GPLv3) HTML tool.  List your items fast and easy and manage your active items.</font></div>
<hr>