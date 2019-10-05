<?php
include_once("conection.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q = $_GET['q'];
//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;

	
  
  $sqlCommand = "SELECT `check_no`, `check_date`, `check_type`, `custmer_name`, `account`, `form_no`, `role` FROM `check1`  WHERE check_no=$q "; 
echo  '<table width="100%" border="2" dir="rtl" id="m" align="center" >
  <tr>
  <td   bgcolor="#9CF"  >رقم الشيك</td>
  <td  bgcolor="#9CF">تأريخ الشيك</td>
  <td  bgcolor="#9CF">نوع الشيك</td>
   <td  bgcolor="#9CF" width="200">اسم المستفيد</td>
   <td  bgcolor="#9CF">المبلغ</td>
    <td   bgcolor="#9CF"  >رقم الاستماره </td>

  <td  bgcolor="#9CF" colspan="1">المقارنه</td>




   </tr>
   
   
	

	';
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) { 
   echo'  
   
   <tr>
   <td> '.$row["check_no"].'</td>
    <td>'.$row["check_date"].'</td>
	<td>'.$row["check_type"].'</td>
	<td>'.$row["custmer_name"].'</td>
	<td>'.$row["account"].'</td>
   <td> '.$row["form_no"].'</td>';
   if($row["role"]==1){
  echo'  <td>مصروف</td>';
   }
  else{echo'  <td>غير مصروف</td>';} 
	
	echo'</tr>';
	}
	echo'
	</table>';
   
   
  


	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 
?>
