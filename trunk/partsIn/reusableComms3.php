<style type="text/css">
<!--
.demo55 #tabs2 #tabs2-5 {
	vertical-align: top;
	display: block;
}
-->
</style>
<div class="demo55">
<div id="tabs3">
<?php
/**
*
* FUNCTION TO BUILD THE SELECT BOXES
*
**/
function buildBox2() {
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
		<li><a href="#tabs2-10" class="fg-button fg-button-icon-right">Paint&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>
		<li><a href="#tabs2-11" class="fg-button fg-button-icon-right">Soldiers Misc&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li>        
		<li><a href="#tabs2-12" class="fg-button fg-button-icon-right">FreeStyle&nbsp;&nbsp;<span class="ui-icon ui-icon-triangle-2-n-s"></span></a></li> 
	</ul>




<div id="tabs2-10">
<?php
$tabAdd = "SolPaint";
buildBox2();
//newButton();
?>        
</div>
<div id="tabs2-11">
<?php
$tabAdd = "SolMisc";
function showMisc2(){
	echo "<div>";
		$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsSolMisc`
	   ORDER BY `name` ASC"
	);
	echo "<select class='ui-widget input' name='SolMiscSelector[]' size='6' multiple scrolling='no' id='SolMiscSelector' style='width:320px;'>\n";
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	echo "</select>\n";
	echo "</div>";
	}
	if ( $tabName == "soldierTab" ) {
	showMisc2();
	}
//	newButton();
//	buildBox2();
	?>
    </div>
	<div id="tabs2-12">
		<fieldset><legend>Add a Free form Comment</legend>
    	<textarea name="freeStyle" cols="38" rows="2" id="freeStyle" tabindex="10"></textarea>
        </fieldset>
	</div><!-- CLOSE THE LAST TAB OUT -->
</div><!-- CLOSE OUT div id="tabs" -->        
</div><!-- End demo -->
