
<script language="Javascript">
						function selectAll(theField) {
						var tempval=eval("document."+theField)
						tempval.focus()
						tempval.select()
						}
</script>
<form name="test2" style="float:left; clear:both;">
     <button class="buttonBack ui-corner-all" style="float:left; clear:none;"> <a href="javascript:selectAll('test2.select2')">
	Select Title:
	<span class="ui-icon silk-icon-arrow-down" style="display:inline-block;"></span>
      </a></button>
  <input name="select2" type="text" value="<?php include('partsOut/formOuts/titleOut.php'); ?>" size="40" style="float:left; clear:both;" />
</form>

<form name="test" style="float:left; clear:both;">
	<button class="buttonBack ui-corner-all" style="float:left; clear:none;"><a href="javascript:selectAll('test.select1')">
	  Select Code:<span class="ui-icon silk-icon-arrow-down" style="display:inline-block;"></span>	</a></button>
    <textarea name="select1" cols="30" rows="2" wrap="VIRTUAL" style="float:left; clear:both;">
	<?php
	  function spinIt(){
	  $showOut = $_GET['showOut'];
	  $templateName = $_POST['templateName'];
			if ($templateName == "plain") {
				include('partsOut/shellPlain.php');
				}
			if ($templateName == "old") {
				include('partsOut/preB.php');
				}
			if ($templateName == "green") {
				include('partsOut/shellGreen.php');
				}
			if ($templateName == "yellow") {
				include('partsOut/shellYellow.php');
				}	
			if ($templateName == "soldier") {
				include('partsOut/preS.php');
				}
			}
			spinIt();
	 ?>
    </textarea>
</form>

