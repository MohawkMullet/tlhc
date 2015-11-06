<?php
$tabName = "trainsTab";
?>
<script>
  $(document).ready(function(){
		$( "input" ).addClass( "ui-corner-all" );
  });
</script>
<script>
  $(document).ready(function(){
		$( "legend" ).addClass( "ui-corner-all pane" );
		$( "button" ).addClass( "ui-corner-all" );
  });
</script>

<form name="tForm" method="post" action="right.php?showOut=True" target="mainFrame" title="trainForm" class="tooltip">
 <input type="hidden" name= "itemType" value="trains">
<input type="hidden" name= "templateName" value="trains">
<input type="hidden" name= "boxes2" value="boxes2">
<?php // include('partsIn/themeChooser.php'); ?>
					<fieldset>
							<legend>Title:</legend>
									<input name="tTitle" type="text" id="tTitle" size="32" />
					</fieldset>
					<fieldset>
							<legend>Brand:</legend>
									<input name="brand" type="text" size="32" />
					</fieldset>
					<fieldset>
							<legend>Part #<a href="#" class="fg-button fg-button-icon-solo delete" title="Close this section"><span class="ui-icon ui-icon-close"></span>&nbsp;</a></legend>
									<input name="itemNum" type="text" id="itemNum" size="32">
					</fieldset>
					<fieldset>
							<legend>Manufacturer:</legend>
									 <input name="mfg" type="text" id="mfg" size="32">
					</fieldset>
                    					<fieldset>
							<legend>UPC Bar Code:</legend>
									    <input name="upc" type="text" id="upc" size="32" />
                    					</fieldset>					<fieldset>
							<legend>Rail Line:</legend>
									    <input name="railLine" type="text" id="railLine" size="32" />
                    					</fieldset>
					<fieldset>
						<legend>Scale:</legend>
						  <select name="scale" id="scale" class="ui-corner-all">
						  	<option value="">Scale:</option>
							<option value="HO">HO</option>
							<option value="OO">OO</option>
							<option value="N">N</option>
							<option value="O">O</option>
							<option value="G">G</option>
							<option value="TT">TT</option>
							<option value="Z" class="ui-corner-all">Z</option>
				          </select>
					</fieldset>
					<fieldset>
					  		<legend>Type:</legend>
					  		<input type="text" name="kind">
					</fieldset>
					

<?php 
include('partsIn/condition.php'); 
include('partsIn/mainImage.php');
?>


					<!-- TOSS IN THE MOTHERFUCKING REUSABLE COMMENTS HERE
					STUPID MOTHERFUCKING TABS WIDGETS DON'T FUCKING PLAY WELL WITH OTHER SETS OF TABS.
					THE MOST FRUSTRATING BULLSHIT EVER. -->
					<fieldset>
					<legend>
					Stored Comments:&nbsp;&nbsp;
					<span class="fg-toolbar">
					<a href='parts/midComms.php?showOut=Trains' target='mainFrame' class='fg-button fg-button-icon-left ui-state-default ui-corner-all' title="show all comments">
					<span class='ui-icon ui-icon-document'>
					</span>All</a>
					<a href="partsIn/addCommentsEX.php?showOut=Trains" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all" title="ADD COMMENTS">
					<span class="ui-icon ui-icon-circle-plus"></span>&nbsp;
					</a><a href="docs/reusableComms.php#adding" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all"><span class="ui-icon ui-icon-help">
					</span>&nbsp;</a></span>
					</legend>
							<?php
//								include('partsIn/reusableComms45s.php');
							?>
  </fieldset>
  					<?php
							include('partsIn/reusableCommsTrains.php'); 
							//	include('partsIn/reusableCommsSoldiers.php');
							//	include('partsIn/reusableComms45s.php');
								include("partsIn/components2.php");
					?>
					<!-- INNCLUDE THE FUCKING SUBMIT BUTTONS HERE -->
                    <?php include('partsIn/submit.php'); ?>
					
</form>

