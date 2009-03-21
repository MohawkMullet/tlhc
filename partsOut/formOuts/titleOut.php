<?php
$performer = $_POST['performer'];
$performer = ucwords(strtoupper($performer));
//echo "$performer &nbsp;";
$titler = $_POST['titler'];
$titler = ucwords(strtolower($titler));										
//echo $titler;
$listingMast = "$performer $titler";
echo $listingMast;
?>