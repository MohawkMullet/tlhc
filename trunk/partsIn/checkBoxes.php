<style type="text/css">
<!--
.doem {
	border: 2px double #9E9E9E;
	color: #7d7d7d;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	text-decoration: none;
	width: 360px;
	margin: 1px;
	padding: 0px;
}
.doemC2 {
	background-color: #AAAAAA;
	border: thin groove #336600;
	color: #f2ca6d;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: bold;
	text-decoration: none;
	width: 360px;
}
-->
</style>
<fieldset class="doem"><legend>Components</legend>
<table width="350" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="342">
<fieldset class="doemC2">
<legend>Include These?</legend>
<label><input type="checkbox" name="boxes2" value="style" checked  tabindex="19">Style</label>
<label><input type="checkbox" name="boxes6" value="relItems" tabindex="19">Punk</label>
<label><input type="checkbox" name="boxes3" value="aboutUs" checked tabindex="19">About</label>
<label><input type="checkbox" name="boxes4" value="gradeKey" checked tabindex="19">Key</label>
<label><input type="checkbox" name="boxes5" value="feedBox" checked tabindex="19">Feeds</label>
<label><input type="checkbox" name="boxes200" value="boxes200" tabindex="19" checked> 
New Items</label>
</fieldset>
</td>
  </tr>
  <tr>
    <td><fieldset class="doemC2">
	<!-- DO NOT CREATE A REAL ARRAY VALUE FOR CATS 0.  
	THIS WILL BE A RESCUE FIELD INCASE A RADIO IS PRESSED BY MISTAKE AND THE CLEAR BUTTON WOULD DESTROY WORK -->
	<label><input type="radio" name="cats[]" value="0cats" tabindex="20">
    0</label>
	<label><input type="radio" name="cats[]" value="5cats" tabindex="20">
    5</label>
<label><input type="radio" name="cats[]" value="10cats" tabindex="20"> 
10</label>
<label><input type="radio" name="cats[]" value="20cats" tabindex="20">
20</label> <legend>Add Some Store Category Links?</legend>
    </fieldset>
</td>
  </tr>
<!--   <tr>
    <td><label><input type="checkbox" name="boxes10" value="30">Key</label>
<label><input type="checkbox" name="boxes11" value="40">Feeds</label></td>
  </tr> -->
</table>
</fieldset>