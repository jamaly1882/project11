
<?php
include_once("connect_to_mysql.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q = $_GET['q'];
//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "../scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand = "DELETE FROM datatsw
 WHERE tsw_id= $q ; "; 

$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error()); 

?>
<html>
<head>
</head>
<body>

</body>
</html>