

<div class="demo55">
<div id="tabs2">

	<ul>
		<li><a href="#tabs2-1" title="click to open and close">Vinyl</a></li>
		<li><a href="#tabs2-2">Label</a></li>
		<li><a href="#tabs2-3">Promo</a></li>
		<li><a href="#tabs2-4">Sleeve</a></li>
		<li><a href="#tabs2-5">EP</a></li>        
		<li><a href="#tabs2-6">FreeStyle</a></li>
        
	</ul>
	<div id="tabs2-1">
<?php
$query = mysql_query(
    "SELECT `id`, 
            `value`,
            `name`
       FROM `commsVinyl`
   ORDER BY `id` ASC"
);

echo "<select class='ui-widget input' name='vinylSelector[]' size='8' multiple id='vinylSelector'>\n";

while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>\n";
}

echo "</select>\n";
?>
	</div>
	<div id="tabs2-2">
<?php
$query = mysql_query(
    "SELECT `id`, 
            `value`,
            `name`
       FROM `commsLabel`
   ORDER BY `id` ASC"
);

echo "<select class='ui-widget input' name='labelSelector[]' size='7' multiple id='labelSelector'>\n";

while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>\n";
}

echo "</select>\n";
?>
	</div>
	<div id="tabs2-3">
<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsPromo`
	   ORDER BY `id` ASC"
	);
	
	echo "<select class='ui-widget input' name='promoSelector[]' size='10' multiple scrolling='no' id='promoSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
?>
	</div>
	<div id="tabs2-4">
<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsSleeve`
	   ORDER BY `id` ASC"
	);
	
	echo "<select class='ui-widget input' name='sleeveSelector[]' size='4' multiple scrolling='no' id='sleeveSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
?>        
	</div>
	<div id="tabs2-5">
        <?php
	function showMisc(){
	echo "<div>";
		$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsMisc`
	   ORDER BY `id` ASC"
	);
	
	echo "<select class='ui-widget input' name='miscSelector[]' size='6' multiple scrolling='no' id='miscSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
	echo "</div>";
	}
	if ( $tabName == "punkTab" ) {
	showMisc();
	}
	?>
    </div>
	<div id="tabs2-6">
		<fieldset><legend>Add a Free form Comment</legend>
    	<textarea name="freeStyle" cols="38" rows="2" id="freeStyle" tabindex="10"></textarea>
        </fieldset>
	</div><!-- CLOSE THE LAST TAB OUT -->
</div><!-- CLOSE OUT div id="tabs" -->        
</div><!-- End demo -->
