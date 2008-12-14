<?php
//include_once( ../parts/db/tlhcConnect.php);
include('parts/config.php');
?>
<style type="text/css">
<!--
-->
</style>

<table cellpadding="4" cellspacing="0" border="4" bgcolor="#d9d9d9" width="100%" style="border-bottom-width: 0px; border-top-width: 0px; border-right-width:0px;"  id="descript" align="center">
  <caption class="blueFontBold" style="font-size-adjust:0.8;":><strong>
  <?php
  echo	$storeName;
  ?>
  </strong></caption>
		<tr bgcolor="#1C2D59">
			<th background="http://i17.ebayimg.com/03/i/001/24/73/95d1_1_b.GIF"  bgcolor="#1C2C53" style="font:bolder; color:#ffffff; font-size:16px; border-style:groove; border-top-width:0px; border-bottom-width:2px; border-right-width:0px; border-top-width:2px; border-left-width:0px; border-color:#dcdcdc; border: 1px none #000000;">
					<?php
						include('formOuts/titleOut.php');
					?>  
		  </th>
  </tr>
		<tr>
			<td align="left" valign="top" style="border-color:#666666; border-left-width:1px; border-left-style:solid; border-top-width:0px; border-right-width:4px;">
					<?php
						include('formOuts/picasaImageOut2.php');
					?>
					<?php
						include('formOuts/artistsOut.php');
					?>  					
					<?php
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
					<font color="#cccccc" size="1"><?php include('dateTime.php'); ?></font>
		</tr>
</table>