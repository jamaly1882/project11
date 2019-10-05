<?php










include_once("conection.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q = $_POST['q'];
$r = $_POST['r'];

//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand ="SELECT form.form_no, `bine`,form.day, form.month, form.year,`check_no`,
 `check_date`,`check_type`,
`account`,`custmer_name`  FROM `form`,`check1` WHERE form.form_no=check1.form_no
AND
  form.month='$q' AND form.year='$r'";

echo  '<table table width="68%" border="2" dir="rtl" id="m" align="center" >
  <tr>


  <td   bgcolor="#56A973"  >رقم الاستماره</td>
  <td  bgcolor="#56A973">البيان</td>
  <td  bgcolor="#56A973">اليوم</td>
   <td  bgcolor="#56A973">الشهر</td>
   <td  bgcolor="#56A973">السنه</td>
    <td   bgcolor="#56A973"  >رقم الشيك </td>
  <td  bgcolor="#56A973">تاريخ الشيك</td>
  <td  bgcolor="#56A973">نوع الشيك </td>
   <td  bgcolor="#56A973">اسم المستفيد</td>
   <td  bgcolor="#56A973">المبلغ</td>
  
   </tr>
   


   </tr>
   
   
	

	';
	$col1=0;
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) {
	$col1=$col1+$row["account"]; 
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
 

   <td  bgcolor="#56A973"width="75" colspan="9">اجـــمالــي الــمبــالــغ الــدائـنــة خلال شــــــــهــــر</td>
   <td  bgcolor="#56A973"width="157">'.$col1.' </td>
   </tr>



                
</table> 
  ';
	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 







































?>

