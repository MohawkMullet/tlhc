<?php
$tabName = "cardsTab";
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

<form name="tForm" method="post" action="right.php?showOut=True" target="mainFrame" title="cardForm">
<input type="hidden" name= "templateName" value="card">
<input type="hidden" name= "boxes5" value="boxes5">
<input type="hidden" name= "boxes2" value="styleSheet">

<?php  include('partsIn/themeChooser.php'); ?>
					<fieldset>
							<legend>Ebay Listing Title:</legend>
									<input name="tTitle" type="text" id="tTitle" size="32" />
					</fieldset>
					<fieldset>
							<legend>OEM:</legend>
									<input name="brand" type="text" size="32" />
					</fieldset>
					<fieldset>
							<legend>Item #<a href="#" class="fg-button fg-button-icon-solo delete" title="Close this section"><span class="ui-icon ui-icon-close"></span>&nbsp;</a></legend>
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

					</fieldset>
					<fieldset>
					  		<legend>Card Type:</legend>
					  		<input type="text" name="kind">
					</fieldset>
					
					<p>Item Condition:</p>
					<p>
					  <label>
					  <input type="checkbox" name="origBox" value="origBox">
					  Original Box</label>
Inc.					  
<label>
					  <input type="checkbox" name="origIns" value="origIns">
					  Original Instruction Sheet </label>
					</p>
<?php include('partsIn/condition.php'); ?>


					<fieldset>
							<legend>Main Image<?php echo $loadRight; ?></legend>
									<input name="picasaImage" type="text" id="picasaImage" size="32" />
					</fieldset>
					<!-- TOSS IN THE MOTHERFUCKING REUSABLE COMMENTS HERE
					STUPID MOTHERFUCKING TABS WIDGETS DON'T FUCKING PLAY WELL WITH OTHER SETS OF TABS.
					THE MOST FRUSTRATING BULLSHIT EVER. -->
					<fieldset>
					<legend>
					Stored Comments:&nbsp;&nbsp;
					<span class="fg-toolbar">
					<a href='parts/midComms.php?showComms=Cards' target='mainFrame' class='fg-button fg-button-icon-left ui-state-default ui-corner-all tooltip' title="Show all card comments" style="padding:3px; margin:4px; height:20px;">
					<span class='ui-icon silk-icon-tag-blue'>
					</span>All</a>
					<a href="partsIn/addCommentsEX.php?showOut=Trains" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip" title="ADD COMMENTS">
					<span class="ui-icon silk-icon-tag-orange"></span>&nbsp;
					</a><a href="docs/reusableComms.php" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip"><span class="ui-icon silk-icon-tag-purple">
					</span>&nbsp;&nbsp;</a></span>
					</legend>
							<?php
								include('partsIn/reusableCommsCards.php');
							?>
  </fieldset>
  					<?php
//								include("partsIn/components2.php");
					?>
					<!-- INNCLUDE THE FUCKING SUBMIT BUTTONS HERE -->
                    <?php
						include('partsIn/songInfo.php');
						include('partsIn/submit.php'); 
					?>
					
</form>

