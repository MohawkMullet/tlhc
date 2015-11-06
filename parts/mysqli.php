<?php 
$link = mysqli_connect('mysql.hostinger.co.uk','u378891030_tlhcu','tlhcpass420'); 
if (!$link) { 
    die('to the database at mohawk.hol.es: ' . mysqli_error()); 
mysqli_select_db( $db )
	or die ( "couldng grab $db: ".mysqli_error() );
} 
echo 'Connection OK'; 
?>