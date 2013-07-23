 <?php
 $version = "2.4.2"; // this is actuall the version of TLhC that The Creator Made.  Go Ahead and change this value when you change the code<div align="center"><img src=" http://i5.ebayimg.com/03/i/001/21/72/d5b0_1_bo.JPG"><br>
/**
* *******************************************************
* STUFF FOR YOUR LISTINGS
* see the help files in the docs folder
* configure these variables to make the script give out something meaninfgul at first
* ********************************************************
*/

// STORE NAME
$storeName = "TLhC 45rpm Record Listing"; 
//this variable is added to the partsOut/descript.php file

// STORE LINK  : 	the link to your ebay store
$storeLink = "http://www.stores.ebay.com/id=480498590"; // just start with http://mystore.ebay.whatever/store

// STORE LOGO
//$logo = "http://lh5.ggpht.com/_W_e1PG0tXUk/SYB93ykBnjI/AAAAAAAAAt8/scccZb1zCTg/s144/s2a.jpg";
$logo = "http://lh3.ggpht.com/_W_e1PG0tXUk/SZiMGDaGcKI/AAAAAAAAAxI/Ii8bjrSn3rw/s800/wfFont1-E132nh.jpg";

// RSS FEED FOR EBAY STORE.  See docs for help.
$rssFeed = "http://rss.api.ebay.com/ws/rssapi?FeedName=StoreItems&siteId=0&language=en-US&output=RSS20&storeId=480498590"; 

/**
*
* WE ARE GOING TO TRY THIS WITH FLICKR NOW
* Ill post results.  Picasa is working again
*/

// PICASA IMAGES LOGIN INFO
//$picasaUser = "mohawkdigital";
//$picasaPass	= "";

/**
*   MySQL DATABASE INFO
*	IF YOU ARE USING STORE COMMENTS
*	add your database info here
*	see the documentation for help on stored coments
*/
$user = "tlhcuser";
//$pass = "tlhcpass";
$db = "tlhc";
$link = mysql_connect( "localhost", $user, $pass );
if ( !$link )
	die( "couldnt connect to the data base bioch so what the fuck could be wrong now" );
mysql_select_db( $db )
	or die ( "couldng grab $db: ".mysql_error() );



// ********************************************************
// STUFF TO CUSTOMIZE YOUR OWN VERSION OF TLhC
// ********************************************************



// FAVICON GRAPHIC
// Go Ahead and locate your favicon icon or png file here.  Use /thisfolder/thisfile.ico  or use http://www.mysite.com/myimagefolder/favicon.ico
$icon = "/images/favicon.ico";




// Dont really mess with the shit below this.   This is all just to make this config file easier for non php users.
$storeURL = "<a href='$storeLink'>$storeName</a>";
$favico = "<link rel='shortcut icon' href='images/favicon.ico'>";
$storeLogo = "<img src='$logo'>";
$ebayRSS = "<a href=\"$rssFeed\">"; // encloses feed in tags to be used in html
$tlhcCode = "<a href='http://code.google.com/p/tlhc' target=\"new\" alt=\"Download TLhC\">";
$tlhcLogo = "<img src=\"images/TLhClogo70x100.png\" width=\"70\" height=\"100\">";
$tlhcLink = "$tlhcCode $tlhcLogo </a>";

$cheaterTag = "<div align=\"center\"><img src=\" http://i5.ebayimg.com/03/i/001/21/72/d5b0_1_bo.JPG\" title='TLhC Download It Now!'><br><font face=\"Arial,Helvetica\" size=\"2\">Powered by <a href=\"http://code.google.com/p/tlhc/\">TL html Cheater</a>.<br>The Free as in Freedom (GPLv3) HTML tool.  List your items fast and easy and manage your active items.</font></div><hr>";
$errorIcon = "<div class=\"ui-widget\" style='padding:0 5px 0 5px;'><div class=\"ui-state-error ui-corner-all\" style=\"padding: 0 .7em;\"><p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span>";
$errorIconEnd = "</p></div></div>";
$highBeg = "<div class=\"ui-widget\" style='padding:0 5px 0 5px;'><div class=\"ui-state-highlight ui-corner-all\" style=\"padding: 0 .7em;\"><p><span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>";
//$highEnd2 = "</strong>&nbsp;</div></div>";
$highEnd = "</p></div></div>";
$copyRight = "<div align='center' style='font-size: 1px;'><a href=\"http://code.google.com/p/tlhc/\" target=\"mainFrame\">TLhC</a> version $version &copy; 2008, 2009 <a href=\"../docs/contact.php\">Damian C. Kelly</a>. <a href=\"http://code.google.com/p/tlhc/\">TLhC</a> is <a href=\"http://fsf.org\">Free Software</a> released under the <a href=\"http://www.gnu.org/licenses/gpl.txt\" target=\"_blank\">GPLv3</a>.</div>";
/**
*  	JQUERY UI BUTTONS ON UPDATE DATABASE FORMS
**/
$subButton = "<button type='submit' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all' title='add your comment to the database'>Add<span class='ui-icon ui-icon-plus'></span></button>";
$clearButton = "<button type='reset' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all' title='clear the form field'>Clear<span class='ui-icon ui-icon-trash'></span></button>";
$loadRight = "<a href=\"right.php\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\" title='Reload this Page & Close All Windows'><span class=\"ui-icon ui-icon-arrowreturnthick-1-e\"></span>&nbsp;</a>";
$helpButton = "<a href=\"javascript:animatedcollapse.toggle('helpDocs')\" target=\"mainFrame\" title='Load the Help Files' class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\"><span class=\"ui-icon ui-icon-help\" title='Load the Help Files' ></span>&nbsp;</a>";
//$searchButton = "<a href=\"javascript:animatedcollapse.toggle('search')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\"><span class=\"ui-icon ui-icon-search\"></span>&nbsp;</a>";
$picButton = "<a href=\"javascript:animatedcollapse.toggle('picasaImages')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\"><span class=\"ui-icon ui-icon-image\" title='Load Pictures' ></span>&nbsp;</a>";
$picasaViewerButton = "<a href=\"javascript:animatedcollapse.toggle('picasaViewer')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\"><span class=\"ui-icon ui-icon-image\"></span>&nbsp;</a>";
$addCommsButton = "<a href=\"javascript:animatedcollapse.toggle('inComs')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\" title='Add to the Stored Comments'><span class=\"ui-icon ui-icon-circle-plus\"></span>&nbsp;</a>";
$addCommsButton2 = "<a href=\"javascript:animatedcollapse.toggle('inComs2')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\" title='Add to the Stored Comments'><span class=\"ui-icon ui-icon-plus\"></span>&nbsp;</a>";
$showCommsButton = "<a href=\"javascript:animatedcollapse.toggle('showComms')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\" title='Add to the Stored Comments'><span class=\"ui-icon ui-icon-circle-zoomin\"></span>&nbsp;</a>";
$showCommsButton2 = "<a href=\"javascript:animatedcollapse.toggle('showComms2')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\" title='Add to the Stored Comments'><span class=\"ui-icon ui-icon-zoomin\"></span>&nbsp;</a>";
$abbrevsButton = "<a href=\"javascript:animatedcollapse.toggle('midComms2')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\" title='Load the 45 Abbreviations'><span class=\"ui-icon ui-icon-note\" title='Load the 45 Abbreviations'></span>&nbsp;</a>";
$search2 = "<a href=\"javascript:animatedcollapse.toggle('search2')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\" title='Load the 45 Search Forms'><span class=\"ui-icon ui-icon-search\" title='Load the 45 Search Forms'></span>&nbsp;</a>";
$gplButton = "<a href=\"javascript:animatedcollapse.toggle('licensegpl')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\" title='Show the TLhC License'><span class=\"ui-icon ui-icon-check\" title='Show the TLhC License'></span>&nbsp;</a>";
$previewButton = "<a href=\"javascript:animatedcollapse.toggle('outPutter')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\" title='Toggle the Preview Windows'><span class=\"ui-icon ui-icon-folder-open\" style='display:inline; float: none; clear: left;'></span>&nbsp;</a>";
$previewSubmit = "<button type='submit' target='mainFrame' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all'><span class='ui-icon ui-icon-folder-open'></span>Preview</button> ";
$refreshButton = "<button onclick='location.reload()' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all'><span class='ui-icon ui-icon-refresh'></span>Update</button>";
$themeChooser = "<button onclick=\"jqalert($(&quot;#AddNewCom&quot;).html(), 'Choose the Listing theme')\" class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all'><span class='ui-icon ui-icon-star'></span>Choose Theme</button>";
$dialogAddButton = "<button  rel=\"partsIn/commsDialogAdd.php\" class='opendialog fg-button fg-button-icon-right2 ui-state-default ui-corner-all'><span class='ui-icon ui-icon-newwin'></span>Add Comment</button>";
/**
*
*	THESE ARE SOME GENERIC JQUERY UI BUTTONS WITHOUT LINKS SO THEY CAN BE USED AS TOOLTIPS
*
*/
$photoButton = "<a href='parts/picasaViewer.php' title='Load the Photos' target='mainFrame' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all'><span class='ui-icon ui-icon-link' title='Load the Photos' ></span>Choose Picture</a>";
$folderCButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all'><span class='ui-icon ui-icon-folder-collapsed' title='Load the Help Files' ></span>&nbsp;</a>";
$folderOButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all'><span class='ui-icon ui-folder-open' title='Load the Help Files' ></span>&nbsp;</a>";
$lightbulbButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all'><span class='ui-icon ui-icon-lightbulb' title='Load the Help Files' ></span>&nbsp;</a>";
$mailCButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all'><span class='ui-icon ui-icon-mail-closed' title='Load the Help Files' ></span>&nbsp;</a>";
$houseButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all'><span class='ui-icon ui-icon-home' title='Load the Help Files' ></span>&nbsp;</a>";
$keyButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all'><span class='ui-icon ui-icon-key' title='Load the Help Files' ></span>&nbsp;</a>";
$imageTTButton = "<a href='docs/tooltips/picasa.htm' class='jTip' id='four26' name='Picasa'><span class='ui-icon ui-icon-image' style='float:right; margin-top:2px;'></span></a>";
$lockedButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all'><span class='ui-icon ui-icon-locked' title='Load the Help Files' ></span>&nbsp;</a>";
$starButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all'><span class='ui-icon ui-icon-star' title='Load the Help Files' ></span>&nbsp;</a>";
$newwinButton = "<a href='#' title='Load the Help Files' class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\"><span class='ui-icon ui-icon-newwin' title='Load the Help Files' ></span>&nbsp;</a>";
$contactButton = "<a href='docs/contact.php' class='jTip' id='four26' name='Contact'><span class='ui-icon ui-icon-contact' style='float:right; margin-top:2px;'></span></a>";
$contactButton2 = "<a href=\"docs/contact.php\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\" title='Contact the Developer'><span class=\"ui-icon ui-icon-contact\"></span>&nbsp;</a>";
$flagButton = "<a href='docs/tooltips/terms.htm' class='jTip' id='four25' name='Software License'><span class='ui-icon ui-icon-flag' style='float:right; margin-top:2px;'></span></a>";
$pinSButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all'><span class='ui-icon ui-icon-pin-s' title='Load the Help Files' ></span>&nbsp;</a>";
?>
