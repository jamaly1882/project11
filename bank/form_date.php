<?php
include_once("conection.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q =$_GET['q'];
$m1=$_GET['m1'];
$m2= $_GET['m2'];
//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand = "SELECT  `form_no` ,`bine` ,  `day` ,  `month` , `year` 
FROM `form`
WHERE
day='$q'   AND month='$m1' AND  year='$m2'";


echo  '<table width="300" border="2" dir="rtl" id="m" align="center" >
  <tr>
  <td   bgcolor="#9CF"  >رقم الاستماره</td>
  <td  bgcolor="#9CF">البيان</td>
    <td  bgcolor="#9CF">اليوم</td>
   <td  bgcolor="#9CF"> الشهر</td>
   <td  bgcolor="#9CF"> السنه</td>


   </tr>
   
   
	

	';
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) { 
   echo'  
   
   <tr>
   <td> '.$row["form_no"].'</td>
    <td>'.$row["bine"].'</td>
	<td>'.$row["day"].'</td>
	<td>'.$row["month"].'</td>
	<td>'.$row["year"].'</td>

	
	</tr>
	';}
	echo'
	</table>
   
   
  

   ';
	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 
?>
