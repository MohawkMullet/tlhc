<?php
$doubleDivEnd	=	"</div><div class='CollapsiblePanelContent'>";
$slashDivDiv	= "</div></div>";
echo "<div id='CollapsiblePanel10' class='CollapsiblePanel'><div class='CollapsiblePanelTab'>";
echo	"Vinyl";
echo	$doubleDivEnd;
//THIS EMPTY FOR TAG WAS ADDED BECAUSE THE SHIT WAS FLYING EVERYWHERE.  DISABLE IT AND SEE	
echo "<form></form>"; 
include('parts/db/vinyl.php');
echo	$slashDivDiv;
// start new  panel
echo "<div id='CollapsiblePanel11' class='CollapsiblePanel'><div class='CollapsiblePanelTab'>";
echo "Label";
echo	$doubleDivEnd;
include('parts/db/label.php');
echo	$slashDivDiv;
echo "<div id='CollapsiblePanel13' class='CollapsiblePanel'><div class='CollapsiblePanelTab'>";
echo "Promo";
echo	"$doubleDivEnd";
include('parts/db/promo.php');
echo	"$slashDivDiv";
echo "<div id='CollapsiblePanel14' class='CollapsiblePanel'><div class='CollapsiblePanelTab'>";
echo "Misc or Punk";
echo	$doubleDivEnd;
include('parts/db/misc.php');  
echo	$slashDivDiv;
echo "<div id='CollapsiblePanel15' class='CollapsiblePanel'><div class='CollapsiblePanelTab'>";
echo "Sleeve";
echo	"$doubleDivEnd";
include('parts/db/sleeve.php');
echo	"$slashDivDiv";
?>
<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel10", {contentIsOpen:false});
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel11", {contentIsOpen:false});
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel13", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel14", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel15", {contentIsOpen:false});
</script>