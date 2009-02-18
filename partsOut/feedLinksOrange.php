<?php
//include_once( ../parts/db/tlhcConnect.php);
include('parts/config.php');
?>
<table width="500" border="0" align="center">
<tr>
<td>               
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td colspan="5" height="30px" class="darkH">
<div align="center" class="blueFontBold">Subscribe to our feeds:</div>
</td>
</tr>
<tr>
<td style="width:20%" align="center">
<a href="http://fusion.google.com/add?source=atgs&feedurl=http%3A//rss.api.ebay.com/ws/rssapi%3FFeedName%3DStoreItems%26siteId%3D0%26language%3Den-US%26output%3DRSS20%26storeId%3D480498590"><img src="http://gmodules.com/ig/images/plus_google.gif" border="0" alt="Add to Google" title="Add us to iGoogle"></a>
</td>
<td style="width:20%" align="center">
<a href="http://us.rd.yahoo.com/my/atm/HepVinyl/Vintage%20Vinyl/*http://add.my.yahoo.com/rss?url=http%3A//rss.api.ebay.com/ws/rssapi%3FFeedName%3DStoreItems%26siteId%3D0%26language%3Den-US%26output%3DRSS20%26storeId%3D480498590">
<img src="http://i8.ebayimg.com/02/i/001/24/55/215f_1_b.GIF" alt="Add to My Yahoo" title="Add to MyYahoo" border="0">
</a>
</td>
<td style="width:20%" align="center">
<?php
echo $ebayRSS;
?>
<img src="../images/rss.png" alt="RSS Feed" width="32" height="32" border="0" style="border:0" title="Subscribe via RSS" /></a></td>
<td style="width:20%" align="center">
<?php
echo "<a href='";
echo "$storeLink'>";
?>
<img class="imageAlign" alt="My Stores Logo" title="Check out My Ebay Store" src="http://pics.ebaystatic.com/aw/pics/icon/imgStores_55x16.gif" style="border:0" /></a><br />
</a>
</td>
<td style="width:20%" align="center">
<span class="greyFontSmall">Add us to your <a href="http://my.ebay.com/ws/eBayISAPI.dll?AcceptSavedSeller&amp;sellerid=hepvinyl&amp;sspageName=DB:FavList">favorites list</a>!</span>
</td>
</tr>
</table>
</td>
</tr>
</table>