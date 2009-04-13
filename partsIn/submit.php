<div align="center"><table border="0" cellspacing="0" cellpadding="0" align="center" class="fg-toolbar" style="font-size: smaller;" align="center">
  <tr>
 <?php
 if ( $tabName == "assTab") {
//  	echo	"<td><button onclick='location.reload()' class='fg-button fg-button-icon-right ui-state-default ui-corner-all'><span class='ui-icon ui-icon-arrowrefresh-1-s'></span>Update Drawers</button></td>";
 	echo  "<td><a href='../parts/midComms.php' target='mainFrame' class='fg-button fg-button-icon-left ui-state-default ui-corner-all'><span class='ui-icon ui-icon-document'></span>Show Comments</a></td>";
	} else {
	echo	" <td><button type='submit' target='mainFrame' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all'><span class='ui-icon ui-icon-pencil'></span>Output</button> </td>";
	}
  if ( $tabName != "mainTab") {
//  	echo  "<td><input type=\"reset\" /></td>";
  	echo	"<td><button onclick='location.reload()' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all'><span class='ui-icon ui-icon-refresh'></span>Refresh</button></td>";
//  	echo  "<td><button ONCLICK=\"top.frames['top'].location.href='index.php'\"class='fg-button fg-button-icon-right ui-state-default ui-corner-all'><span class='ui-icon ui-icon-refresh'></span>Reload</button></td>";
  	echo  "<td><button type='reset' target='mainFrame' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all' title='clear the form fields'>Clear All<span class='ui-icon ui-icon-trash'></span></button></td>";
//    echo "<td><a href='../parts/start.php' target='mainFrame' class='fg-button fg-button-icon-right ui-state-default ui-corner-all'><span class='ui-icon ui-icon-search'></span>Search Tools&nbsp;&nbsp;</a><td>";
  }
  ?>
  </tr>
</table></div>
