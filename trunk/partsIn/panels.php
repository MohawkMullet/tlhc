    <div id="CollapsiblePanel1" class="CollapsiblePanel">
    <div class="CollapsiblePanelTab" tabindex="7">Vinyl</div>
    <div class="CollapsiblePanelContent">  
    
<?php
$query = mysql_query(
    "SELECT `id`, 
            `value`,
            `name`
       FROM `commsVinyl`
   ORDER BY `id` ASC"
);

echo "<select name='vinylSelector[]' size='8' multiple id='vinylSelector'>\n";

while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>\n";
}

echo "</select>\n";
?>
    </div>
  </div>

<div id="CollapsiblePanel2" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="8">Label</div>
  <div class="CollapsiblePanelContent">  
  
<?php
$query = mysql_query(
    "SELECT `id`, 
            `value`,
            `name`
       FROM `commsLabel`
   ORDER BY `id` ASC"
);

echo "<select name='labelSelector[]' size='7' multiple id='labelSelector'>\n";

while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
{
    echo "    <option value='{$data['value']}'>{$data['value']}</option>\n";
}

echo "</select>\n";
?>  
  </div>
</div>

<div id="CollapsiblePanel3" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="9">Promo</div>
  <div class="CollapsiblePanelContent">  
    
<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsPromo`
	   ORDER BY `id` ASC"
	);
	
	echo "<select name='promoSelector[]' size='10' multiple scrolling='no' id='promoSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
?>
  </div>
</div>
<div id="CollapsiblePanel6" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="9">Sleeve</div>
  <div class="CollapsiblePanelContent">  
    
<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsSleeve`
	   ORDER BY `id` ASC"
	);
	
	echo "<select name='sleeveSelector[]' size='4' multiple scrolling='no' id='sleeveSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
?>
  </div>
</div>
<div id="CollapsiblePanel5" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="9">Free Styler</div>
  <div class="CollapsiblePanelContent" align="left">  
<textarea name="freeStyle" cols="38" rows="2" id="freeStyle" tabindex="10"></textarea>
  </div>
</div>
<script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2", {contentIsOpen:false});
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel5", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel6", {contentIsOpen:false});


//-->
</script>


