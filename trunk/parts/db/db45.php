<?php
$user = "tlhcuser";
$pass = "tlhcpass;
$db = "fortyfives";
$link = mysql_connect( "localhost", $user, $pass );
if ( !$link )
	die( "couldnt connect bioch" );
mysql_select_db( $db )
	or die ( "couldng grab $db: ".mysql_error() );
?>