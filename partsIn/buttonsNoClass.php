<table border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
 <?php
 if ( $tabName == "drawersIn") {
  	echo	"<td><INPUT TYPE='button' VALUE='Update Drawers' size='50' onclick='location.reload()' class='buttons' title='You Must Update to See Your New Comments'></td>";
 	echo  "<td><input type=\"button\" name=\"righter\" value=\"Show Comments\" size=\"50\" ONCLICK=\"top.frames['mainFrame'].location.href='parts/midComms.php'\" class=\"buttons\"></td>";
	} else {
// 	echo  "<td><input type=\"button\" name=\"righter\" value=\"Abbrs\" size=\"50\" ONCLICK=\"top.frames['mainFrame'].location.href='midFrame.php'\" class=\"buttons\"></td>";
	echo	" <td> <input name='submit' type='submit' tabindex='20' id='submit' size='50' target='topOne' value='Output'  class='buttons'> </td>";
	}
?>
 <td><input type="button" name="reloader" value="Reload Page" size="50" ONCLICK="top.frames['top'].location.href='index.php'" class="buttons"></td>
  <?php
  if ( $tabName != "drawersIn") {
  echo	"<td><input name='clearme' type='reset' id='clearme' tabindex='21' size='50' value='Clear Form' class='buttons' /></td>";
  }
  ?>
  </tr>
</table>
