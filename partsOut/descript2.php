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
	background-image: url(../images/t2/54_03.png);
	background-position: right top;
	background-repeat: no-repeat;
}
.r4 {
	background-image: url(../images/t2/54_07.png);
	background-repeat: repeat-x;
	background-position: right top;
}
.desc {
	background-image: url(../images/t2/descript_02.png);
	background-repeat: repeat-x;
	background-position: center top;
}
.rthj {
	background-image: url(../images/t2/54-copy_09.png);
	background-position: left 289px;
}
-->
</style>

<link href="styles1.php" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#apDiv1 {
	position:static;
	left:315px;
	top:317px;
	width:440px;
	height:32px;
	z-index:1;
}
body {
	background-repeat: no-repeat;
}
-->
</style>
<table width="844" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="43" colspan="5" align="left" valign="bottom" background="../images/t2/54_02.png"><strong>
      <span class="blueFontBold" style="font-size-adjust:0.6; text-align:left;"><strong>
      <?php
  echo	$storeName;
  ?>
      </strong></span>
 

  </strong></td>
  </tr>
  <tr>
    <td width="37" valign="top" background="../images/t2/54_03.png" class="leftImg"><img src="../images/t2/54_03.png" width="37" height="286" /></td>
    <td width="441" valign="top" background="../images/t2/54-copy_09.png" class="desc" style="padding-top:4px">     <span class="greyFontLarge">      
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
