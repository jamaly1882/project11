<?php
include_once("conection.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q =$_GET['q'];
//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand = "SELECT form.form_no, `bine`,`day`,`month`,`year`,`check_no`,`check_date`,`check_type`,
`account`,`custmer_name`  FROM `form`,`check1` WHERE form.form_no= check1.form_no
AND  form.form_no='$q'   
"; 
echo  '<table width="100%" border="2" dir="rtl" id="m" align="center" >
  <tr>
  <td width="136"   bgcolor="#9CF"  >رقم الاستماره</td>
  <td  bgcolor="#9CF" width="400">البيان</td>
  <td width="136"  bgcolor="#9CF">اليوم</td>
   <td width="136"  bgcolor="#9CF">الشهر</td>
   <td width="136"  bgcolor="#9CF">السنه</td>
    <td width="136"   bgcolor="#9CF">رقم الشيك </td>
  <td width="136"  bgcolor="#9CF">تاريخ الشيك</td>
  <td width="138"  bgcolor="#9CF">نوع الشيك </td>
   <td width="262"  bgcolor="#9CF" >اسم المستفيد</td>
   <td width="136"  bgcolor="#9CF">المبلغ</td>
  
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
   <td> '.$row["check_no"].'</td>
    <td>'.$row["check_date"].'</td>
	<td>'.$row["check_type"].'</td>
	<td width="200">'.$row["custmer_name"].'</td>
	<td>'.$row["account"].'</td>
	</tr>
	';}
	echo '
	 </table>';
	
	 

 
   


	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 
?>
