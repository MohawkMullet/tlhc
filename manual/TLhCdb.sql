-- phpMyAdmin SQL Dump
-- version 3.0.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2008 at 01:56 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tlhc`
--

-- --------------------------------------------------------

--
-- Table structure for table `labelComms`
--

CREATE TABLE IF NOT EXISTS `labelComms` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(200) NOT NULL COMMENT 'value will be the same as the option',
  `name` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `labelComms`
--

INSERT INTO `labelComms` (`id`, `value`, `name`) VALUES
(1, 'is fully intact and like new', 'is fully intact and like new'),
(2, ' shows Very light ring wear', ' shows Very light ring wear'),
(3, 'shows Light ring wear', 'shows Light ring wear'),
(4, 'has small paper tear', 'has small paper tear'),
(5, 'shows minimal wear', 'shows minimal wear'),
(6, 'shows price tag stain', 'shows price tag stain'),
(14, 'shows light wear either side', 'shows light wear either side');

-- --------------------------------------------------------

--
-- Table structure for table `miscComms`
--

CREATE TABLE IF NOT EXISTS `miscComms` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(400) NOT NULL,
  `name` varchar(400) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `miscComms`
--

INSERT INTO `miscComms` (`id`, `value`, `name`) VALUES
(1, '5 song EP', '5 song EP'),
(2, '4 Song EP', '4 Song EP'),
(3, 'Stored in mylar protective clear outer jacket. ', 'Stored in mylar protective clear outer jacket. '),
(16, 'complete with lyric sheet', 'complete with lyric sheet'),
(15, 'fold open picture sleeve', 'fold open picture sleeve'),
(14, '6 song EP', '6 song EP'),
(17, 'black vinyl', 'black vinyl');

-- --------------------------------------------------------

--
-- Table structure for table `output`
--

CREATE TABLE IF NOT EXISTS `output` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(60) NOT NULL COMMENT 'title of listing',
  `listing` varchar(50000) NOT NULL COMMENT 'this is the listing code',
  `pic` varchar(500) NOT NULL COMMENT 'name of the jpg',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `output`
--

INSERT INTO `output` (`id`, `title`, `listing`, `pic`) VALUES
(1, 'this is a test title', '							<style type="text/css"> .whole { 	border: 4px ridge #1C2D59; 	background-position: 4px 4px; 	background-repeat: repeat; 	background-image: url(http://i23.ebayimg.com/03/i/001/12/f9/ad90_1_b.GIF); } .whiteFontBold { 	font: bold 18px Arial, Helvetica, sans-serif; 	line-height: 14px; 	color: #FFFFFF; 	text-align: center; } .greyFontLarge { 	font: bold 12px Arial, Helvetica, sans-serif; 	color: #3d3d3d; } .greyFont { 	font: bold 12px Verdana, Arial, Helvetica, sans-serif; 	color: #3D3D3D; 	text-align: left; 	letter-spacing: 1px; } .greyFontSmall { 	font: 12px Arial, Helvetica, sans-serif; 	color: #282828; 	text-align: left; } .multicomms { 	font: bold 11px Verdana, Arial, Helvetica, sans-serif; 	text-transform: capitalize; 	color: #282828; 	padding-left: 45px; 	position: relative; 	width: 350px; 	overflow: scroll; 	clear: both; 	top: 10px; } .greyFontSmaller { 	font: 10px Arial, Helvetica, sans-serif; 	color: #282828; 	text-align: left; } .blueFontBold { 	font: 500 14px Verdana, Arial, Helvetica, sans-serif; 	color: #1c2d59; 	text-align: center; } .blueFont18 { 	font: bolder 18px Arial, Helvetica, sans-serif; 	color: #1c2d59; 	background-color: #cccccc; } .lowerencasement { 	border: medium ridge #282828; } </style> <table width="100%" cellspacing="6" id="whole" class="whole">   <tr> 	<td><a name="top"></a>  <table cellpadding="5" cellspacing="2" border="4" bgcolor="#d9d9d9" width="100%" style="border-bottom-width: 0px; border-top-width: 0px; border-right-width:0px;"  id="descript">   <caption class="blueFont18"><em><strong>Hep Vinyl''s Vintage Records</strong></em></caption> 		<tr> 			<th colspan="2" style="border-color:#dcdcdc;"  bgcolor="#1c2d59" scope="col" style="font:bolder;" style="border-top-width:0px;" style="border-bottom-width:0px; border-right-width:0px;"> 					<span class="whiteFontBold"> 			Title</span>   			</th> 		</tr> 		<tr> 			<td align="left" valign="top" bgcolor="#d9d9d9" style="border-left-width:0px; border-top-width:0px; border-right-width:4px;"> 					  					 					<div align="left"> </div>         					<hr align="left" width="400px" size="3" /> <div align="left"> </div> <hr align="left" width="400px" size="3" />         					<div align="left"> 		</div>          					      					     					 					<br> 					 			</td>    			<td valign="top" bgcolor="#cccccc" style="border-right-width:0px; border-top-width:0px; border-bottom-width:0px;"> 		 					 <div align="center"><img alt="Hep Vinyl" src="http://i9.ebayimg.com/03/i/001/11/55/a20d_1_b.GIF" align=top height=90 width=90></div> 					<font color="#cccccc" size="1">11/29/2008 08:22:21 PM</font> 			</td> 		</tr> </table><br> <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" id="blockOutBG" class="lowerencasement"> <tr align="center"> <td width="100%" bgcolor="#cccccc"> <table width="565"  align="center" border="0" cellpadding="4" cellspacing="0" bgcolor="#d9d9d9" id="about"> <tr> <th colspan="3" bgcolor="#cccccc" scope="col" class="blueFontBold" style="font-size:smaller"> Hep Vinyl has been in the Record Business for over 30 years. His retail store called Record Reunion is located in Pueblo, Colorado. Over 20,000 LP''s & 45''s in stock. </th> </tr> <tr class="titlebar" bgcolor="#dcdcdc"> <td> <div align="center"> <a href="http://stores.ebay.com/hepvinyl/pages/about-us-hep-vinyl"> <img src="http://i2.ebayimg.com/03/i/001/1e/98/2f4e_1_b.JPG" alt="Browse Our Unlisted 45''s" width="200" height="150" border="0" /> </a> </div> </td> <td> <div align="center"> <img src="http://i24.ebayimg.com/05/i/001/1e/98/30bc_1_b.JPG" alt="Shop Our Colorado Store" width="200" height="150" border="0" /> </div> </td> <td> <div align="center"> <a href="http://stores.ebay.com/hepvinyl/pages/about-us-hep-vinyl">  <img src="http://i18.ebayimg.com/06/i/001/1e/98/319a_1_b.JPG" alt="Visit Us In Pueblo, CO" width="144" border="0" height="150" /> </a> </div> </td> </tr> </table>            <table width="100%" border="0" cellpadding="2" cellspacing="3" bgcolor="#cccccc" id="gradesAndKeys">               <tr>               <td colspan="3" bgcolor="#cccccc" scope="col">               <div align="center" class="greyFontLarge">Notes:</div>               </td>               </tr>               <tr>                 <td align="left" valign="top" bgcolor="#cccccc" style="width:25%"> 		     		<a name="grade" id="grade"></a> 		    <span class="greyFont"><strong>Record Grading</strong></span>    	     		<br />    	    <span class="greyFont">M-</span> or <span class="greyFont">NM:</span>    	    <span class="greyFontSmaller"> near mint. a near perfect, probably unplayed record</span>    	     		<br />    	    <span class="greyFont">EX</span> or <span class="greyFont">VG++:</span>    	       <span class="greyFontSmaller">close to like new with only superficial signs of use that don’t affect play.</span>     	     		<br />    	    <span class="greyFont">VG+:</span>     	    <span class="greyFontSmaller">surface wear is evident and probably scuffs and wear that affect sound. no skips but surface noise.</span>    	     		<br />     	 	 <span class="greyFont">VG:</span>         	 <span class="greyFontSmaller">significant wear and marks and usually quite noticeable surface noise</span>        			<br />                  </td>                 <td align="left" valign="top" style="width:75%"> <!-- GraderKey Went HERE -->                   <table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC" id="commentkey" style="font:small;">                     <tbody>                       <tr valign="top" align="left">                         <td><a name="comments" id="comments"></a> <span class="greyFontSmaller"><strong>7"</strong> - standard 45</span></td>                         <td><span class="greyFontSmaller"><strong>ops</strong> - orig Record Co sleeve</span></td>                         <td><span class="greyFontSmaller"><strong>ss</strong> - still sealed</span></td>                       </tr>                       <tr>                         <td><span class="greyFontSmaller"><strong>7" 33</strong> - 7-inch 33rpm </span></td>                         <td align="left" valign="top"><span class="greyFontSmaller"><strong>ost</strong> - orig soundtrack</span></td>                         <td><span class="greyFontSmaller"><strong>toc</strong> - tape on cover</span></td>                       </tr>                       <tr>                         <td><span class="greyFontSmaller"><strong>bb</strong> - bb hole in cover</span></td>                         <td><span class="greyFontSmaller"><strong>pc</strong> - pic cover usually hard</span></td>                         <td><span class="greyFontSmaller"><strong>tol </strong>- tape on label</span></td>                       </tr>                       <tr>                         <td><span class="greyFontSmaller"><strong>boot</strong> - bootleg</span></td>                         <td><span class="greyFontSmaller"><strong>promo</strong> - promotional copy</span></td>                         <td><span class="greyFontSmaller"><strong>wlp</strong> - white label promo</span></td>                       </tr>                       <tr>                         <td><span class="greyFontSmaller"><strong>coh</strong> - cut-out-hole</span></td>                         <td align="left" valign="top"><span class="greyFontSmaller"><strong>ps</strong> - picture sleeve (45)</span></td>                         <td><span class="greyFontSmaller"><strong>wo(b)c</strong> - writing on (back) cover</span></td>                       </tr>                       <tr>                         <td><span class="greyFontSmaller"><strong>co</strong> - cut-out</span></td>                         <td><span class="greyFontSmaller"><strong>re</strong> - reissue</span></td>                         <td><span class="greyFontSmaller"><strong>wol </strong>- writing on label</span></td>                       </tr>                       <tr>                         <td><span class="greyFontSmaller"><strong>cv - </strong>colored vinyl</span></td>                         <td><span class="greyFontSmaller"><strong>rw </strong>- ring wear</span></td>                         <td><span class="greyFontSmaller"><strong>xol</strong> - "x" on label</span></td>                       </tr>                       <tr>                         <td><span class="greyFontSmaller"><strong>dj </strong>- Radio Station (promo)</span></td>                         <td><span class="greyFontSmaller"><strong>s</strong> - stereo Lp </span></td>                         <td><span class="greyFontSmaller"> </span></td>                       </tr>                       <tr>                         <td align="left" valign="top"><span class="greyFontSmaller"><strong>EP</strong> - Extended Play 7"</span></td>                         <td><span class="greyFontSmaller"><strong>sh</strong> - small hole 7" </span></td>                         <td><span class="greyFontSmaller"> </span></td>                       </tr>                       <tr>                         <td><span class="greyFontSmaller"><strong>imp</strong> - import</span></td>                         <td><span class="greyFontSmaller"><strong>sl</strong> - slight </span></td>                         <td><span class="greyFontSmaller"> </span></td>                       </tr>                       <tr>                         <td><span class="greyFontSmaller"><strong>mj - </strong>stored in mylar jacket</span></td>                         <td><span class="greyFontSmaller"><strong>sm spl</strong> - Seam Split</span></td>                         <td><span class="greyFontSmaller"> </span></td>                       </tr>                       <tr>                         <td><span class="greyFontSmaller"><strong>m/s </strong>- mono/stereo same song</span> </td>                         <td><span class="greyFontSmaller"><strong>so(b)c</strong> - sticker on (back) cover</span> </td>                         <td><span class="greyFontSmaller"> </span></td>                       </tr>                       <tr>                         <td align="left" valign="top"><span class="greyFontSmaller"><strong>nap</strong> - not affecting play</span></td>                         <td><span class="greyFontSmaller"><strong>sol</strong> - slicker on label</span> </td>                         <td><span class="greyFontSmaller"> </span> </td>                       </tr>                       <tr>                         <td><span class="greyFontSmaller"><strong>oins - </strong>orig inserts (lyrics, flyers..)</span> </td>                         <td><span class="greyFontSmaller"> </span> </td>                         <td><span class="greyFontSmaller"> </span> </td>                       </tr>                     </tbody>                   </table>           		</td>                 <td style="width:90px" valign="top" bgcolor="#d9d9d9">             <!-- RIGHT HAND STORE LINKS TABLE GOES HERE -->                   <table width="100%" border="0" cellpadding="0" cellspacing="0" id="rightHanderDescBox" summary="righthand">                     <tbody>                       <tr>                         <td align="left" valign="top">                         <div align="center"><br />                          <span class="blueFontBold">                        	 <a href="http://stores.ebay.com/HepVinyl/About-Us-Hep-Vinyl.html" style="text-decoration:none;">About Us!</a>                        	 </span>                        	 <br><br />                          <span class="blueFontBold"> 									<a href="http://stores.ebay.com/HepVinyl/FAQ-HepVinyl-Store.html" style="text-decoration:none;">FAQ''s</a> 									</span> <br><br>                           <br>                           <a href="http://www.hepvinyl.com">                           <img src="http://i9.ebayimg.com/03/i/001/11/55/a20d_1_b.GIF" alt="We Got The Tunes~!" width="90" height="90" style="border:0" align="top" id="HepVinylLogo2" />                           </a>                           	<br>                           <span class="blueFontBold">                           <a href="http://hepvinyl.com" style="text-decoration:none;">Store Home</a>                           </span>                           <br>                           </div>                           </td>                       </tr>                       <tr>                         <td>                         </td>                       </tr>                     </tbody>                   </table>                </td>                </tr>              </table></td> </tr> </table>   <br><div align="center"><a href="#top" style="text-decoration:none;">Back to Top</a></div>                 <table border="2" style="border-style:groove;" style="border-color:#3d3d3d;" align="center"> <tr> 	<td>                               <table width="731" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#d9d9d9">                   <tr>                       <td style="width:20%" scope="col" align="center">                       		<a href="http://fusion.google.com/add?source=atgs&feedurl=http%3A//rss.api.ebay.com/ws/rssapi%3FFeedName%3DStoreItems%26siteId%3D0%26language%3Den-US%26output%3DRSS20%26storeId%3D480498590">                       		<img alt="Add to Google" src="http://buttons.googlesyndication.com/fusion/add.gif" style="border:0" /></a>                       </td>                       <td style="width:20%" scope="col" align="center">                       		<a href="http://us.rd.yahoo.com/my/atm/Record%20Reunion/HepVinyl%20Vintage%2045%27s/*http://add.my.yahoo.com/rss?url=http%3A//rss.api.ebay.com/ws/rssapi%3FFeedName%3DStoreItems%26siteId%3D0%26language%3Den-US%26output%3DRSS20%26storeId%3D480498590">                       		<img height="17" alt="Add to My Yahoo!" src="http://us.i1.yimg.com/us.yimg.com/i/us/my/addtomyyahoo4.gif" width="91" align="middle" style="border:0" /></a>                       </td>                       <td style="width:20%" scope="col" align="center">                       		<a href="http://rss.api.ebay.com/ws/rssapi?FeedName=StoreItems&siteId=0&language=en-US&output=RSS20&storeId=480498590">                       		<img height="16" alt="RSS Feed" src="http://graphics8.nytimes.com/images/global/icons/rss.gif" width="44" style="border:0" /></a>                       </td>                       <td style="width:20%" scope="col" align="center">                       		<a href="http://www.stores.ebay.com/id=480498590">                       		<img class="imageAlign" alt="My Stores Logo" src="http://pics.ebaystatic.com/aw/pics/icon/imgStores_55x16.gif" style="border:0" /></a><br />                       		<span class="greyFontSmall"><a href="http://stores.ebay.com/HepVinyl">eBay Store: HepVinyl</a></span>                       </td>                       <td style="width:20%" scope="col" align="center">                       		<span class="greyFontSmall">Add us to your <a href="http://my.ebay.com/ws/eBayISAPI.dll?AcceptSavedSeller&sellerid=hepvinyl&sspageName=DB:FavList">favorites list</a>!</span>                       </td>                     </tr>                     <tr>                          <td colspan="5">                          		<span class="greyFont">We Combine Shipping. Just $0.25 (overseas or domestic) for each additonal 45. Domestic orders over 5 45''s will automatically be upgraded to Priority Mail shipping free of charge.</span>                          </td>                      </tr>                      <tr>                          <td colspan="5" align="center">                          		<span class="blueFontBold">Make us an offer! Many of our rare 45''s will be sold for your best offer. Look for the Make offer button near the Buy It Now.</span>                          </td>                   </tr>                 </table> </td> </tr> </table>  </td>   </tr> </table> <div align="center"><a href="#top" style="text-decoration:none;">Back to Top</a></div>						', 'samplepic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promoComms`
--

CREATE TABLE IF NOT EXISTS `promoComms` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(200) NOT NULL,
  `name` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `promoComms`
--

INSERT INTO `promoComms` (`id`, `value`, `name`) VALUES
(1, 'PromotionAL Copy both sides', 'Promotional Copy both sides'),
(2, 'PromotionAL Copy Not For Sale both sides', 'Promotional Copy Not For Sale both sides'),
(3, 'Promotion Copy Not For Sale both sides', 'Promotion Copy Not For Sale both sides'),
(4, 'Demonstration Not For Sale both sides.', 'Demonstration Not For Sale both sides.'),
(5, 'For Radio Station Use Only on both sides.', 'For Radio Station Use Only on both sides.'),
(6, 'Radio Station Copy and Not For Sale both sides.', 'Radio Station Copy and Not For Sale both sides.'),
(7, 'DJ Copy', 'DJ Copy'),
(8, 'DJ Copy both sides.  Plug Side on A', 'DJ Copy both sides.  Plug Side on A'),
(9, 'Not For Resale and Radio Station Copy both sides.', 'Not For Resale and Radio Station Copy both sides.'),
(10, 'Not For Sale on both sides with PLUG SIDE on A.', 'Not For Sale on both sides with PLUG SIDE on A.'),
(11, 'Promotion Not For Sale', 'Promotion Not For Sale'),
(12, 'Special Rush Service', 'Special Rush Service'),
(13, 'Promotion Record and Not For Sale both sides', 'Promotion Record and Not For Sale both  sides'),
(19, 'For Promotion Only and Not For Sale both sides', 'For Promotion Only and Not For Sale both sides'),
(18, 'Promo Copy and Not for Sale both sides', 'Promo Copy and Not for Sale both sides'),
(20, 'Plug Side on A', 'Plug Side on A'),
(104, 'Promotional Not For Sale both sides', 'Promotional Not For Sale both sides');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(400) NOT NULL,
  `pass` varchar(400) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`) VALUES
(1, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `vinylComms`
--

CREATE TABLE IF NOT EXISTS `vinylComms` (
  `id` int(11) NOT NULL auto_increment,
  `value` varchar(200) NOT NULL COMMENT 'this is the value of the select form element',
  `name` varchar(200) default NULL COMMENT 'this is the name of the form element',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC COMMENT='comments about the vinyl condition' AUTO_INCREMENT=96 ;

--
-- Dumping data for table `vinylComms`
--

INSERT INTO `vinylComms` (`id`, `value`, `name`) VALUES
(10, 'Vinyl is in Perfect condition. Probably Never Been Played', 'Perfect condition. Probably Never Been Played'),
(20, 'This vinyl is in excellent condition', 'This vinyl is in excellent condition'),
(30, 'Very light wear on vinyl', 'Very light wear on vinyl'),
(40, 'vinyl shows Very light wear either side', 'vinyl shows Very light wear either side'),
(52, 'vinyl shows light wear either side', 'vinyl shows light wear either side'),
(60, 'vinyl shows light scuffs and wear either side', 'vinyl shows light scuffs and wear either side'),
(53, 'vinyl is in very good condition', 'vinyl is in very good condition'),
(41, 'A few very light marks on either side.  Does not affect play. ', 'A few very light marks on either side.  Does not affect play. '),
(39, 'vinyl shows a few very light marks', 'vinyl shows a few very light marks'),
(21, 'vinyl is in very nice condition', 'vinyl is in very nice condition'),
(61, 'plays without problems', 'plays without problems');
