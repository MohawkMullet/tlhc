<?php
//include_once( ../parts/db/tlhcConnect.php);
include('parts/config.php');
?>
<style type="text/css">
<!--
-->
</style>

<table cellpadding="0" cellspacing="0" border="0" bgcolor="#d9d9d9" width="100%" style="border-bottom-width: 0px; border-top-width: 0px; border-right-width:0px;"  id="descript" align="center">
  <caption class="blueFontBold" style="font-size-adjust:0.8;":><strong>
  <?php
  echo	$storeName;
  ?>
  </strong></caption>
		<tr bgcolor="#1C2D59">
			<td background="http://i2.ebayimg.com/06/i/001/24/73/95f7_1_b.GIF"  bgcolor="#1C2C53" style="font:bolder; color:#ffffff; font-size:16px;" height="28px">
					<div align="center"><strong><?php
						include('formOuts/titleOut.php');
					?>  </strong></div>
		  </td>
  </tr>
		<tr>
			<td align="left" valign="top" style="padding:4px;">
			/***
			*
			* Had to do some work on the images in july 2013.  Watch for this imagePicasaOut2.php file.
			* Its much simpler now than when I had that fucking script doing all that stripping of the input
			*
			*/
					<?php
					// Here is your pic you upload.  I will test with flickr and other services too
						include('formOuts/imagePicasaOut2.php');
					?>
					<?php
						include('formOuts/artistsOut.php');
					?>  					
					<?php
						include('formOuts/sideAbOut.php');
					?>     
					<?php
						include('formOuts/labelNnumOut.php');
					?>        
					<?php
						include('formOuts/gradeOut2.php');
					?>         
					<?php
						include('formOuts/reusableOut.php');
					?>
					<?php
						include('formOuts/abbrevsOut.php');
					?>
					<br>
					<?php
						include("formOuts/songInfoOut.php");
					?>
					<font color="#cccccc" size="1"><?php include('dateTime.php'); ?></font>
			</td>
		</tr>
</table>