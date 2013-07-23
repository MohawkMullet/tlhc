<?php
include('parts/config.php');
?>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td colspan="5" height="30px" class="darkH">
<div align="center">Follow Us On the Web</div>
</td></tr><tr>
<td style="width:20%" align="center">

<!--INSERT YOUR GOOGLE BELOW CODE HERE  REMOVE LINE 13-->

<a href="http://fusion.google.com/add?source=atgs&feedurl=http%3A//rss.api.ebay.com/ws/rssapi%3FFeedName%3DStoreItems%26siteId%3D0%26language%3Den-US%26output%3DRSS20%26storeId%3D480498590"><img src="http://gmodules.com/ig/images/plus_google.gif" border="0" alt="Add to Google" title="Add us to iGoogle"></a>

</td>
<td style="width:20%" align="center">
<!--INSERT YOUR YAHOO OR TWITTER CODE BELOW HERE REMOVE LINES 19 20 21 -->
<a href="https://twitter.com/damianckelly" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @damianckelly</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<!--<a href="http://us.rd.yahoo.com/my/atm/HepVinyl/Vintage%20Vinyl/*http://add.my.yahoo.com/rss?url=http%3A//rss.api.ebay.com/ws/rssapi%3FFeedName%3DStoreItems%26siteId%3D0%26language%3Den-US%26output%3DRSS20%26storeId%3D480498590">
<img src="http://i8.ebayimg.com/02/i/001/24/55/215f_1_b.GIF" alt="Add to My Yahoo" title="Add to MyYahoo" border="0">
</a>-->

</td>
<td style="width:20%" align="center">
<?php
echo $ebayRSS;
?>
<img src="http://lh5.ggpht.com/_W_e1PG0tXUk/SZiQYvASORI/AAAAAAAAAxs/ZS6gwGxcP2s/s800/rss.jpg" alt="RSS Feed" width="32" height="32" border="0" style="border:0" title="Subscribe via RSS" /></a></td>
<td style="width:20%" align="center">
<?php
echo "<a href='";
echo "$storeLink'>";
?>
<img class="imageAlign" alt="My Stores Logo" title="Check out My Ebay Store" src="http://pics.ebaystatic.com/aw/pics/icon/imgStores_55x16.gif" style="border:0" /></a><br />
</a>
</td>
<td style="width:20%" align="center">
<!--INSERT SOMETHING ELSE BELOW HERE CODE HERE -->
<g:plusone></g:plusone>

    <script type="text/javascript">
      window.___gcfg = {
        lang: 'en-US'
      };

      (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
      })();
    </script>
<!--<span class="greyFontSmall">Add us to your <a href="http://my.ebay.com/ws/eBayISAPI.dll?AcceptSavedSeller&amp;sellerid=hepvinyl&amp;sspageName=DB:FavList">favorites list</a>!</span>-->
</td>
</tr>
</table>