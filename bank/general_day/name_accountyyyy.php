<?php
include_once("dbconnection.php");


//$check1 = $_POST['CheckboxGroup1'];
$zero=0;
//$check2=$_POST['CheckboxGroup2'];



	

	
// Filter Function -------------------------------------------------------------------


// End Filter Function --------------------------------------------------------------


// Add the info into the database table

echo'<table width="100%" border="1">
  <tr>
    <td> <table width="100%" border="1">
  <tr>
    <td><font size="+1">الجــــمـــلـــة</font>
    <table width="100%" border="1">
  <tr>
    <td> ريـــال </td>
     <td>ف</td>
  </tr>
</table>

    </td>
    <td><font size="+1">الاشهرالسابقه/المدد السابقة</font>
     <table width="100%" border="1">
  <tr>
    <td> ريـــال </td>
     <td>ف</td>
  </tr>
</table>
    </td>
    <td><font size="+1">الاشهرالجاري/المدد الجارية</font>
     <table width="100%" border="1">
  <tr>
    <td> ريـــال </td>
    <td>ف</td>
  </tr>
</table>
    </td>
  </tr>
</table>
</td>
<td> <table width="100%" border="1">
  <tr>
    <td><font size="+4">بيــــان انواع الحســـابات</font>
</td></tr></table>
    </td>

   <td> <table width="100%" border="1">
  <tr>
    <td><font size="+1">الجــــمـــلـــة</font>
    <table width="100%" border="1">
  <tr>
    <td> ريـــال </td>
     <td>ف</td>
  </tr>
</table>

    </td>
    <td><font size="+1">الاشهرالسابقه/المدد السابقة</font>
     <table width="100%" border="1">
  <tr>
    <td> ريـــال </td>
     <td>ف</td>
  </tr>
</table>
    </td>
    <td><font size="+1">الاشهرالجاري/المدد الجارية</font>
     <table width="100%" border="1">
  <tr>
    <td> ريـــال </td>
    <td>ف</td>
  </tr>
</table>
    </td>
  </tr>
</table>
</td>

  </tr>
 ';
		$sqlstatment='SELECT `num_account`, `name_account`, `name_db_tb`, `nam_arab` FROM `name_accountes`';
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));

		
echo"gd under";
 while($row = mysqli_fetch_array($query)){ 
$tb=$row['name_db_tb'];
$name=$row['name_account'];

$sqlstatment='SELECT sum('.$name.') FROM '.$tb.' ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row1 = mysqli_fetch_array($query1);
echo'


  <tr><td><table width="100%" border="1">
  <tr>
    <td><table width="200" border="1">
  <tr>
    <td>ريال</td>
    <td>ف</td>
  </tr>
</table>
</td>
    <td><table width="200" border="1">
  <tr>
    <td>ريال</td>
    <td>ف</td>
  </tr>
</table></td>
    <td><table width="200" border="1">
  <tr>
    <td>'.$row1['sum('.$name.')'].'</td>
    <td>ف</td>
  </tr>
</table></td>
  </tr>
  
</table>
</td>


  <td>'.$row['nam_arab'].'</td>
  
  
  
  
  <td><table width="100%" border="1">
  <tr>
    <td><table width="200" border="1">
  <tr>
    <td>ريال</td>
    <td>ف</td>
  </tr>
</table>
</td>
    <td><table width="200" border="1">
  <tr>
    <td>ريال</td>
    <td>ف</td>
  </tr>
</table></td>
    <td><table width="200" border="1">
  <tr>
    <td>ريال</td>
    <td>ف</td>
  </tr>
</table></td>
  </tr>
  
</table></td></tr>
  
</table>  
 ';}
	?>