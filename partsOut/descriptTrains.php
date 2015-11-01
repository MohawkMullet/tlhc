<?php
$tTitle = $_POST['tTitle'];
$trainImage = $_POST['trainImage'];
$scale = $_POST['scale'];
$brand = $_POST['brand'];
$railLine = $_POST['railLine'];
$modelNumber = $_POST['modelNumber'];
$type = $_POST['type'];
$kind = $_POST['kind'];
$upc = $_POST['upc'];
$quality = $_POST['quality'];
$features = $_POST['features'];
?>
<table width="810" border="0" align="center" cellpadding="0" cellspacing="0" id="mainInfo">
    <tr>
            <td align="left" valign="top" style="padding-top:20px">
                    <div id="listingPic" align="center">
                    	<?php include('formOuts/trainImageOut.php'); ?>
                    </div>
            </td>
    <td width="500" align="center" valign="top">
    <!-- FIRST TABLE INSIDE FOR ITEM DETAILS -->
    	<table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
    		<tr>
    			<td width="490" height="20">
                	<img src="http://lh5.ggpht.com/_W_e1PG0tXUk/SZjCAymZElI/AAAAAAAAAyQ/Sb-ATHsxILI/s800/yT.jpg" width="489" height="20">
				</td>
    		</tr>
			<tr>
    			<td height="106" valign="top" bgcolor="#FFD65E" class="bgTop">
    				<div class="trainTitle3"><?php echo $tTitle; ?></div>
    				<div class="itemHeaders">Item Details:</div>
						<?php 
							include('formOuts/trainBrandNumOut.php');
							include('formOuts/trainMfgOut.php');
							include('formOuts/trainScaleOut.php');
							include('formOuts/trainRailLineOut.php');
							include('formOuts/trainKindOut.php');
							include('formOuts/trainUpcOut.php');
							echo "<br>";
                        ?>
    				<div class="ui-state-error ui-corner-all" id="outPut">
						<?php
 //                           echo "$brand $scale $railLine $modelNumber $type $grade $features";
                        ?>
					</div>
			  </td>
    		</tr>
    		<tr>
    			<td height="20">
                	<img src="http://lh3.ggpht.com/_W_e1PG0tXUk/SZjCBMyuV6I/AAAAAAAAAyY/9tXB4adR4Tw/s800/yB.jpg" width="490" height="20">
				</td>
    		</tr>
    	</table>
    		<br>
    		<!--SECOND TABLE FOR ITEM CONDITION -->
	  <table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
    		<tr>
    			<td width="490" height="20">
                	<img src="http://lh4.ggpht.com/_W_e1PG0tXUk/SZjCAcyiLBI/AAAAAAAAAx4/S-S8CHyMIoc/s800/greenT.jpg" width="489" height="20">				</td>
    		</tr>
    		<tr>
    			<td height="98" class="bgBottom" bgcolor="#FFA443">
    				<div class="itemHeaders">Item Condition:</div>
						<?php
								include('formOuts/boxInsOut.php');
								//include('formOuts/abbrevsOut.php');
								echo "<span class='greyFont'>Comments:</span><br>";
								include('formOuts/reusableOut.php');
								echo "<br>";
								include("formOuts/songInfoOut.php");
						?>    			
				</td>
    		</tr>
    		<tr>
    			<td>
    				<img src="http://lh4.ggpht.com/_W_e1PG0tXUk/SZjCAv8xZLI/AAAAAAAAAyA/n44MpPjkDPs/s800/greenB.jpg" width="490" height="20">				</td>
    		</tr>
   	  </table>
        <!-- BEGIN THIRD TABLE FOR ITEM FEATURES -->
        <table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
    		<tr>
    			<td width="490" height="20">
                	<img src="http://lh5.ggpht.com/_W_e1PG0tXUk/SZjCAymZElI/AAAAAAAAAyQ/Sb-ATHsxILI/s800/yT.jpg" width="489" height="20">				</td>
    		</tr>
			<tr>
    			<td height="106" valign="top" bgcolor="#FFD65E" class="bgTop">
    				<div class="itemHeaders">Other Features:</div>
						<?php 
                        echo "<br>";
//                        echo "<span class='darkH'>$tTitle</span>";
//                        include('formOuts/trainMfgOut.php');
//                        include('formOuts/TbrandNumOut.php');
//                        include('formOuts/TscaleOut.php');
                        ?>
    				<div class="ui-state-error ui-corner-all" id="outPut">
						<?php
 //                           echo "$brand $scale $railLine $modelNumber $type $grade $features";
                        ?>
					</div>				</td>
    		</tr>
    		<tr>
    			<td height="20">
                	<img src="http://lh3.ggpht.com/_W_e1PG0tXUk/SZjCBMyuV6I/AAAAAAAAAyY/9tXB4adR4Tw/s800/yB.jpg" width="490" height="20">				</td>
    		</tr>
    	</table>
    </td>
    </tr>

</table>		<?php 
						include('footTrains.php'); 
						echo "you fucking bitch";
					?>

            			                    <font color="#ffffff" size="1">
                    	<?php echo date('m/d/Y h:i:s A'); ?>
                    </font>
