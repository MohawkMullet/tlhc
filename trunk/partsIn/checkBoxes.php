<fieldset class="insideFields"><legend>Components:</legend>
		<label><input type="checkbox" name="boxes2" value="style" checked  tabindex="19">Style</label>
        <?php
		if ($tabName == "punkTab") {
		echo "<label><input type=\"checkbox\" name=\"boxes6\" value=\"relItems\" tabindex=\"19\">Punk</label>";
		}
		?>
		
		<label><input type="checkbox" name="boxes3" value="aboutUs" checked tabindex="19">Grades</label>
		<label><input type="checkbox" name="boxes4" value="gradeKey" checked tabindex="19">Key</label>
		<label><input type="checkbox" name="boxes5" value="feedBox" checked tabindex="19">Feeds</label>
		<label><input type="checkbox" name="boxes200" value="boxes200" tabindex="19" checked>Items</label>
<hr><label title="This will add store category links to the listing">Add Store Categories:</label>
		<label><input type="radio" name="cats[]" value="0cats" tabindex="20">
		 0</label>
		<label title="Add 5 category links"><input type="radio" name="cats[]" value="5cats" tabindex="20">
		 5</label>
		<label title="Add 10 category links"><input type="radio" name="cats[]" value="10cats" tabindex="20"> 
		10</label>
		<label title="Add 20 category links"><input type="radio" name="cats[]" value="20cats" tabindex="20">
		20</label>
</fieldset>
