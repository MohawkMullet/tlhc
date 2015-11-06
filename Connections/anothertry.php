<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_anothertry = "localhost";
$database_anothertry = "tlhc";
$username_anothertry = "tlhcuser";
$password_anothertry = "tlhcpass";
$anothertry = mysql_pconnect($hostname_anothertry, $username_anothertry, $password_anothertry) or trigger_error(mysql_error(),E_USER_ERROR); 
?>