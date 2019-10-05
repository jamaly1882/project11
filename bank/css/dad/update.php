
<?php
include_once("connect_to_mysql.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q =$_GET['q'];
$p1 =$_GET['p1'];
$p2 =$_GET['p2'];
$p3 =$_GET['p3'];
$p4 =$_GET['p4'];
$p5 =$_GET['p5'];
$p6 =$_GET['p6'];
$p7 =$_GET['p7'];
$sqlCommand = "UPDATE data SET  bain='$p1',deta='$p2',babid='$p3',faslid='$p4',bandid='$p5',typeid='$p6',sum='$p7'
WHERE astmid=$q "; 
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error()); 
//mysqli_free_result($query); 
?>
<html>
<head>
</head>
<body>

</body>
</html>