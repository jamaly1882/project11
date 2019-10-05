<?php

$q=$_POST['q'];




include_once("conection.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that



//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand ="SELECT form.form_no, `bine`,form.day, form.month, form.year,`check_no`,
 `check_date`,`check_type`,
`account`,`custmer_name`  FROM `form`,`check1` WHERE form.form_no=check1.form_no
AND
 form.year='$q'";

echo  '<table width="68%" border="2" dir="rtl" id="m" align="center" >
  <tr>


  <td   bgcolor="#9CF"  >رقم الاستماره</td>
  <td  bgcolor="#9CF">البيان</td>
  <td  bgcolor="#9CF">اليوم</td>
   <td  bgcolor="#9CF">الشهر</td>
   <td  bgcolor="#9CF">السنه</td>
    <td   bgcolor="#9CF"  >رقم الشيك </td>
  <td  bgcolor="#9CF">تاريخ الشيك</td>
  <td  bgcolor="#9CF">نوع الشيك </td>
   <td  bgcolor="#9CF">اسم المستفيد</td>
   <td  bgcolor="#9CF">المبلغ</td>
  
   </tr>
   
   
   
	

	';
	$col=0;
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) { 
$col=$col+$row["account"];
   echo'  
   
   <tr>
     <td> '.$row["form_no"].'</td>
    <td>'.$row["bine"].'</td>
	<td>'.$row["day"].'</td>
	<td>'.$row["month"].'</td>
	<td>'.$row["year"].'</td>
   <td> '.$row["check_no"].'</td>
    <td>'.$row["check_date"].'</td>
	<td>'.$row["check_type"].'</td>
	<td>'.$row["custmer_name"].'</td>
	<td>'.$row["account"].'</td>

	
	</tr>
	';}
	
   
   
  

   
   echo'
 
<tr>
 

   <td  bgcolor="#9CF"width="75" colspan="9">اجـــمالــي الــمبــالــغ الــدائـنــة خلال ســـنـه مالية</td>
   <td  bgcolor="#9CF"width="157">'.$col.' </td>
   </tr>



                
</table> 
  ';
	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 







































?>

