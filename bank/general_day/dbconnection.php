<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sss = "localhost";
$database_sss = "copybook_1";
$username_sss = "root";
$password_sss = "root";
$sss =  mysqli_connect ($hostname_sss, $username_sss, $password_sss , $database_sss) or die ("can not connect to database"); 
?>