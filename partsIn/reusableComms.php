<style type="text/css">
<!--
.demo55 #tabs2 #tabs2-5 {
	vertical-align: top;
	display: block;
}
-->
</style>
<div class="demo55">
<div id="tabs2">
<?php
/**
*
* FUNCTION TO BUILD THE SELECT BOXES
*
**/
function buildBox() {
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
	<ul>
		<li><a href="#tabs2-vinyl" title="click to open and close" class="fg-button fg-button-icon-right">Vinyl&nbsp;&nbsp;<span class="ui-icon ui-icon-arrow-1-se"></span></a></li>
		<li><a href="#tabs2-label" class="fg-button fg-button-icon-right">Label&nbsp;&nbsp;<span class="ui-icon ui-icon-arrow-1-se"></span></a></li>
		<li><a href="#tabs2-3" class="fg-button fg-button-icon-right">Promo&nbsp;&nbsp;<span class="ui-icon ui-icon-arrow-1-se"></span></a></li>
		<li><a href="#tabs2-4" class="fg-button fg-button-icon-right">Sleeve&nbsp;&nbsp;<span class="ui-icon ui-icon-arrow-1-se"></span></a></li>
		<li><a href="#tabs2-5" class="fg-button fg-button-icon-right">EP&nbsp;&nbsp;<span class="ui-icon ui-icon-arrow-1-se"></span></a></li>        
		<li><a href="#tabs2-6" class="fg-button fg-button-icon-right">FreeStyle&nbsp;&nbsp;<span class="ui-icon ui-icon-arrow-1-se"></span></a></li> 
	</ul>

<div id="tabs2-vinyl">
<?php
$tabAdd = "Vinyl";
buildBox();
?>
</div>
<div id="tabs2-label">
<?php
$tabAdd = "Label";
buildBox();
///newButton();
?>
</div>
<div id="tabs2-3">
<?php
$tabAdd = "Promo";
buildBox();
//newButton();
?>
</div>
<div id="tabs2-4">
<?php
$tabAdd = "Sleeve";
buildBox();
//newButton();
?>        
</div>
<div id="tabs2-5">
<?php
$tabAdd = "Misc";
function showMisc(){
	echo "<div>";
		$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsMisc`
	   ORDER BY `name` ASC"
	);
	echo "<select class='ui-widget input' name='miscSelector[]' size='6' multiple scrolling='no' id='miscSelector' style='width:320px;'>\n";
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	echo "</select>\n";
	echo "</div>";
	}
	if ( $tabName == "soldierTab" ) {
	showMisc();
	}
//	newButton();
	buildBox();
	?>
    </div>
	<div id="tabs2-6">
		<fieldset><legend>Add a Free form Comment</legend>
    	<textarea name="freeStyle" cols="38" rows="2" id="freeStyle" tabindex="10"></textarea>
        </fieldset>
	</div><!-- CLOSE THE LAST TAB OUT -->
</div><!-- CLOSE OUT div id="tabs" -->        
</div><!-- End demo -->
