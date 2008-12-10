<?php
include('parts/config.php');
?>
<table cellpadding="4" cellspacing="0" border="4" bgcolor="#d9d9d9" width="100%" style="border-bottom-width: 0px; border-top-width: 0px; border-right-width:0px;"  id="descript">
  <caption class="blueFontBold" style="font-size-adjust:0.7;"><em><strong><?php
  echo $storeName
  ?></strong></em></caption>
		<tr>
			<th colspan="3"  bgcolor="#7d7d7d" scope="col" style="font:bolder; color:#ffffff; font-size:16px; border-style:groove; border-top-width:0px; border-bottom-width:2px; border-right-width:0px; border-top-width:2px; border-left-width:0px; border-color:#dcdcdc; background-color: #666666; layer-background-color: #666666; border: 1px none #000000;">
					<?php
						include('formOuts/titleOut.php');
					?>  
		  </th>
		</tr>
		<tr>
<?php
include('formOuts/picasaImageOut.php');
?>
			<td align="left" valign="top" bgcolor="#d9d9d9" style="border-left-width:0px; border-top-width:0px; border-right-width:4px;">
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
					
			</td>   
			<td valign="top" bgcolor="#cccccc" style="border-right-width:0px; border-top-width:0px; border-bottom-width:0px;"> 		
					<?php
						include("formOuts/rightLogoTable.php");
					?>
					<font color="#cccccc" size="1"><?php include('dateTime.php'); ?></font>
			</td>
		</tr>
</table>