<style type="text/css">
<!--
.style1 {font-size: 9px}
-->
</style>
    <div id="CollapsiblePanel10" class="CollapsiblePanel">
    <div class="CollapsiblePanelTab" tabindex="7">Vinyl</div>
    <div class="CollapsiblePanelContent">  
<?php
//include('parts/db/vinyl.php');
?>
<form></form>
<form method="POST" action="parts/db/vinylOut3.php" target="low" name="vinylAdd" id="vinylAdd">
<table><tr><td width="25px">&nbsp;</td>
<td width="144px"><input type="text" name="vinylValue"></td>
<td width="100px"><input type="submit" value="Vinyl">&nbsp;<input name="clearme" type="reset" id="clearme" tabindex="15" value="Cl" /></td></tr></table>
</form>
    </div>
  </div>
<div id="CollapsiblePanel11" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="8">Label</div>
  <div class="CollapsiblePanelContent">  
  <form method="POST" action="parts/db/labelOut3.php" target="low" name="labelAdd" id="labelAdd">
<table><tr>
<td width="25px" style="text-align:right;"><span class="style1">Label</span></td>
<td width="144px"><input type="text" name="labelValue" onfocus="if(this.value=='shows blah blah')this.value='';" value="shows blah blah"></td>
<td width="100px"><input type="submit" value="Label">&nbsp;<input name="clearme" type="reset" id="clearme" tabindex="15" value="Cl" /></td></tr></table>
</form>
  </div>
</div>

<div id="CollapsiblePanel13" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="9">Promo</div>
  <div class="CollapsiblePanelContent">  
    <form method="POST" action="parts/db/promoOut3.php" target="low" name="promoAdd" id="promoAdd">
<table><tr>
<td width="25px" style="text-align:right;"><span class="style1">Lbld</span></td>
<td width="144px"><input type="text" name="value" onfocus="if(this.value=='both sides')this.value='';" value="both sides"></td>
<td width="100px"><input type="submit" value="Promo">&nbsp;<input name="clearme" type="reset" id="clearme" tabindex="15" value="Cl" /></td></tr></table>
</form>
  </div>
</div>
<div id="CollapsiblePanel14" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="9">Misc/Punk</div>
  <div class="CollapsiblePanelContent" align="left">  
<form method="POST" action="parts/db/miscOut3.php" target="low" name="miscAdd" id="miscAdd">
<table><tr>
<td width="25px" style="text-align:right;"><span class="style1">Misc</span></td>
<td width="144px"><input type="text" name="miscValue"></td>
<td width="100px"><input type="submit" value="Misc">&nbsp;<input name="clearme" type="reset" id="clearme" tabindex="15" value="Cl" /></td></tr></table>
</form>

  </div>
</div>
<div id="CollapsiblePanel15" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="9">Sleeve</div>
  <div class="CollapsiblePanelContent" align="left">  
<?php
include('parts/db/sleeve.php');
?>
  </div>
</div>
<script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel10", {contentIsOpen:false});
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel11", {contentIsOpen:false});
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel13", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel14", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel15", {contentIsOpen:false});


//-->
</script>

