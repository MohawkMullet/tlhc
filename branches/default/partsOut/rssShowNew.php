<?php
require_once('magpierss/rss_fetch.inc');
?>
<?php
require_once('parts/config.php');
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
$url = $rssFeed;
$rss = fetch_rss($url);
	echo "<table style=\"font-size: 9px;\" align=\"center\"><tr>";
// REMOVE THESE TD TAGS.  THIS IS A CUSTOM IMAGE FOR THE AUTHOR
	echo "<td><img src=\"http://lh4.ggpht.com/_W_e1PG0tXUk/ST9luwR54sI/AAAAAAAAAQ0/nVTnXiR3vro/s144/more45s.png\" /></td>";
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