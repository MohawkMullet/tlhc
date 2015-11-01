<?php
//include_once( ../parts/db/tlhcConnect.php);
include('parts/config.php');
?>
<table width="844" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="43" colspan="5" align="left" valign="bottom" background="../images/t2/54_02.png"><strong>
      <span class="blueFontBold" style="font-size-adjust:0.6; text-align:left;"><strong><img src="../images/t3/ra32pxA.png" alt="" width="45" height="32" align="left">
      <?php
  echo	$storeName;
  ?>
      </strong></span>
 

  </strong></td>
  </tr>
  <tr>
    <td width="37" valign="top" background="../images/t2/54_03.png" class="leftImg"><img src="../images/t2/54_03.png" width="37" height="286" /></td>
    <td width="441" valign="top" background="../images/t2/54-copy_09.png" class="desc" style="padding-top:4px">     <span class="greyFontLarge">
    <br>      
<?php
    include('formOuts/9titleOut.php');
?>
</span>  
<?php
	include('formOuts/artistsOut.php');
	include('formOuts/sideAbOut.php');
	include('formOuts/labelNnumOut.php');
	include('formOuts/gradeOut2.php');
	include('formOuts/reusableOut.php');
	include('formOuts/abbrevsOut.php');
	echo "<br>";
	include("formOuts/songInfoOut.php");
	echo "<font color=\"#cccccc\" size=\"1\">";
	echo date('m/d/Y h:i:s A');
	echo "</font>";
?>
</td>
    <td width="30" valign="top" class="MI">&nbsp;      </td>
<td width="297" align="center" valign="top">
    				  <?php
						include('formOuts/imagePicasaOut.php');
					?>    </td>
    <td width="39" valign="bottom" background="../images/t2/54_07.png" class="r4"><img src="../images/t2/678_07.png" width="39" height="286" align="bottom" /></td>
  </tr>
</table>
