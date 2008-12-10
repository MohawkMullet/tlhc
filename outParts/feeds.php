<?php
//include('../parts/config.php');
?>
                <table border="2" style="border-style:groove; border-color:#3d3d3d;" align="center">
<tr>
	<td>               
               <table width="731" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#d9d9d9">
                  <tr>
                      <td style="width:20%" scope="col" align="center">
					  <!-- INSERT LINK TO RSS FEED -->
<?php
echo $ebayRSS;
?>
                      		<img alt="Add to Google" src="http://buttons.googlesyndication.com/fusion/add.gif" style="border:0" /></a>
                      </td>
                      <td style="width:20%" scope="col" align="center">
					  					  <!-- INSERT LINK TO RSS FEED -->
<?php
echo $ebayRSS;
?>
                      		<img height="17" alt="Add to My Yahoo!" src="http://us.i1.yimg.com/us.yimg.com/i/us/my/addtomyyahoo4.gif" width="91" align="middle" style="border:0" /></a>
                      </td>
                      <td style="width:20%" scope="col" align="center">
					  					  <!-- INSERT LINK TO RSS FEED -->
<?php
echo $ebayRSS;
?>
                      		<img height="16" alt="RSS Feed" src="http://graphics8.nytimes.com/images/global/icons/rss.gif" width="44" style="border:0" /></a>
                      </td>
                      <td style="width:20%" scope="col" align="center">
                      		<a href="http://www.stores.ebay.com/id=480498590">
                      		<img class="imageAlign" alt="My Stores Logo" src="http://pics.ebaystatic.com/aw/pics/icon/imgStores_55x16.gif" style="border:0" /></a><br />
                      		<span class="greyFontSmall"><a href="<?php
echo $storeLink;
?>">eBay Store: </a></span>
                      </td>
                      <td style="width:20%" scope="col" align="center">
                      		<span class="greyFontSmall">Add us to your <a href="">favorites list</a>!</span>
                      </td>
                    </tr>
                    <tr>
                         <td colspan="5">
                         		<span class="greyFont">ADD OTHER LINKS OR TEXT IN outParts/feeds.php</span>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="5" align="center">
                         		<span class="blueFontBold">Make us an offer! Look for the Make offer button near the Buy It Now.</span>
                         </td>
                  </tr>
                </table>
</td>
</tr>
</table>