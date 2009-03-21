<?php
/**
* *******************************************************
* STUFF FOR YOUR LISTINGS
* see the help files in the docs folder
* configure these variables to make the script give out something meaninfgul at first
* ********************************************************
*/

// STORE NAME
$storeName = "HepVinyl's Vintage Records"; 
//this variable is added to the partsOut/descript.php file

// STORE LINK  : 	the link to your ebay store
$storeLink = "http://www.stores.ebay.com/id=480498590"; // just start with http://mystore.ebay.whatever/store

// STORE LOGO
//$logo = "http://lh5.ggpht.com/_W_e1PG0tXUk/SYB93ykBnjI/AAAAAAAAAt8/scccZb1zCTg/s144/s2a.jpg";
$logo = "http://lh3.ggpht.com/_W_e1PG0tXUk/SZiMGDaGcKI/AAAAAAAAAxI/Ii8bjrSn3rw/s800/wfFont1-E132nh.jpg";

// RSS FEED FOR EBAY STORE.  See docs for help.
$rssFeed = "http://rss.api.ebay.com/ws/rssapi?FeedName=StoreItems&siteId=0&language=en-US&output=RSS20&storeId=480498590"; 

/**
*	IF YOU ARE USING STORE COMMENTS
*	add your database info here
*	see the documentation for help on stored coments
*/
$user = "tlhcuser";
$pass = "tlhcpass";
$db = "tlhc";
$link = mysql_connect( "localhost", $user, $pass );
if ( !$link )
	die( "couldnt connect bioch" );
mysql_select_db( $db )
	or die ( "couldng grab $db: ".mysql_error() );



// ********************************************************
// STUFF TO CUSTOMIZE YOUR OWN VERSION OF TLhC
// ********************************************************

// PICASA IMAGES LOGIN INFO
$picasaUser = "hepvinyl";
$picasaPass	= "";

// FAVICON GRAPHIC
// Go Ahead and locate your favicon icon or png file here.  Use /thisfolder/thisfile.ico  or use http://www.mysite.com/myimagefolder/favicon.ico
$icon = "/images/myfavicon.png";




// Dont really mess with the shit below this.   This is all just to make this config file easier for non php users.
$storeURL = "<a href='$storeLink'>$storeName</a>";
$favico = "<link rel='shortcut icon' href='images/favicon.ico'>";
$storeLogo = "<img src='$logo'>";
$ebayRSS = "<a href=\"$rssFeed\">"; // encloses feed in tags to be used in html
$version = "2.0.6"; // this is actuall the version of TLhC that The Creator Made.  Go Ahead and change this value when you change the code<div align="center"><img src=" http://i5.ebayimg.com/03/i/001/21/72/d5b0_1_bo.JPG"><br>
$cheaterTag = "<div align=\"center\"><img src=\" http://i5.ebayimg.com/03/i/001/21/72/d5b0_1_bo.JPG\"><br><font face=\"Arial,Helvetica\" size=\"2\">Powered by <a href=\"http://code.google.com/p/tlhc/\">TL html Cheater</a>.<br>The Free as in Freedom (GPLv3) HTML tool.  List your items fast and easy and manage your active items.</font></div><hr>";
$errorIcon = "<div class=\"ui-widget\"><div class=\"ui-state-error ui-corner-all\" style=\"padding: 0 .7em;\"><p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span><strong>Alert: </strong>";
$errorIconEnd = "</p></div></div>";
$highBeg = "<div class=\"ui-widget\"><div class=\"ui-state-highlight ui-corner-all\" style=\"margin-top: 5px; padding: 0 .7em;\"><p><span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span><strong>Your New Comment:</strong>&nbsp;";
$highEnd = "</p></div></div>";
$copyRight = "<div align='center' style='font-size: 1px;'><a href=\"http://code.google.com/p/tlhc/\" target=\"mainFrame\">TLhC</a> version $version &copy; 2008, 2009 <a href=\"../docs/contact.php\">Damian C. Kelly</a>. <a href=\"http://code.google.com/p/tlhc/\">TLhC</a> is <a href=\"http://fsf.org\">Free Software</a> released under the <a href=\"http://www.gnu.org/licenses/gpl.txt\" target=\"_blank\">GPLv3</a>.</div>";
?>
