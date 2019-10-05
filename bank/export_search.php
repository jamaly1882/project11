<?php
include_once("conection.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q = $_GET['q'];
//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
  
  $sqlCommand = "SELECT `export_no`,`export_date`,
   	`account`,`ts_no` FROM `export`  WHERE export_no=$q "; 
echo  '<table width="300" border="2" dir="rtl" id="m" align="center" >
  <tr>
  <td   bgcolor="#9CF"  >رقم الاشعار</td>
  <td  bgcolor="#9CF">تأريخ الاشعار</td>
  <td  bgcolor="#9CF">المبلغ</td>
   <td  bgcolor="#9CF">رقم التسويه</td>

   </tr>
   
   
	

	';
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) { 
   echo'  
   
   <tr>
  <tr>
    <td><input type="text"     id="texte20"     value=" '.$row["export_no"].'" name="q"   onchange="exp_search_no(this.value)"/> </td>
   <td><input type="text"      id="texte21"     value=" '.$row["export_date"].'" name="p1"  /> </td>
	<td><input type="text"     id="texte22"     value=" '.$row["account"].'" name="p2"  onchange="exp_search_count(this.value) "/> </td>
     <td><input type="text"    id="texte23"     value=" '.$row["ts_no"].'" name="p3" onchange=" exp_search_tsn(this.value)"/> </td>
	

	
	</tr>

	
	</tr>
	';}
	echo'
	</table>
   
   
  

   ';
	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 
?>
