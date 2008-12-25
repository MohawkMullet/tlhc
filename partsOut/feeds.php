<?php
//include_once( ../parts/db/tlhcConnect.php);
include('parts/config.php');
?>
<table border="0" align="center">
<tr>
<td>               
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#d9d9d9">
<tr>
<td colspan="5" bgcolor="#cccccc" height="28px" style="font:bolder; color:#ffffff; font-size:14px; background-image:url(http://i2.ebayimg.com/06/i/001/24/73/95f7_1_b.GIF);">
<div align="center" >Subscribe to our feeds:</div>
</td>
</tr>
<tr>
<td style="width:20%" align="center">
<!-- ADD YOUR GOOGLE FEED CODE HERE -->
<a href="http://fusion.google.com/add?source=atgs&feedurl=http%3A//rss.api.ebay.com/ws/rssapi%3FFeedName%3DStoreItems%26siteId%3D0%26language%3Den-US%26output%3DRSS20%26storeId%3D480498590"><img src="http://gmodules.com/ig/images/plus_google.gif" border="0" alt="Add to Google"></a>
<!-- END GOOGLE FEED CODE -->                 
</td>
<td style="width:20%" align="center">
<!-- ADD YOUR YAHOO FEED CODE HERE -->
<a href="http://us.rd.yahoo.com/my/atm/HepVinyl/Vintage%20Vinyl/*http://add.my.yahoo.com/rss?url=http%3A//rss.api.ebay.com/ws/rssapi%3FFeedName%3DStoreItems%26siteId%3D0%26language%3Den-US%26output%3DRSS20%26storeId%3D480498590">
<img src="http://i8.ebayimg.com/02/i/001/24/55/215f_1_b.GIF" alt="addtomyyahoo6" border="0">

</a>
<!-- END YAHOO FEED CODE -->
</td>
<td style="width:20%" align="center">
<?php
echo $ebayRSS;
?>
<img height="16" alt="RSS Feed" src="http://graphics8.nytimes.com/images/global/icons/rss.gif" width="44" style="border:0" /></a>
</td>
<td style="width:20%" align="center">
<a href="http://www.stores.ebay.com/id=480498590">
<img class="imageAlign" alt="My Stores Logo" src="http://pics.ebaystatic.com/aw/pics/icon/imgStores_55x16.gif" style="border:0" /></a><br />
<span class="greyFontSmall"><a href="http://stores.ebay.com/HepVinyl"></a></span>
</td>
<td style="width:20%" align="center">
<span class="greyFontSmall">Add us to your <a href="http://my.ebay.com/ws/eBayISAPI.dll?AcceptSavedSeller&amp;sellerid=hepvinyl&amp;sspageName=DB:FavList">favorites list</a>!</span>
</td>
</tr>
</table>
</td>
</tr>
</table>