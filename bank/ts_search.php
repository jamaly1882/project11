<?php
include_once("conection.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that

$q=$_GET['q'];


//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand = "SELECT  `ts_no` , `bine`,`day`, `month`,`year`
  FROM `ts` WHERE ts_no='$q'"; 
echo  '<table width="300" border="2" dir="rtl" id="m" align="center" >
  <tr>
  <td   bgcolor="#9CF"  >رقم التسويه</td>
  <td  bgcolor="#9CF">البيان</td>
  <td  bgcolor="#9CF">اليوم</td>
   <td  bgcolor="#9CF">الشهر</td>
   <td  bgcolor="#9CF">السنه</td>
  

   </tr>
   
   
	

	';
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) { 
   echo'  
   
   <tr>
   <td><input type="text"      id="texte1"     value=" '.$row["ts_no"].'" onchange="ts_search_no (this.value)" /> </td>
    <td> <input type="text"    id="texte2"    value="'.$row["bine"].'"   onchange="ts_search_bine (this.value)" ></td>
	<td> <input type="text"    id="texte3"      value="'.$row["day"].'"  onchange="ts_search_day (this.value)"></td>
	<td> <input type="text"      id="texte4"  value="'.$row["month"].'"  onchange="ts_search_month (this.value)" ></td>
<td> <input type="text"      id="texte5"  value="'.$row["year"].'"    onchange="ts_search_year (this.value)"  ></td>

	
	</tr>
	';}
	echo'
	</table>
	

	
   
   
  

   ';
   
	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 
?>
