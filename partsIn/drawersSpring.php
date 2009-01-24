
<script src="../parts/SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="../parts/SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">

<div id="Accordion1" class="Accordion" tabindex="0">
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Comment Drawers</div>
    <div class="AccordionPanelContent">&nbsp;
    </div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Vinyl</div>
    <div class="AccordionPanelContent">
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
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Label</div>
    <div class="AccordionPanelContent">
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
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Promo</div>
    <div class="AccordionPanelContent">
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
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Sleeve</div>
    <div class="AccordionPanelContent">
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
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Free Style Comment</div>
    <div class="AccordionPanelContent">
      <textarea name="freeStyle" cols="38" rows="2" id="freeStyle" tabindex="10"></textarea>
    </div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Facts, History, &amp; External Link</div>
    <div class="AccordionPanelContent"><fieldset class="insideFields"><legend>SideBar, URL, & Link Descript:</legend>    
<textarea name="sideBar2" class="someinputs" cols="41" rows="2" wrap="physical" id="sideBar2" accesskey="s" tabindex="15"></textarea>
<input name="link" type="text" id="link" accesskey="i" tabindex="16" value="" size="16" class="someinputs" title="the http:// stuff goes in this one" />
<input name="linkText" type="text" id="linkText" accesskey="l" tabindex="17" value="" size="24" class="someinputs" title="put your link description in here" /></fieldset></div>
  </div>
</div>
<script type="text/javascript">
<!--
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
//-->
</script>
