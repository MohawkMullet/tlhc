<?php
//include_once( ../parts/db/tlhcConnect.php);
include('parts/config.php');
?>
<style type="text/css">
<!--
.unnamed1 {
	background-image: url(../images/Untitled-1.gif);
	background-repeat: no-repeat;
	background-position: left top;
}
.rightImg {
	background-image: url(../images/right_02.png);
	background-repeat: no-repeat;
	background-position: right top;
}
.leftImg {
	background-image: url(../images/left_01.png);
	background-position: right top;
}
.r4 {
	background-image: url(../images/t2/54_07.png);
	background-repeat: repeat-x;
	background-position: right top;
}
-->
</style>

<table cellpadding="0" cellspacing="0" border="0" width="752" style="border-bottom-width: 0px; border-top-width: 0px; border-right-width:0px;"  id="descript" align="center">
  <caption class="blueFontBold" style="font-size-adjust:0.4; text-align:left;"><strong>
  <?php
  echo	$storeName;
  ?>
  </strong></caption>
		<tr>
		  <td width="28" rowspan="2" class="leftImg" style="font:bolder; font-size:16px;">&nbsp;</td>
			<td width="697" height="60"  class="unnamed1" style="font:bolder; font-size:16px;">
					<div align="center" class="blueFontBold"><strong>
				    <?php
						include('formOuts/titleOut.php');
					?>
</strong></div>
		  </td>
            <td width="26" rowspan="2" background="../images/Untitled-1.gif" class="rightImg" style="font:bolder; font-size:16px;"><p>&nbsp;</p>
            <p>&nbsp;</p></td>
  </tr>
		<tr>
		  <td align="left" valign="top" style="padding:4px;">
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
				  <font color="#cccccc" size="1">
				  <?php 
					echo date('m/d/Y h:i:s A');
 					?></font>
			</td>
	    </tr>
</table>
<p>&nbsp;</p>
