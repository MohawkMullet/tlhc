<fieldset class="pane"><legend><a href="#" class="fg-button fg-button-icon-solo delete" title="Close this section"><span class="ui-icon ui-icon-close"></span>&nbsp;</a>Components:&nbsp;<a href="../docs/componentDesign.php" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all" title="see the help file for components"><span class="ui-icon ui-icon-wrench"></span>&nbsp;</a></legend>
		<label><input name="boxes2" class="ui-widget input" type="checkbox" tabindex="19" value="style" checked>
Style</label>
        <?php
		if ($tabName == "punkTab") {
		echo "<label><input type=\"checkbox\" name=\"boxes6\" value=\"relItems\" tabindex=\"19\">Punk</label>";
		}
		?>
		<label><input type="checkbox" name="boxes200" value="boxes200" tabindex="19" class="ui-widget input">Items</label>		
<label><input class="ui-widget input" type="checkbox" name="boxes3" value="aboutUs" tabindex="19">About Us</label>
		<label><input type="checkbox" class="ui-widget input" name="boxes4" value="gradeKey" tabindex="19">Grades</label>
		<label><input type="checkbox" class="ui-widget input" name="boxes5" value="feedBox" checked tabindex="19">Footer</label>

<hr><label title="This will add store category links to the listing">Add Store Categories:&nbsp;&nbsp;<a href="../docs/componentDesign.php" target="mainFrame" class="fg-button fg-button-icon-solo ui-state-default ui-corner-all" title="see the docs for help"><span class="ui-icon ui-icon-gear"></span>&nbsp;</a></legend></label>
		<label><input type="radio" class="ui-widget input" name="cats[]" value="0cats" tabindex="20">
		 0</label>
		<label title="Add 5 category links"><input type="radio" class="ui-widget input" name="cats[]" value="5cats" tabindex="20">
		 5</label>
		<label title="Add 10 category links"><input type="radio" class="ui-widget input" name="cats[]" value="10cats" tabindex="20"> 
		10</label>
		<label title="Add 20 category links"><input type="radio" class="ui-widget input" name="cats[]" value="20cats" tabindex="20">
		20</label>
</fieldset>
