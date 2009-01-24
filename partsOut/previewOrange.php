<?php
$boxes2 = $_POST["boxes2"];
if ($boxes2 != "") {
include('stylesBlue.php');
}
?>
<table align="center" cellspacing="6" class="whole" id="whole">
  <tr>
	<td><a name="top"></a>
<?php
include("descriptOrange.php");
?>
<br>
<?php
	$boxes200 = $_POST["boxes200"];
	if ($boxes200 != "") {
	include('newListingsDefault.php');
	}
?>

<?php
	$boxes6 = $_POST["boxes6"];
	if ($boxes6 != "") {
//	echo "suck some tits";
	include('info/storelinks.php');
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
	include('grading.php');
	}
?>
<br><div align="center"><a href="#top" style="text-decoration:none;">Back to Top</a></div>
<?php
include("formOuts/catBoxes.php");
?>
<?php
	$boxes5 = $_POST["boxes5"];
	if ($boxes5 != "") {
	include('feedLinksDefault.php');
	}
?>
  </td>
  </tr>
</table>
<div align="center"><a href="#top" style="text-decoration:none;">Back to Top</a></div>
<!-- INCLUDE OR NOT TLHC TAG -->
<?php
//include('cheaterTag.php');
?>