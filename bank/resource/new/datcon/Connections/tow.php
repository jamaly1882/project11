<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_tow = "localhost";
$database_tow = "admee";
$username_tow = "root";
$password_tow = "root";
$tow = mysql_pconnect($hostname_tow, $username_tow, $password_tow) or trigger_error(mysql_error(),E_USER_ERROR); 
?>