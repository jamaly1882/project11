<?php






include_once("conection.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q =$_GET['q'];
$p1=$_GET['p1'];
$p2=$_GET['p2'];
$p3=$_GET['p3'];





//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand = "UPDATE  export  SET export_no='$q' , export_date='$p1',account='$p2',ts_no='$p3'
WHERE  export_no='$q'";

$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
 
   
   
  

  
	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 
?>
















