<?php
require_once('magpierss/rss_fetch.inc');
include('../parts/config.php');
?>

<style type="text/css">
	td {
	font-size: 9px;
}
table {
	padding: 0px;
}
.lists {
	background-image: url(../images/t2/body_05.png);
	background-repeat: repeat-x;
	background-position: left bottom;
	margin: 0px;
	padding: 0px;
	width: 183px;
	overflow: hidden;
	position: relative;
	clip: rect(auto,auto,auto,auto);
}
a:link {
	font-size: 8px; 
}
.blend	{
	color:#ffffff;
}
.hhhhh {
	margin-left: 20px;
}
</style>
<link href="styles1.php" rel="stylesheet" type="text/css" />
<table width="205" height="453" border="0" cellpadding="0" cellspacing="0" class="hhhhh" id="Table_01">
	<tr>
		<td width="10" valign="bottom">
		  <img src="../images/t2/up_01.png" width="10" height="419" alt=""></td>
		<td width="183" class="lists">
<?php
$url = "$rssFeed";
$rss = fetch_rss($url);
	echo "<table style=\"overflow: hidden;\" align=\"center\">";
	$count=1;
	foreach ($rss->items as $item) {
		$href = $item['link'];
		$title = substr( $item['title'], 0, 40);
		$desc = $item['description'];
//		echo "<tr><td style='font-size-adjust: 0.77;'>$title</td></tr>";
		echo "<tr><td><div class=\"blend\" title='$title'>$desc</div></td></tr>";
	$count ++;
if($count==5){ break;}
}
	echo "</table>";
?></td>
  <td width="12" valign="bottom">
	  <img src="../images/t2/up_03.png" width="12" height="419" alt=""></td>
  </tr>
	
	<tr>
		<td colspan="3">
			<img src="../images/t2/up_05.png" width="205" height="34" alt=""></td>
	</tr>
</table>
