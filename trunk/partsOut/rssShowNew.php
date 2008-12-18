<?php
require_once('magpierss/rss_fetch.inc');
?>

<!-- THIS STYLE IS MEANT TO MAKE THE DEFAULT RSS VIEW MUCH MUCH SMALLER FONT -->
<style type="text/css">
	td {
	font-size: 8px;
}
a:link {
	text-decoration: none;
	font-size: 10px;
}
</style>

<?php
// PUT YOUR EBAY RSS FEED LINK HERE
$url = "http://rss.api.ebay.com/ws/rssapi?FeedName=StoreItems&siteId=0&language=en-US&output=RSS20&storeId=480498590";
$rss = fetch_rss($url);
	echo "<table style=\"font-size: 9px;\" align=\"center\" bgcolor='#cccccc' cellpadding='0' cellspacing='0' width='100%'><tr>";
// REMOVE THESE TD TAGS.  THIS IS A CUSTOM IMAGE FOR THE AUTHOR
//	echo "<td><img src=\"http://lh4.ggpht.com/_W_e1PG0tXUk/ST9luwR54sI/AAAAAAAAAQ0/nVTnXiR3vro/s144/more45s.png\" /></td>";
echo	"<tr><td colspan='3' style='color: #ffffff; font-size: 16px;' background='http://i17.ebayimg.com/03/i/001/24/73/95d1_1_b.GIF' height='28'><div align='center'><strong>Newly Listed 45's<strong></div></td></tr>";
	$count=1;
	foreach ($rss->items as $item) {
		$href = $item['link'];
		$title = $item['title'];
		$desc = $item['description'];
		echo "<td class=\"greyFontSmall\"><a href=$href>$title</a><span style=\"font-size: 9px;\">$desc</span></td>";
	$count ++;
// DECIDE HOW MANY ITEMS TO SHOW IN YOUR LISTING
if($count==4){ break;}
}
	echo "</tr></table><hr>";
?>
