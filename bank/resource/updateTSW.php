
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
$sqlCommand = "UPDATE  datatsw SET  tsw_id ='$q', bain_tsw ='$p1', deta_tsw ='$p2', bab_tsw ='$p3', fasl_tsw ='$p4', band_tsw ='$p5', type_tsw ='$p6', sum_tsw ='$p7' WHERE tsw_id =$q "; 
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error()); 
//mysqli_free_result($query); 
?>
<html>
<head>
</head>
<body>

</body>
</html>