<?php
$storeName = "put your store name here"; 
//this variable is added to the partsOut/descript.php file
$storeLink = "http://hepvinyl.com"; // just start wiht http://mystore.ebay.whatever/store
$storeLogo = "<img src=\"http://i93.photobucket.com/albums/l57/texastoys/toys/ebaylogo.gif\">";

//$rssFeed = "http://mysitelink.com/folder/rssfile.rss"; //paste from h to final s
$rssFeed = "http://rss.api.ebay.com/ws/rssapi?FeedName=StoreItems&siteId=0&language=en-US&output=RSS20&storeId=215463419";

$ebayRSS = "<a href=\"$rssFeed\">"; // encloses feed in tags to be used in html
?>
