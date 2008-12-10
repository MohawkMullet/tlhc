<?php
require_once('magpierss/rss_fetch.inc');
?>
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
$url = "http://rss.api.ebay.com/ws/rssapi?FeedName=StoreItems&siteId=0&language=en-US&output=RSS20&storeId=480498590";
//	$url = $_GET['url'];
//$num_items = 10;
$rss = fetch_rss($url);
//$items = array_slice($rss->items, 5, $num_items);
//	echo "Channel Title: " . $rss->channel['title'] . "<p>";
	echo "<table style=\"font-size: 9px;\" align=\"center\"><tr>";
	echo "<td><img src=\"http://lh4.ggpht.com/_W_e1PG0tXUk/ST9luwR54sI/AAAAAAAAAQ0/nVTnXiR3vro/s144/more45s.png\" /></td>";
	$count=1;
	foreach ($rss->items as $item) {
		$href = $item['link'];
		$title = $item['title'];
		$desc = $item['description'];
//		$img = $item['g'];
//		$pdate = $item['pubDate'];
		echo "<td class=\"greyFontSmall\"><a href=$href>$title</a><span style=\"font-size: 9px;\">$desc</span></td>";
	$count ++;
if($count==4){ break;}
}
	echo "</tr></table><hr>";
?>
