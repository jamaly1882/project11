<?php
include_once("conection.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q =$_POST['q'];


//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand = "SELECT   ts.ts_no , `bine`,ts.day,ts.month,ts.year,`export_no`,`export_date`,`account`
  FROM `ts`,`export` WHERE ts.ts_no =export.ts_no
   AND  ts.year='$q';
  
  "; 
echo  '<table width="68%" border="2" dir="rtl" id="m" align="center" >
  <tr>
  <td   bgcolor="#3CF"  >رقم التسويه</td>
  <td  bgcolor="#3CF">البيان</td>
  <td  bgcolor="#3CF">اليوم</td>
   <td  bgcolor="#3CF">الشهر</td>
<td  bgcolor="#3CF">السنه</td>
    <td   bgcolor="#3CF"  >رقم الاشعار </td>
  <td  bgcolor="#3CF">تاريخ الاشعار</td>
  <td  bgcolor="#3CF">المبلغ </td>
   </tr>
   
   
	

	';
	$col3=0;
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) { 
$col3=$col3+$row["account"];
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
	
	</tr>
	';}
	
	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 



     echo'
 
<tr>
 

   <td  bgcolor="#3CF"width="75" colspan="7">اجـــمالــي الــمبــالــغ الــــمديــنـه خـلال ســــــنــة مــــاليـــة </td>
   <td  bgcolor="#3CF"width="157">'.$col3.' </td>
   </tr>



                
</table> 
  ';
	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 
?>