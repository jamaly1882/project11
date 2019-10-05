<?php
include_once("dbconnection.php");
$sqlstatment="SELECT `num_s_gd`, `date`, `data`, `money_under_ts` , `num_s` FROM `tb_sarfe_gd`";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
echo'
<table width="200" border="1">
 

 <tr  valign="top">
    <td style="width:850px">حساب المبالغ الدئنة تحت التسويه</td>
  <td style="width:850px">البــــيــــان</td>
    <td style="width:250px">الــتاريـــخ</td>
	 <td style="width:150px">رقــم التـســـويه</td>
  </tr>
  </table>';
 while($row = mysqli_fetch_array($query)){ 
 echo'
 <table width="200" border="1">
 
  <tr  valign="top">
   <td style="width:20%">'.$row['num_s_gd'].'</td>
    <td style="width:50%">'.$row['data'].'</td>
    <td style="width:30%">'.$row['date'].'</td>
    <td style="width:20%">'.$row['money_under_ts'].'</td>
	<td style="width:20%">'.$row['num_s'].'</td>
  </tr>
    </table>';}
		?>