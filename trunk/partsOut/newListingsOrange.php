<?php
require_once('magpierss/rss_fetch.inc');
include('../parts/config.php');
?>

<!-- THIS STYLE IS MEANT TO MAKE THE DEFAULT RSS VIEW MUCH MUCH SMALLER FONT -->
<style type="text/css">
	td {
	font-size: 8px;
}
a:link {
	font-size: 8px; 
}
.blend	{
color:#CCCCCC;
}
</style>

<?php
// PUT YOUR EBAY RSS FEED LINK HERE
$url = "$rssFeed";
$rss = fetch_rss($url);
	echo "<table style=\"font-size: 9px;\" align=\"center\" cellpadding='0' cellspacing='0' width='490'><tr>";
// REMOVE THESE TD TAGS.  THIS IS A CUSTOM IMAGE FOR THE AUTHOR
//	echo "<td><img src=\"http://lh4.ggpht.com/_W_e1PG0tXUk/ST9luwR54sI/AAAAAAAAAQ0/nVTnXiR3vro/s144/more45s.png\" /></td>";
echo	"<td colspan='4' style='color: #ffffff; font-size: 16px;' height='30' class='darkH'><div align='center' class='blueFontBold'><strong>Newly Listed 45's</strong></div></td></tr><tr>";
	$count=1;
	foreach ($rss->items as $item) {
		$href = $item['link'];
		$title = $item['title'];
		$desc = $item['description'];
		echo "<td style=\"text-align: right; font-size-adjust:0.8; vertical-align:top; padding-right:1px; padding-top:8px;\">$title</td><td style=\"font-color:#cccccc;\"><div class=\"blend\" title='$title'>$desc</div></td>";
	$count ++;
// DECIDE HOW MANY ITEMS TO SHOW IN YOUR LISTING
if($count==3){ break;}
}
?>

<?php
echo "</tr><tr><td colspan='4'>&nbsp;</td></tr></table><hr><table width='490' align='center'><tr>";
	$count = 5;
	foreach ($rss->items as $item) {
		$href = $item['link'];
		$title = substr( $item['title'], 0, 30);
		echo "\n";
// SKIP THE PICTURES AND DESCRIPTION AND JUST SHOW SOME TITLES
	$count ++;
//echo "</tr><tr><td><hr></td></tr><tr>";
if($count > 11){ 
		echo "<td class=\"greyFontSmall\" style=\"vertical-align: top;  font-size-adjust:1;\"><a href='$href' title='$title'>$title</a></td>";
 }
if($count==15){ break;}
}
	echo "</tr></table>";
?>