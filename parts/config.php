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
$logo = "http://lh6.ggpht.com/_W_e1PG0tXUk/STT6iOiFxsI/AAAAAAAAAH4/mJEonzm0ob0/s144/preview_32x32.png";

// RSS FEED FOR EBAY STORE.  See docs for help.
$rssFeed = "http://rss.api.ebay.com/ws/rssapi?FeedName=StoreItems&siteId=0&language=en-US&output=RSS20&storeId=480498590"; 

// PICASA IMAGES LOGIN INFO
$picasaUser = "hepvinyl";
$picasaPass	= "recordsales";

// ********************************************************
// STUFF TO CUSTOMIZE YOUR OWN VERSION OF TLhC
// ********************************************************

// FAVICON GRAPHIC
// Go Ahead and locate your favicon icon or png file here.  Use /thisfolder/thisfile.ico  or use http://www.mysite.com/myimagefolder/favicon.ico
$icon = "/images/myfavicon.png";




// Dont really mess with the shit below this.   This is all just to make this config file easier for non php users.
$storeURL = "<a href='$storeLink'>$storeName</a>";
$favico = "<link rel='shortcut icon' href='images/favicon.ico'>";
$storeLogo = "<img src='$logo'>";
$ebayRSS = "<a href=\"$rssFeed\">"; // encloses feed in tags to be used in html
$version = "1.9.5"; // this is actuall the version of TLhC that The Creator Made.  Go Ahead and change this value when you change the code
?>
