 <?php
/*  $link = mysqli_connect('mysql.hostinger.co.uk','u378891030_tlhcu','tlhcpass420'); 
if (!$link) { 
    die('??? CANNOT CONNECT ??? to the database at mohawk.hol.es: ' . mysqli_error()); 
mysqli_select_db( $db )
	or die ( "couldng grab $db: ".mysqli_error() );
}  */
//echo 'Connection OK'; 
 $version = "5.5.3"; // this is actuall the version of TLhC that The Creator Made.  Go Ahead and change this value when you change the code<div align="center"><img src=" http://i5.ebayimg.com/03/i/001/21/72/d5b0_1_bo.JPG"><br>
$releaseDate ="Nov 3rd 2015";
/**
* *******************************************************
* STUFF FOR YOUR LISTINGS
* see the help files in the docs folder
* configure these variables to make the script give out something meaninfgul at first
* ********************************************************
*/

// STORE NAME
$storeName = "Colorado Connect"; 
//this variable is added to the partsOut/descript.php file

// STORE LINK  : 	the link to your ebay store
$storeLink = "http://www.stores.ebay.com/id=480498590"; // just start with http://mystore.ebay.whatever/store

// STORE LOGO
$logo = "https://lh3.googleusercontent.com/-MNabKULLBwo/VjbvAVyGx1I/AAAAAAAAXbY/S6lEU-cQsmA/s2048-Ic42/pic_skyline_p.psd333.png";

// RSS FEED FOR EBAY STORE.  See docs for help.
$rssFeed = "http://rss.api.ebay.com/ws/rssapi?FeedName=StoreItems&siteId=0&language=en-US&output=RSS20&storeId=480498590"; 

// PICASA IMAGES LOGIN INFO
$picasaUser = "mohawkdigital";
$picasaPass	= "";

$user = "tlhcuser";
$pass = "tlhcpass";
$db = "tlhc";
$link = mysql_connect( "localhost", $user, $pass );
if ( !$link )
	die( "couldnt connect to the data base bioch" );
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
/* 
THESE ARE MOSTLY JUST TAGS FOR STYLE
 */
$cheaterTag = "<div align=\"center\"><img src=\"http://i.imgur.com/xenRmfW.png\" title='TLhC Download It Now!'><br><font face=\"Arial,Helvetica\" size=\"1\">Powered by <a href=\"http://code.google.com/p/tlhc/\">TL html Cheater</a>.<br>The Free as in Freedom (GPLv3) HTML tool.  List your items fast and easy and manage your active items.</font></div><hr>";
$errorIcon = "<div class=\"ui-widget desc\" style='padding:0 5px 0 5px;'><div class=\"ui-state-error ui-corner-all\" style=\"padding: 0 .7em;\"><p><span class=\"ui-icon silk-icon-error\" style=\"float: left; margin-right: .3em;\"></span>";
$errorIconEnd = "</p></div></div>";
$highBeg = "<div class=\"ui-widget\" style='padding:0 5px 0 5px;'><div class=\"ui-state-highlight ui-corner-all\" style=\"padding: 0 .7em;\"><p><span class=\"ui-icon ui-icon-info\" style=\"float: left; margin-right: .3em;\"></span>";
//$highEnd2 = "</strong>&nbsp;</div></div>";
$highEnd = "</p></div></div>";
$copyRight = "<div align='center' style='font-size: 10px;'><a href=\"http://code.google.com/p/tlhc/\" target=\"mainFrame\">TLhC</a> version $version &copy; 2008 - 2015<a href=\"../../docs/contact.php\">Damian C. Kelly</a>. <a href=\"https://github.com/MohawkMullet/tlhc\">TLhC</a> is <a href=\"http://fsf.org\">Free Software</a> released under the <a href=\"http://www.gnu.org/licenses/gpl.txt\" target=\"_blank\">GPLv3</a>.</div>";
$fieldsetIcon = "<span style='padding:0.6pt; border-width:2px; border-color:#999999; border-style:groove; float:left; clear:none; padding-left:-3px; position:relative;' class='ui-corner-all'><span class='ui-icon ui-icon-gear ui-corner-all' style='top:-2px; margin:0.1pt; background-color:#999999;'></span></span>";
/**
*  	JQUERY UI BUTTONS ON UPDATE DATABASE FORMS
**/
$subButton = "<button type='submit' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all tooltip' title='Submit this form and see what happens'>Add&nbsp;&nbsp;<span class='ui-icon silk-icon-script-add' style='display:inline-block;'></span></button>";
$clearButton = "<button type='reset' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all tooltip' title='clear the form field'>Clear&nbsp;<span class='ui-icon silk-icon-folder-error' style='display:inline-block;'></span></button>";
$loadRight = "<a href=\"right.php\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Reload the Righthand Frame'>&nbsp;<span class=\"ui-icon ui-icon-arrowthick-1-ne\" style='display:inline-block;'></span>&nbsp;</a>";
$helpButton = "<a href=\"javascript:animatedcollapse.toggle('helpDocs')\" target=\"mainFrame\" title='Load the Help Files' class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\"><span class=\"ui-icon ui-icon-help tooltip\"  style='display:inline-block; cursor:help;'title='Load the Help Files' ></span>&nbsp;</a>";
//$searchButton = "<a href=\"javascript:animatedcollapse.toggle('search')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all\"><span class=\"ui-icon ui-icon-search\"></span>&nbsp;</a>";
$picButton = "<a href=\"javascript:animatedcollapse.toggle('picasaImages')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\"><span class=\"ui-icon ui-icon-image\"></span>&nbsp;</a>";
$addCommsButton = "<a href=\"javascript:animatedcollapse.toggle('inComs')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Add to the Stored Comments'><span class=\"ui-icon silk-icon-newspaper-add tooltip\"></span>&nbsp;</a>";
$addCommsButton45s = "<a href=\"javascript:animatedcollapse.toggle('inComs')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Add to the Stored Comments'><span class=\"ui-icon silk-icon-newspaper-add tooltip\"></span>&nbsp;</a>";
$addCommsButtonSoldiers = "<a href=\"javascript:animatedcollapse.toggle('inComs3')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Add to the Stored Comments'><span class=\"ui-icon silk-icon-award-star-add tooltip\"></span>&nbsp;</a>";
$addCommsButtonTrains = "<a href=\"javascript:animatedcollapse.toggle('inComs2')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Add to the Stored Comments'><span class=\"ui-icon silk-icon-basket-add\"></span>&nbsp;</a>";
$addCommsButtonCards = "<a href=\"javascript:animatedcollapse.toggle('inComs4')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Add to the Cards Comments'><span class=\"ui-icon silk-icon-cd-add\"></span>&nbsp;</a>";
$showCommsButton = "<a href=\"javascript:animatedcollapse.toggle('showComms')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Show the Stored Comments'><span class=\"ui-icon silk-icon-application-view-gallery\"></span>&nbsp;</a>";
$showCommsButton2 = "<a href=\"javascript:animatedcollapse.toggle('showComms2')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Show Soldier Comments'><span class=\"ui-icon silk-icon-application-view-detail\"></span>&nbsp;</a>";
$showCommsButton3 = "<a href=\"javascript:animatedcollapse.toggle('showComms3')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Show Trains Comments'><span class=\"ui-icon silk-icon-application-view-icons\"></span>&nbsp;</a>";
$showCommsButton4 = "<a href=\"javascript:animatedcollapse.toggle('showComms4')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Show Cards Comments'><span class=\"ui-icon silk-icon-application-view-tile\"></span>&nbsp;</a>";
$abbrevsButton = "<a href=\"javascript:animatedcollapse.toggle('midComms2')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Load the 45 Abbreviations'><span class=\"ui-icon ui-icon-note\" title='Load the 45 Abbreviations'></span>&nbsp;</a>";
$search2 = "<a href=\"javascript:animatedcollapse.toggle('search2')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Load the 45 Search Forms'><span class=\"ui-icon silk-icon-page-white-magnify\" title='Load the 45 Search Forms'></span>&nbsp;</a>";
$gplButton = "<a href=\"javascript:animatedcollapse.toggle('licensegpl')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Show the TLhC License'><span class=\"ui-icon ui-icon-check\" title='Show the TLhC License'></span>&nbsp;</a>";
$previewButton = "<a href=\"javascript:animatedcollapse.toggle('outPutter')\" target=\"mainFrame\" class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\" title='Toggle the Preview Windows'><span class=\"ui-icon ui-icon-folder-open\" style='display:inline; float: none; clear: left;'></span>&nbsp;</a>";
$previewSubmit = "<button type='submit' target='mainFrame' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-folder-open'></span>Preview</button> ";
$refreshButton = "<button onclick='location.reload()' class='fg-button fg-button-icon-right2 ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-refresh'></span>Update</button>";
$themeChooser = "<button onclick=\"jqalert($(&quot;#AddNewCom&quot;).html(), 'Choose the Listing theme')\" class='ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-flag' style='display:inline-block'></span>Choose Theme</button>";
$dialogAddButton = "<button  rel=\"partsIn/commsDialogAdd.php\" class='opendialog fg-button fg-button-icon-right2 ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-newwin' style='display:inline-block'></span>Add Comment</button>";
/**
*
*	THESE ARE SOME GENERIC JQUERY UI BUTTONS WITHOUT LINKS SO THEY CAN BE USED AS TOOLTIPS
*
*/
$linkButton = "<button class=\"fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip\"><a href=\"javascript:animatedcollapse.toggle('inComs')\"?showComms=Trains\" id=\"dialog_link7722\" class=\"ui-state-default ui-corner-all\"><span class=\"ui-icon silk-icon-basket-add\"></span></a></button>";
$folderCButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-folder-collapsed' title='Load the Help Files' ></span>&nbsp;</a>";
$folderOButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-folder-open' title='Load the Help Files' ></span>&nbsp;</a>";
$lightbulbButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-lightbulb' title='Load the Help Files' ></span>&nbsp;</a>";
$mailCButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-mail-closed' title='Load the Help Files' ></span>&nbsp;</a>";
$houseButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-home' title='Load the Help Files' ></span>&nbsp;</a>";
$keyButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-key' title='Load the Help Files' ></span>&nbsp;</a>";
$imageTTButton = "<a href='docs/tooltips/picasa.htm' class='jTip tooltip' id='four26' name='Picasa'><span class='ui-icon ui-icon-image' style='float:right; margin-top:2px;'></span></a>";
$lockedButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-locked' title='Load the Help Files' ></span>&nbsp;</a>";
$starButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-star' title='Load the Help Files' ></span>&nbsp;</a>";
$newwinButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-newwin' title='Load the Help Files' ></span>&nbsp;</a>";
$contactButton = "<a href='docs/contact.php' class='jTip tooltip' id='four26' name='Contact'><span class='ui-icon ui-icon-contact' style='float:right; margin-top:2px;'></span></a>";
$flagButton = "<a href='docs/tooltips/terms.htm' class='jTip tooltip' id='four25' name='Software License'><span class='ui-icon ui-icon-flag' style='float:right; margin-top:2px;'></span></a>";
$pinSButton = "<a href='#' title='Load the Help Files' class='fg-button fg-button-icon-solo ui-state-default ui-corner-all tooltip'><span class='ui-icon ui-icon-pin-s' title='Load the Help Files' ></span>&nbsp;</a>";
?>
