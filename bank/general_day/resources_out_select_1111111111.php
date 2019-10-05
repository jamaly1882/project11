<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include_once("dbconnection.php");
$check0 = $_POST['CheckboxGroup2'];
$term = $_POST['term_w'];
$from = $_POST['fromdate'];
$to = $_POST['todate'];
//$check1 = $_POST['CheckboxGroup1'];

//$check2=$_POST['CheckboxGroup2'];



	

	
// Filter Function -------------------------------------------------------------------


// End Filter Function --------------------------------------------------------------

// Add the info into the database table
 	echo $check0."   ".$term.$from.$to;
	
	if($check0=="collec"&&$term=="m"){	
$sqlstatment="SELECT `num_ts`, `date`, `data`, `monetary`  FROM `collection_money_gm` WHERE date BETWEEN '$from' AND '$to'";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));echo'
<table width="1071" height="129" border="1"  bgcolor=""  >
                        <tr>
 
                          <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب الحـسـابات الجارية</font></span>
                          </center></td>
                          <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td   colspan="1" width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td   width="90"  align="right" bgcolor="#99FFFF"><center>
                          <span  style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
						</table>';
 while($row = mysqli_fetch_array($query)){ 
 echo' 
   <table width="1071" height="80" border="1"  bgcolor=""  >

                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['monetary'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row['date'].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row['data'].'</td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row['num_s'].'</td>
                        </tr>
                      </table>
   ';

 }
			
		
	}else if($check0=="collec"&&$term=="c"){
		$sqlstatment="SELECT `num_ts`, `date`, `data`, `resources_deserving`, `debt_deserving`, `checks_coming_collection`, `checks_coming_delayed`, `resources_collection_beforehand`, `review_result_bestowing` FROM `collecation_cash_gm` WHERE date BETWEEN '$from' AND '$to'";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
echo"gd under";

echo'
<table width="1071" height="129" border="1"  bgcolor=""  >
                        <tr>
 
                          <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حساب الموارد المستحقة</font></span>
                          </center></td>
						   <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> مراقــبة المتحصلات المنح</font></span>
                          </center></td>
						   <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حساب الشيكات الواردة للتحصيل</font></span>
                          </center></td>
						   <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حساب الشيكات الواردة المؤجلة
							</font></span>
                          </center></td>
						   <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حساب الديون المستحقة للحكومة</font></span>
                          </center></td>
						   <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حساب الموارد المحصلة مقدما</font></span>
                          </center></td>
                          <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td   colspan="1" width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td   width="90"  align="right" bgcolor="#99FFFF"><center>
                          <span  style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
						</table>';
 while($row = mysqli_fetch_array($query)){ 
echo' 
   <table width="1071" height="80" border="1"  bgcolor=""  >

                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['resources_deserving'].'</td>
						  <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['review_result_bestowing'].'</td>
						  <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['checks_coming_collection'].'</td>
						  <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['checks_coming_delayed'].'</td>
						  <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['debt_deserving'].'</td>
						  <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['resources_collection_beforehand'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row['date'].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row['data'].'</td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row['num_ts'].'</td>
                        </tr>
                      
   ';}
   
   $sqlstatment="SELECT  sum(`checks_coming_collection`), sum(`checks_coming_delayed`) FROM `collecation_cash_gm` WHERE date BETWEEN '$from' AND '$to'";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
		 while($row = mysqli_fetch_array($query)){ 
echo' 
                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> -</td>
						  <td bgcolor="#FFFFFF"  width="80" align="center"> -</td>
						  <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['sum(`checks_coming_collection`)'].'</td>
						  <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['sum(`checks_coming_delayed`)'].'</td>
						  <td bgcolor="#FFFFFF"  width="80" align="center">-</td>
						  <td bgcolor="#FFFFFF"  width="80" align="center"> -</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$from.' To '.$to.' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right"> الموارد المحصلة كاشيكات</td>
						  <td bgcolor="#FFFFFF" width="90" align="center">المجموع</td>
                        </tr>
                      </table>';
		}}
	if($check0=="collec"&&$term=="d"){	
$sqlstatment="SELECT `num_ts`, `date`, `data`, `bank_c_ac`  FROM  `tb_taswiah_gm` WHERE date BETWEEN '$from' AND '$to'";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
echo'
<table width="1071" height="129" border="1"  bgcolor=""  >
                        <tr>
 
                          <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب الحـسـابات الجارية</font></span>
                          </center></td>
						   <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب  البنك الحـسـابات الجارية</font></span>
                          </center></td>
                          <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td   colspan="1" width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td   width="90"  align="right" bgcolor="#99FFFF"><center>
                          <span  style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
						</table>';
 while($row = mysqli_fetch_array($query)){ 
 echo' 
   <table width="1071" height="80" border="1"  bgcolor=""  >

                        <tr>
						<td bgcolor="#FFFFFF"  width="80" align="center"> - </td>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['bank_c_ac'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row['date'].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row['data'].'</td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row['num_ts'].'</td>
                        </tr>
                      </table>
   ';

 }
			
		
	$sqlstatment="SELECT `num_ts_gd`, `date`, `data`, `c_ac`  FROM `tb_taswiah_gd` WHERE date BETWEEN '$from' AND '$to'";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
	while($row = mysqli_fetch_array($query)){ 
 echo' 
   <table width="1071" height="80" border="1"  bgcolor=""  >

                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['c_ac'].'</td>
						  <td bgcolor="#FFFFFF"  width="80" align="center">-</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row['date'].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row['data'].'</td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row['num_ts_gd'].'</td>
                        </tr>
                      </table>
   ';

 }
			
		
	}

			
			


echo'Operation Completed Successfully! <br /><br /><a href="index.php">Click Here</a>

';
exit();


?>
</head>

<body>
</body>
</html>