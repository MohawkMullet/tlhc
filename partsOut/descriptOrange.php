<?php
//include_once( ../parts/db/tlhcConnect.php);
include('parts/config.php');
?>
<table width="840" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top" class="greyFontLarge" style="padding-top:5px">
    				  <div align="center">
    				    <?php
						include('formOuts/picasaImageOut2.php');
					?></div>
    				    <br>
    				    <font color="#ffffff" size="1">
		                <?php 
					echo date('m/d/Y h:i:s A');
 					?>
			      </font></td>
    <td width="500" align="center" valign="top">
    <table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="490" height="20"><img src="http://lh5.ggpht.com/_W_e1PG0tXUk/SYBSEwThpWI/AAAAAAAAArc/41Qiu2x_O-Y/s800/greenT.jpg" width="489" height="20"></td>
  </tr>
  <tr>
    <td height="106" valign="top" bgcolor="#4BA614" class="bldG">
    <span class="blueFontBold"><?php
//$listingMast = substr($listingMast, 0, 42);
echo "$performer";
?></span>
      <?php
include('formOuts/artistsOut.php');
?>
      <?php
include('formOuts/sideAb.php');
?>
      <?php
include('formOuts/labelNnum.php');
?></td>
  </tr>
  <tr>
    <td height="20"><img src="http://lh5.ggpht.com/_W_e1PG0tXUk/SYBSFMBI7NI/AAAAAAAAArk/OlyrCl-Jb7s/s800/greenB.jpg" width="490" height="20"></td>
  </tr>
</table>
<br>
<table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="490" height="20"><img src="http://lh4.ggpht.com/_W_e1PG0tXUk/SYBSJAhD-UI/AAAAAAAAAs8/xb2JovsCFWI/s800/box1_03.jpg" width="489" height="20"></td>
  </tr>
  <tr>
    <td height="98" class="bld" bgcolor="#4C81B7"><?php
include('formOuts/gradeOut.php');
?>
      <?php
include('formOuts/notesOut.php');
?>
<?php
echo "<span class='greyFont'>Comments:</span><br>";
include('formOuts/commsOut.php');
?>
      <br>
      <?php
include("formOuts/songInfo2.php");
?></td>
  </tr>
  <tr>
    <td><img src="http://lh4.ggpht.com/_W_e1PG0tXUk/SYBSJqfNeFI/AAAAAAAAAtE/inUmC6g-fcc/s800/box1_06.jpg" width="489" height="19"></td>
  </tr>
</table>
    </td>
  </tr>
</table>
