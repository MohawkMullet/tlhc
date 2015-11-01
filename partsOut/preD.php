<?php
$boxes2 = $_POST["boxes2"];
if ($boxes2 != "") {
include('styleD.php');
}
?>
<table cellspacing="6" id="whole" class="whole">
  <tr>
	<td><a name="top"></a>
<?php
include("descriptD.php");
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
	include('staticPages/storelinks.php');
	}
?>
<?php
	$boxes3 = $_POST["boxes3"];
	if ($boxes3 != "") {
	include('staticPages/about.php');
	}
?>
<?php
	$boxes4 = $_POST["boxes4"];
	if ($boxes4 != "") {
	include('section3.php');
	}
?>
<br><div align="center"><a href="#top" style="text-decoration:none;">Back to Top</a></div>
<?php
include("formOuts/componentsOut.php");
?>
<?php
	$boxes5 = $_POST["boxes5"];
	if ($boxes5 != "") {
	include('footD.php');
	}
?>
  </td>
  </tr>
</table>
<div align="center"><a href="#top" style="text-decoration:none;">Back to Top</a></div>
<!-- INCLUDE OR NOT TLHC TAG -->
<?php
//echo $cheaterTag;
?>