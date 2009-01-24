<?php 
include('../stylesDefault.php');
include('../../parts/config.php'); 
?>

<?php

/**
*
* DECLARE THE SHIT ATH'S COMEING IN FROM THE FORM
*
*/

$artists = $_POST['artists'];
$sideA = $_POST['sideA'];
$sideB = $_POST['sideB'];
$Label = $_POST['Label'];
$recNum = $_POST['recNum'];
$performer = $_POST['performer'];
$titler = $_POST['titler'];
$gradeQ = $_POST["gradeQ"];
$notes = $_POST['notes'];
$info = $_POST['sideBar2'];
$link = $_POST['link'];		  
$linkText = $_POST['linkText'];

/** 
*START THE FUNCTIONS TO OUTPUT THE SHIZZILE
*/

function showArtists() {
  global $artists;
  $artists = ucwords(strtoupper($artists));
    if ($artists != "") {
    echo "<br><span class='greyFontLarge'>Artists:&nbsp;&nbsp;</span>"; 
  echo "<span class=\"blueFontBold\"><strong>$artists</strong></span>";
  }
}
function sideA() {
    global $sideA;
    $sideA = ucwords(strtolower($sideA));
    if ($sideA != "") {
        echo "<div align='left'>";
        echo "<span class=\"greyFont\">Side A:&nbsp;&nbsp;</span>";   
        echo "<span class=\"blueFontBold\"><strong>$sideA</strong></span>";
        echo "</div>";
      }
    }
function sideB() {
    global $sideB;
    $sideB = ucwords(strtolower($sideB));
    if ($sideB == "Same") {
        echo "<div align='left'>";
        echo "<span class=\"greyFont\">Side B:&nbsp;&nbsp;</span>"; 
        echo "<span class=\"blueFontBold\">same</span>";
      }
    else if ($sideB != "") {
        echo "<span class=\"greyFont\">Side B:&nbsp;&nbsp;</span>";   
        echo "<span class=\"blueFontBold\"><strong>$sideB</strong></span>";
        echo "</div>";
      }
  }
function titler() {
    global $performer, $titler;
    $performer = ucwords(strtoupper($performer));
    $titler = ucwords(strtolower($titler));                   
    $listingMast = "$performer $titler";
    echo $listingMast;
  }
function label() {           
            global $Label;
            $Label =ucwords(strtoupper($Label));
                if ($Label != "") {
		echo "<div align=\"left\">";
		echo "<hr align=\"left\" width=\"312px\" size=\"5\" />";
                echo "<span class=\"greyFont\">Label:&nbsp;</span>";
                echo "<span class=\"blueFontBold\"><strong>$Label</strong></span>";
                }
}
 function recNum(){
            global $recNum;
            $recNum =ucwords(strtoupper($recNum));
                if ($recNum != "NO.") {
                    echo "<span class=\"greyFont\">&nbsp;&nbsp;No.&nbsp;</span>";
                    echo "<span class=\"blueFontBold\"><strong>$recNum</strong></span>";
		    echo "</div>";
		    echo "<hr align=\"left\" width=\"312px\" size=\"5\" />";
                }
}
function grade() {
    global $gradeQ;
    if ( ! empty( $gradeQ) ) {
    foreach ( $gradeQ as $valueG ) {
    echo "<span class=\"greyFont\"><a href=\"#grade\" style=\"text-decoration:none;\">Grade:</a></span>&nbsp;&nbsp;";
    print "<span class=\"blueFontBold\"><strong>$valueG</strong></span>\n";
    echo "</span>";
                }
            }
  }
function notes() {
	global $notes;
	if ($notes != "") {
	echo "<br><div class=\"greyFontSmall\"><a href=\"#comments\" style=\"text-decoration:none;\">Notes:&nbsp;&nbsp;</a>";
	echo $notes;
	echo "</div>";
	}
}
function info() {
	global $info, $storeName, $logo;
	if ($info == "") {
	echo "<div style=\"float:left;\" align=\"center\"><img alt=\"Hep Vinyl\" title=\"$storeName\" src=\"$logo\" align=top height=\"32\" width=\"32\"></div>";
	} else {
	echo "<span class=\"greyFontSmaller\">Artist or Song Info:<br /> $info</span>";
	}
}
function externalLink() {
	global $link, $linkText;
	if ($link != "") {		  	  
	print "<br /><br /><a href=\"$link\">$linkText</a>";
	}
}

/**
* START SPITTING THE OUPTUT OF THE FUNCTIONS ONTO THE PAGE
*/

titler();
showArtists();
sideA();
sideB();
label();
recNum();
grade();
notes();
info();
externalLink();
?>
