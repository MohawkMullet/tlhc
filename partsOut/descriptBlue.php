<?php
//include_once( ../parts/db/tlhcConnect.php);
include('parts/config.php');
?>
<table width="844" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="43" colspan="5" align="left" valign="bottom" background="../images/t2/54_02.png"><strong>
      <span class="blueFontBold" style="font-size-adjust:0.6; text-align:left;"><strong>
      <a href="http://hepvinyl.com"><img src="http://lh6.ggpht.com/_W_e1PG0tXUk/STT6iOiFxsI/AAAAAAAAAH4/mJEonzm0ob0/s144/preview_32x32.png" alt="HEPVINYL.COM" hspace="5" vspace="0" border="0" align="absbottom" title="Check out More 45's at HEPVINYL.COM"></a>
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
                    include('formOuts/titleOut.php');
                ?>    </span>  

<?php

include('formOuts/artistsOut.php');
include('formOuts/sideAb.php');
?>     
    <?php
						include('formOuts/labelNnum.php');
					?>
                    
		  <?php
						include('formOuts/gradeOut.php');
					?>         
				  <?php
						include('formOuts/commsOut.php');
					?>
				  <?php
						include('formOuts/notesOut.php');
					?>
				  <br>
				  <?php
						include("formOuts/songInfo2.php");
					?>
				  <font color="#cccccc" size="1">
    <?php 
					echo date('m/d/Y h:i:s A');
 					?></font></td>
    <td width="30" valign="top" class="MI">&nbsp;      </td>
<td width="297" align="center" valign="top">
    				  <?php
						include('formOuts/picasaImageOut2.php');
					?>    </td>
    <td width="39" valign="bottom" background="../images/t2/54_07.png" class="r4"><img src="../images/t2/678_07.png" width="39" height="286" align="bottom" /></td>
  </tr>
</table>
