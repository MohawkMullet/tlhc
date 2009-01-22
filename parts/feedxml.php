<?php
//require_once('../magpierss/rss_fetch.inc');
include('config.php');
?>
<?php
echo "$rssFeed";
$url = "$rssFeed";
$rss = fetch_rss($url);
//echo = "$url";
?>
<table width="200" border="1">
  <tr>
    <td>&nbsp;</td>
    <td><a href="rss/rss2html.php?rss_url=('http://digg.com/rss/indexlinux_unix.xml')">this</a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
include ('http://terrapin/parts/rss/rss2html.php?rss_url=(http://rss.api.ebay.com/ws/rssapi?FeedName=StoreItems&siteId=0&language=en-US&output=RSS20&storeId=480498590)&rss_items=10&rss_chars=100');
?> 