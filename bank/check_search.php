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
echo  '<table width="300" border="2" dir="rtl" id="m" align="center" >
  <tr>
  <td   bgcolor="#9CF"  >رقم الشيك</td>
  <td  bgcolor="#9CF">تأريخ الشيك</td>
  <td  bgcolor="#9CF">نوع الشيك</td>
   <td  bgcolor="#9CF">اسم المستفيد</td>
   <td  bgcolor="#9CF">المبلغ</td>
    <td   bgcolor="#9CF"  >رقم الاستماره </td>

  <td  bgcolor="#9CF" colspan="1">المقارنه</td>




   </tr>
   
   
	

	';
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) { 
   echo'  
   
   <tr>
    <td><input type="text"     id="texte10"     value=" '.$row["check_no"].'" name="q"  onchange=" check_search_no(this.value)"/> </td>
   <td><input type="text"      id="texte11"     value=" '.$row["check_date"].'" name="p1"/> </td>
	<td><input type="text"     id="texte12"     value=" '.$row["check_type"].'" name="p2" onchange="  check_search_ty(this.value)" /> </td>
     <td><input type="text"    id="texte13"     value=" '.$row["custmer_name"].'" name="p3" onchange=" check_searche(this.value)"/> </td>
	<td><input type="text"     id="texte14"     value=" '.$row["account"].'" name="p4" onchange=" check_search_count(this.value)"/> </td>
   <td><input type="text"      id="texte15"     value=" '.$row["form_no"].'" name="p5" onchange="  check_search_form(this.value)"/> </td>
   <td><input type="hidden"      id="texte16"     value=" '.$row["role"].'" name="p6"/> 
  <select   onchange="up_check_sel(this.value)" >
	 
      <option value=""></option>
	<option value="1">yes</option>
	<option value="0">no</option>

	
				</select>

	</td>
	</tr>
	';}
	echo'
	</table>
   
   
  

   ';
	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 
?>
