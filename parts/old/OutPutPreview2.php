<?php
	$boxes2 = $_POST["boxes2"];
	if ($boxes2 != "") {
	include('styles.php');
	}
?>

<table width="100%" cellspacing="6" id="whole" class="whole">
  <tr>
	<td><a name="top"></a>

<?php
include("descript.php");
?>
<br>
<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" id="blockOutBG" class="lowerencasement">
<tr align="center">
<td width="100%" bgcolor="#cccccc">
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
//include("gradeandkeytable.php");
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
//include("feeds.php");
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
<a href="">Save Me</a>