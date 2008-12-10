<?php
		include("parts/db/tlhcConnect.php");
?>
<!-- START THE FORM -->

<form action="Output.php" method="POST" name="basic" target="topOne" id="slapIt" onSubmit="MM_changeProp('slapIt','','fontCase','capitalize','FORM')">
<table width="392" border="0" cellpadding="2" cellspacing="0" class="formTable" id="recInput">
<tr>
    <td width="70" class="LeftLabelColTop">&nbsp;</td>
    <td width="294" class="labelTableTop" align="center">
    <span class="versionNum">Standard 45 </span></td>
</tr>
  <tr>
    <td class="RightHandLabels">&nbsp;</td>
    <td class="inputBGstyle">  
<input type="text" name="performer" size="15" class="someinputs" id="performer"  tabindex="1"><input name="titler" type="text" class="someinputs" id="titler" accesskey="h" tabindex="2" onfocus="if(this.value=='TITLE')this.value='';" value="TITLE" size="30" maxlength="55" />  </td>
  </tr>

<?php
		include('partsIn/AnB.php');
?>
<?php
		include('partsIn/LblNoSlvIN.php');
?>
  <tr>
    <td class="RightHandLabels">&nbsp;</td>
    <td class="inputBGstyle">

<?php
		include('partsIn/gradeRadios.php');
?>

    </td>
  </tr>
  <tr>
    <td class="RightHandLabels">&nbsp;</td>
    <td class="inputBGstyle"> 
 <div class="CollapsiblePanelTabFake">comment drawers</div>
<?php
		include("partsIn/panels.php");
?>

</td>
  </tr>
  <tr>
    <td class="RightHandLabels">Abrs.</td>
    <td class="inputBGstyle"><input name="notes" type="text" class="someinputs" id="notes" accesskey="n" tabindex="14" size="20" maxlength="90" /></td>
  </tr>
  <tr>
    <td class="RightHandLabels">bar</td>
    <td class="inputBGstyle">
    <textarea name="sideBar2" class="someinputs" cols="38" rows="3" wrap="physical" id="sideBar2" accesskey="s" tabindex="15"></textarea></td>
  </tr>
  <tr>
    <td class="RightHandLabels">Link</td>
    <td class="inputBGstyle">

<?php
		include("partsIn/linkboxes.php");
?>
    
    </td>
  </tr>
    <tr>
    <td class="RightHandLabels">Picasa</td>
    <td class="inputBGstyle"><input name="picasaImage" type="text" size="45"  tabindex="18"></td>
  </tr>
    <tr><td class="RightHandLabels">&nbsp;</td>
    <td class="inputBGstyle">
<?php
		include("partsIn/checkBoxes.php");
?>    
    </td></tr>
  <tr class="unnamed1">
    <td class="bottomLeftLabel">&nbsp;</td>
    <td class="bottomRow">          
<?php
		include("partsIn/buttonsNoClass.php");
?>
    </td>
  </tr>

</table>

<!-- SHOW THE COUNTDOWN LAYER -->
<div id="bombButtons">
<script>
		displaylimit("Input.slapIt.titler","titler",55)
</script>
</div>




</form>