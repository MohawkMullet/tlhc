<table cellpadding="5" cellspacing="2" border="4" bgcolor="#d9d9d9" width="100%" style="border-bottom-width: 0px; border-top-width: 0px; border-right-width:0px;"  id="descript">
  <caption class="blueFont18"><em><strong>Hep Vinyl's Vintage Records</strong></em></caption>
		<tr>
			<th colspan="2"   bgcolor="#1c2d59" scope="col" style="font:bolder; border-top-width:0px; border-bottom-width:0px; border-right-width:0px; border-color:#dcdcdc;">
					<?php
						include('formOuts/titleOut.php');
					?>  
			</th>
		</tr>
		<tr>
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
						include("formOuts/songInfo.php");
					?>
					<font color="#cccccc" size="1"><?php include('dateTime.php'); ?></font>
			</td>
		</tr>
</table>