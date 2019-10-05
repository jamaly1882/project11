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
 $row = mysqli_fetch_array($query);
$tb=$row['name_db_tb'];
$name=$row['name_account'];

$sqlstatment='SELECT sum(`monetary_gd`) FROM  	monetary_tb ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row1 = mysqli_fetch_array($query1);

$sqlstatment='SELECT sum(bank_c_ac_gm) FROM resources_ptivate_tb ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row2 = mysqli_fetch_array($query1);


$sqlstatment='SELECT sum(`advance_temp_ts_gm`) FROM `help_m_gm_ts_tb` ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row3 = mysqli_fetch_array($query1);
$sqlstatment='SELECT sum(`advance_temp_s_gm`) FROM `help_m_gm_s_tb` ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row4 = mysqli_fetch_array($query1);
$row5=$row3['sum(`advance_temp_ts_gm`)'] + $row4['sum(`advance_temp_s_gm`)'];

$sqlstatment='SELECT sum(`advance_c_ac_ts_gm`) FROM `help_m_gm_ts_tb` ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row6 = mysqli_fetch_array($query1);
$sqlstatment='SELECT sum(`advance_c_ac_s_gm`) FROM `help_m_gm_s_tb` ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row7 = mysqli_fetch_array($query1);
$row8=$row7['sum(`advance_c_ac_ts_gm`)'] + $row6['sum(`advance_c_ac_s_gm`)'];

$sqlstatment='SELECT sum(`advance_on_sal_ts_gm`) FROM `help_m_gm_ts_tb` ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row9 = mysqli_fetch_array($query1);
$sqlstatment='SELECT sum(`advance_on_sal_s_gm`) FROM `help_m_gm_s_tb` ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row10 = mysqli_fetch_array($query1);
$row11=$row10['sum(`advance_on_sal_ts_gm`)'] + $row9['sum(`advance_on_sal_s_gm`)'];


$sqlstatment='SELECT sum(`depand_document_ts_gm`) FROM `help_m_gm_ts_tb` ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row12 = mysqli_fetch_array($query1);
$sqlstatment='SELECT sum(`depand_document_s_gm`) FROM `help_m_gm_s_tb` ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row13 = mysqli_fetch_array($query1);
$row14=$row13['sum(`depand_document_ts_gm`)'] + $row12['sum(`depand_document_s_gm`)'];

$sqlstatment='SELECT sum(change_mounteray_ts_gm) FROM help_m_gm_ts_tb ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row15 = mysqli_fetch_array($query1);
$sqlstatment='SELECT sum(change_mounteray_s_gm) FROM help_m_gm_s_tb ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row16 = mysqli_fetch_array($query1);
$row17=$row15['sum(change_mounteray_ts_gm)'] + $row16['sum(change_mounteray_s_gm)'];

$sqlstatment='SELECT sum(amonet_paide_beforehand_ts_gm) FROM help_m_gm_ts_tb ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row18 = mysqli_fetch_array($query1);
$sqlstatment='SELECT sum(amonet_paide_beforehand_s_gm) FROM help_m_gm_s_tb ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row19 = mysqli_fetch_array($query1);
$row20=$row18['sum(amonet_paide_beforehand_ts_gm)'] + $row19['sum(amonet_paide_beforehand_s_gm)'];


$sqlstatment='SELECT sum(madinin_malih_gm) FROM madinin_malih_tb ';
$query1 = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row18 = mysqli_fetch_array($query1);

$row21['sum(madinin_malih_gm)'];


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
    <td>'.$row1['sum(monetary_gd)'].'</td>
	<td>'.$row2['sum(bank_c_ac_gm)'].'</td>
	<td>'.$row5.'</td>
	<td>'.$row8.'</td>
	<td>'.$row11.'</td>
<td>'.$row14.'</td>
<td>'.$row17.'</td>
	<td>'.$row20.'</td>
	<td>'.$row21['sum(madinin_malih_gm)'].'</td>

    <td></td>
  </tr>
</table></td>
  </tr>
  
</table>
</td>


  <td>'.$row['nam_arab'].'</td>
   <td>'.$row['nam_arab'].'</td>
  <td>'.$row['nam_arab'].'</td>
  <td>'.$row['nam_arab'].'</td>
  <td>'.$row['nam_arab'].'</td>
  <td>'.$row['nam_arab'].'</td>
  <td>'.$row['nam_arab'].'</td>
  <td>'.$row['nam_arab'].'</td>
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
 ';
	?>