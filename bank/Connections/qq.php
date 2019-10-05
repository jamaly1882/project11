<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_qq = "localhost";
$database_qq = "bank_account";
$username_qq = "root";
$password_qq = "";
$qq = mysql_pconnect($hostname_qq, $username_qq, $password_qq) or trigger_error(mysql_error(),E_USER_ERROR); 
?>