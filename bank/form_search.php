<?php
include_once("conection.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q =$_GET['q'];
//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand = "SELECT  form_no, `bine`,`day`,`month`,`year`
 FROM `form` WHERE  
 form_no='$q'   
"; 
echo  '<table width="300" border="2" dir="rtl" id="m" align="center" >
  <tr>
  <td   bgcolor="#9CF"  >رقم الاستماره</td>
  <td  bgcolor="#9CF">البيان</td>
  <td   bgcolor="#9CF">اليوم</td>
   <td   bgcolor="#9CF">الشهر</td>
   <td bgcolor="#9CF">السنه</td>
  
   </tr>
    
   
	

	';
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) { 
   echo'   
   
   <tr>
   <td  > <input  id=text60  value= "'.$row["form_no"].'" name="q"  onchange="form_search_no(this.value)" /></td>
     <td > <input  id=text61  value= "'.$row["bine"].'"name="p1" onchange="search_form_bine(this.value)"/></td>
	   <td  > <input  id=text62  value= "'.$row["day"].'"name="p2"   onchange="search_form_day(this.value)"/></td>
	   <td  > <input  id=text63  value= "'.$row["month"].'"name="p3"  onchange="search_form_month(this.value)"/></td>
	   
	   <td  > <input  id=text64  value= "'.$row["year"].'"name="p4"  onchange="search_form_year(this.value)"/></td>

	';}
	echo '
	 </table>';
	
	 

 
   


	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 
?>
