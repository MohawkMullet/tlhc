
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


<table width="750" id="trainFooterTable" align="center" cellpadding="5" cellspacing="5">
<tr>
<td colspan="5" height="30px" class="darkH">
<div align="center">Share or Subscribe:</div>
</td></tr><tr>
<td style="max-width:150px" align="center">

<!--INSERT YOUR GOOGLE BELOW CODE HERE  REMOVE LINE 13-->

  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <g:plusone></g:plusone>

</td>
<td style="max-width:150px; background-image:url("parts/jq/images/ui-bg_diamond-ripple_90_6e6f6f_22x22.png")" align="center">
<a href="https://twitter.com/share" class="twitter-share-button" data-size="large">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


</td>
<td style="max-width:150px" align="center">

<img src="http://lh5.ggpht.com/_W_e1PG0tXUk/SZiQYvASORI/AAAAAAAAAxs/ZS6gwGxcP2s/s800/rss.jpg" alt="RSS Feed" width="32" height="32" border="0" style="border:0" title="Subscribe via RSS" /></a></td>
<td style="max-width:150px" align="center">
<?php
//echo "<a href='";
//echo "$storeLink'>";
?>
<img class="imageAlign" alt="My Stores Logo" title="Check out My Ebay Store" src="http://pics.ebaystatic.com/aw/pics/icon/imgStores_55x16.gif" style="border:0" /></a><br />
</a>
</td>
<td id="fbLike" style="max-width:150px; overflow:hidden; visibility:collapse;">
<div class="fb-like" data-href="<?php echo curPageURL(); ?>" data-width="100" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

</td>
</tr>
</table>