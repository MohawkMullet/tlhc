<?php
function buildBox300() {
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
		$("#tabs4").tabs({
			deselectable: true,
			selected: -1			
		});
	});
</script>
<div class="demo66">
<div id="tabs4">
<ul>
  <li><a href="#tabs4-1" class="fg-button fg-button-icon-right">General&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>
  <li><a href="#tabs4-2" class="fg-button fg-button-icon-right">Packaging&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>
  <li><a href="#tabs4-3" class="fg-button fg-button-icon-right">Open&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>
  <li><a href="#tabs4-4" class="fg-button fg-button-icon-right">Accs&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>
  <li><a href="#tabs4-5" class="fg-button fg-button-icon-right">Notes&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>
</ul>
<div id="tabs4-1">
  <?php
$tabAdd = "Trains";
buildBox300();
?>
</div>
<div id="tabs4-2">
  <?php
$tabAdd = "Paint";
buildBox300();
//newButton();
?>
</div>
<div id="tabs4-3">
  <fieldset>
  <legend>Add a Free form Comment</legend>
  <textarea name="freeStyle" cols="38" rows="2" id="freeStyle" tabindex="10"></textarea>
  </fieldset>
</div>
<div id="tabs4-4>
  					<fieldset>
  						<legend>Features</legend>
							<textarea name="features" cols="38" rows="6"></textarea>
					</fieldset>
</div>
<div id="tabs4-5">
<?php 
		//	include('addCommentsEX.php');
?>
another fucking one
</div><!-- CLOSE THE LAST TAB OUT -->
</div>
<!-- CLOSE OUT div id="tabs" -->
</div>
<!-- End demo -->
