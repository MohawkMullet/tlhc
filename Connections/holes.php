<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_holes = "mysql.hostinger.co.uk";
$database_holes = "u378891030_tlhc";
$username_holes = "u378891030_tlhcu";
$password_holes = "tlhcpass420";
$holes = mysql_pconnect($hostname_holes, $username_holes, $password_holes) or trigger_error(mysql_error(),E_USER_ERROR); 
?>