
<script language="Javascript">
						function selectAll(theField) {
						var tempval=eval("document."+theField)
						tempval.focus()
						tempval.select()
						}
</script>
<style type="text/css">
.nounderline {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	font-variant: small-caps;
	text-decoration: none;
}
</style>

<div id="collapseSelectors">
		<form name="test2">
		<div id="titleGrab" class="ui-dialog ui-widget-header ui-corner-all ui-state-default" style="padding:3px; font-size:16px; margin:3px; float:left; clear:both;">
					  <a href="javascript:selectAll('test2.select2')" class="nounderline">
					Select Title:
					<span class="ui-icon ui-icon-circle-arrow-e" style="display:inline-block;"></span>
					  </a>
		</div>
		 <input name="select2" type="text" value="<?php include('partsOut/formOuts/titleOut.php'); ?>" size="40" />
		</form>
		
		<div id="shellCode" style="float:left; clear:both;" class="ui-state-highlight">

		<div id="codeGrab" class="ui-widget ui-widget-header ui-corner-all ui-state-active" style="padding:3px; font-size:16px; margin:3px; float:left; clear:both; ">
				<form name="test">
					<a href="javascript:selectAll('test.select1')" class="nounderline">
					  Select Code:<span class="ui-icon ui-icon-circle-arrow-s" style="display:inline-block;"></span>	</a>
						<textarea class="ui-widget ui-widget-content-active ui-corner-all" name="select1" cols="100" rows="20" wrap="VIRTUAL" style="overflow:scroll;">
								<?php
								$templateName = $_POST['templateName'];
//									echo $templateName;
									if ($templateName == "default") {
										include('partsOut/preD.php');
									}
									if ($templateName == "blue") {
										include('partsOut/preB.php');
									}
									if ($templateName == "orange") {
										include('partsOut/preO.php');
									}
									if ($templateName == "yellow") {
										include('partsOut/preY.php');
									}	
									if ($templateName == "soldier") {
										include('partsOut/preS.php');
									}		
									if ($templateName == "trains") {
										include('partsOut/preTrains.php');
									}		
									if ($templateName == "card") {
										include('partsOut/preCards.php');
									}
								?>
					</textarea>
		</form>
		</div>
		</div>
</div>
