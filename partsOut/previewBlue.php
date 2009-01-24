<?php
$boxes2 = $_POST["boxes2"];
if ($boxes2 != "") {
include('stylesBlue.php');
}
?>

<table width="844" height="255" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="whole" id="whole">
  <tr >
	<td width="644" colspan="3"><a name="top"></a>
<?php
include("descriptBlue.php");
?>
  
  <tr valign="top">
    <td colspan="3" align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="200" align="left" valign="top"><?php
	$boxes200 = $_POST["boxes200"];
	if ($boxes200 != "") {
	include('newListingsBlue.php');
	}
?></td>
        <td width="220" align="center" valign="top"><?php
	$boxes4 = $_POST["boxes4"];
	if ($boxes4 != "") {
//	echo "suck some tits";
	include('info/commentkeyBlue.php');
	}
?></td>
        <td width="423" align="right" valign="top">

          <span>
          <?php
	$boxes3 = $_POST["boxes4"];
	if ($boxes4 != "") {
	include('info/gradesBlue.php');
	}
?>
          </span>
          <br>
           <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td>
              <?php
	$boxes3 = $_POST["boxes3"];
	if ($boxes3 != "") {
	include('aboutBlue.php');
	}
?>              </td>
            </tr>
          </table>
          </td>
      </tr>
    </table></td>
  </tr>
  <tr valign="top">
    <td colspan="3" align="center"><?php
	$boxes5 = $_POST["boxes5"];
	if ($boxes5 != "") {
	include('feedLinksBlue.php');
	}
?></td>
  </tr>

<?php
	$boxes6 = $_POST["boxes6"];
	if ($boxes6 != "") {
	include('grading.php');
	}
?>
<?php
include("formOuts/catBoxes.php");
?>

  
  <td width="200"></tr>
</table>
<div align="center"><a href="#top" style="text-decoration:none;">Back to Top</a></div>


<?php
include('cheaterTag.php');
?>