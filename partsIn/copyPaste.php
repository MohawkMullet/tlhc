
<script language="Javascript">
						function selectAll(theField) {
						var tempval=eval("document."+theField)
						tempval.focus()
						tempval.select()
						}
</script>
<div id="titlePaster" class="ui-state-error ui-corner-all" style="float:left; clear:both; border-width:thick; border-style:groove; margin:3px; padding:10px; display:block;">
		<div class="ui-state-active ui-corner-all" style="margin:4px; padding:10px; border-width:thick; border-style:double; display:block;">
				<form name="test2" style="float:left; clear:both;">
						 <button class="buttonBack ui-corner-all" style="float:left; clear:none;">
						 <a href="javascript:selectAll('test2.select2')">
						Select Title:
						<span class="ui-icon silk-icon-arrow-down" style="display:inline;"></span>
						 </a>
						 </button>
  						<input name="select2" class="ui-state-default ui-corner-all" type="text" value="<?php include('partsOut/formOuts/titleOut.php'); ?>" size="40" style="float:left; clear:right; display:inline;" />
				</form>
		</div>
</div>
<form name="test" style="float:left; clear:both;">
	<button class="buttonBack ui-corner-all" style="float:left; clear:none;"><a href="javascript:selectAll('test.select1')">
	  Select Code:<span class="ui-icon silk-icon-arrow-down" style="display:inline-block;"></span>	</a></button>
    <textarea name="select1" cols="120" rows="36" wrap="VIRTUAL" style="float:left; clear:both;">
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

