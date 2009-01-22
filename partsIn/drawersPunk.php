    <div id="CollapsiblePanel20" class="CollapsiblePanel">
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

<div id="CollapsiblePanel21" class="CollapsiblePanel">
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


<div id="CollapsiblePanel23" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="9">Misc / Punk</div>
  <div class="CollapsiblePanelContent" align="left">  
<?php
	$query = mysql_query(
	    "SELECT `id`, 
	            `value`,
	            `name`
	       FROM `commsMisc`
	   ORDER BY `id` ASC"
	);
	
	echo "<select name='miscSelector[]' size='6' multiple scrolling='no' id='miscSelector'>\n";
	
	while ($data = mysql_fetch_array($query, MYSQL_ASSOC))
	{
	    echo "    <option value='{$data['name']}'>{$data['value']}</option>\n";
	}
	
	echo "</select>\n";
?>
  </div>
</div>
<div id="CollapsiblePanel24" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="9">Free Styler</div>
  <div class="CollapsiblePanelContent" align="left">  
<textarea name="freeStyle" cols="38" rows="2" id="freeStyle" tabindex="10"></textarea>
  </div>
</div>
<script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel20", {contentIsOpen:false});
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel21", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel23", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel24", {contentIsOpen:false});

//-->
</script>


