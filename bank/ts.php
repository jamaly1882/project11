<?php
include_once("conection.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q = $_GET['q'];
//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand = "SELECT   ts.ts_no , `bine`, `day`, `month`,`year`,`export_no`,`export_date`,`account`
  FROM `ts`,`export` WHERE ts.ts_no=$q And export.ts_no=$q"; 
echo  '<table width="100%" border="2" dir="rtl" id="m" align="center" >
  <tr>
  <td   bgcolor="#9CF"  >رقم التسويه</td>
  <td  bgcolor="#9CF" width="230">البيان</td>
  <td  bgcolor="#9CF">اليوم</td>
   <td  bgcolor="#9CF">الشهر</td>
 <td  bgcolor="#9CF">السنه</td>
    <td   bgcolor="#9CF"  >رقم الاشعار </td>
  <td  bgcolor="#9CF">تاريخ الاشعار</td>
  <td  bgcolor="#9CF">المبلغ </td>
   </tr>
   
   
	

	';
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) { 
   echo'  
   
   <tr>
   <td> '.$row["ts_no"].'</td>
    <td>'.$row["bine"].'</td>
	<td>'.$row["day"].'</td>
	<td>'.$row["month"].'</td>
<td>'.$row["year"].'</td>
   <td> '.$row["export_no"].'</td>
    <td>'.$row["export_date"].'</td>
	<td>'.$row["account"].'</td>
	
	</tr>';}
	
echo'
	</table>';
   
   
  


	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 
?>
