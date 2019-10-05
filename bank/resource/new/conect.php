<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conect = "localhost";
$database_conect = "users";
$username_conect = "root";
$password_conect = "root";
$conect = mysql_pconnect($hostname_conect, $username_conect, $password_conect) or trigger_error(mysql_error(),E_USER_ERROR); 
?>