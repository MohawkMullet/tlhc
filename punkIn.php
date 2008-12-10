<?php
		include("parts/db/tlhcConnect.php");
?>


<!-- START THE FORM -->

<form action="Output.php" method="POST" target="topOne" id="slapIt2" onSubmit="MM_changeProp('slapIt2','','fontCase','capitalize','FORM')">

<table width="392" border="0" cellpadding="5" cellspacing="0" class="formTable" id="recInput">
<tr>
    <td width="70" class="LeftLabelColTop">&nbsp;</td>
    <td width="294" class="labelTableTop" align="center"><span class="versionNum">Punk / EP </span></td>
</tr>
  <tr>
    <td class="RightHandLabels">&nbsp;</td>
    <td class="inputBGstyle">  
<input name="titler" type="text" class="someinputs" id="titler2" accesskey="h" tabindex="1" onfocus="if(this.value=='TITLE')this.value='';" value="TITLE" size="45" maxlength="55" />  </td>
  </tr>
  <tr>
  <td class="RightHandLabels">Artists
  </td>
	<td class="inputBGstyle"><input type="text" name="artists" size="45" class="someinputs" id="artists"></td>  
  </tr>
      <tr>
    <td class="RightHandLabels">Image</td>
    <td class="inputBGstyle"><input name="picasaImage" type="text" size="45"></td>
  </tr>
  <tr>
    <td class="RightHandLabels">SIDE A</td>
    <td class="inputBGstyle"><input name="sideA" class="someinputs" type="text" id="sideA" accesskey="a" tabindex="2" size="45" />    </td>
  </tr>
  <tr>
    <td class="RightHandLabels">SIDE B</td>
    <td class="inputBGstyle"><input name="sideB" class="someinputs" type="text" id="sideB" accesskey="b" tabindex="3" size="45" />  		</td>
  </tr>
  <tr>
    <td class="RightHandLabels">Label </td>
    <td class="inputBGstyle"><input name="Label" type="text" class="someinputs" id="Label" accesskey="l" tabindex="4" size="25" />		</td>
  </tr>
  <tr>
    <td class="RightHandLabels">#</td>
    <td class="inputBGstyle"><input name="recNum" type="text" class="someinputs" id="recNum" accesskey="h" tabindex="5" onfocus="if(this.value=='Record #')this.value='';" value="Record #" size="45" />        </td>
  </tr>
  <tr>
    <td class="RightHandLabels">GRADE</td>
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
		include("partsIn/panelsPunk.php");
?>

</td>
  </tr>
  <tr>
    <td class="RightHandLabels">Abrs.</td>
    <td class="inputBGstyle"><input name="notes" type="text" class="someinputs" id="notes" accesskey="n" tabindex="11" size="25" maxlength="90" /></td>
  </tr>
  <tr>
    <td class="RightHandLabels">bar</td>
    <td class="inputBGstyle">
    <textarea name="sideBar2" class="someinputs" cols="38" rows="3" wrap="physical" id="sideBar2" accesskey="s" tabindex="12"></textarea></td>
  </tr>
  <tr>
    <td class="RightHandLabels">Link</td>
    <td class="inputBGstyle">

<?php
		include("partsIn/linkboxes.php");
?>
    
    </td>
  </tr>
    <tr><td class="RightHandLabels">Boxes:</td>
    <td class="inputBGstyle">
<?php
		include("partsIn/addBoxes.php");
?>    
    </td></tr>
  <tr>
    <td class="bottomLeftLabel">LOAD:</td>
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
		displaylimit("Input.slapIt2.titler2","titler",55)
</script>
</div>
</form>