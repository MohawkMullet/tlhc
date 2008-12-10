
<?php
include('clearFields.php');
?>

<?php include_once("db/tlhcConnect.php");
?>
<?php
include("head.php");
?>
<font color="#282828" size="2"><strong>&nbsp;&nbsp;Add reusable comments to Comment Drawers:</strong></font><br>
<form method="POST" action="db/vinylOut3.php" target="low" name="vinylAdd" id="vinylAdd">
<table>
<tr>
<td width="45"></td>
<td width="144"><input type="text" name="vinylValue"></td>
<td width="120"><input type="submit" value="Vinyl">
<input name="clearme" type="reset" id="clearme" tabindex="15" value="Cl" /></td>
</tr>
</table>
</form>

<form method="POST" action="db/labelOut3.php" target="low" name="labelAdd" id="labelAdd">
<table>
<tr>
<td width="45" style="text-align:right;">Label</td>
<td width="144"><input type="text" name="labelValue" onfocus="if(this.value=='shows blah blah')this.value='';" value="shows blah blah"></td>
<td width="114"><input type="submit" value="Label">
<input name="clearme" type="reset" id="clearme" tabindex="15" value="Cl" /></td>
</tr>
</table>
</form>

<form method="POST" action="db/promoOut3.php" target="low" name="promoAdd" id="promoAdd">
<table width="356">
<tr>
<td width="45px" style="text-align:right;"></td>
<td width="65"><input type="text" name="value" onfocus="if(this.value=='both sides')this.value='';" value="both sides"></td>
<td><input type="submit" value="Promo">
<input name="clearme" type="reset" id="clearme" tabindex="15" value="Clear" /></td>
</tr>
</table>
</form>

<form method="POST" action="db/miscOut3.php" target="low" name="miscAdd" id="miscAdd">
<table width="356">
<tr>
<td width="45px" style="text-align:right;">Misc</td>
<td width="65"><input type="text" name="miscValue"></td>
<td><input type="submit" value="Misc">
<input name="clearme" type="reset" id="clearme" tabindex="15" value="Clear" /></td>
</tr>
</table>
</form>
<br>