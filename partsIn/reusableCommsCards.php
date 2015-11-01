<?php
function buildBox30() {
	global $tabAdd;
	$selectorName = "$tabAdd"."Selector"."[]";
	$query = mysql_query(
    	"SELECT `id`, 
            	`value`,
            	`name`
       	FROM `comms$tabAdd`
   		ORDER BY `id` ASC"
	);
	echo "<select class='ui-widget input' name='$selectorName' size='8' multiple id='$tabAdd' style='width:320px;'>";
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>";
	}
	echo "</select>";
}
?>
<script type="text/javascript">
	$(function() {
		$("#tabsCard").tabs({
			deselectable: true,
			selected: -1			
		});
	});
</script>
<div class="demo66">
<div id="tabsCard">
<ul>
  <li><a href="#tabsCard-1" class="fg-button fg-button-icon-right">Type&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>
  <li><a href="#tabsCard-2" class="fg-button fg-button-icon-right">Chipset&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>
  <li><a href="#tabsCard-3" class="fg-button fg-button-icon-right">Misc&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>
  <li><a href="#tabsCard-4" class="fg-button fg-button-icon-right">Freeform&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>
  <li><a href="#tabsCard-5" class="fg-button fg-button-icon-right">Additional Notes&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>
</ul>
<div id="tabsCard-2">
		<?php
				$tabAdd = "CardsChips";
				buildBox30();
		?>
</div>
<div id="tabsCard-3">
		<?php
				$tabAdd = "CardsMisc";
				buildBox30();
		?>
</div>
<div id="tabsCard-1">
  <?php
$tabAdd = "CardsType";
buildBox30();
//newButton();
?>
</div>
<div id="tabsCard-4">
  <fieldset>
  <legend>Add a Free form Comment</legend>
  <textarea name="freeStyle" cols="38" rows="2" id="freeStyle" tabindex="10"></textarea>
  </fieldset>
</div>
<div id="tabsCard-5">
  					<fieldset>
  						<legend>Features</legend>
							<textarea name="features" cols="38" rows="6"></textarea>
					</fieldset>
</div>
<!-- CLOSE THE LAST TAB OUT -->
</div>
<!-- CLOSE OUT div id="tabsCard" -->
</div>
<!-- End demo -->
