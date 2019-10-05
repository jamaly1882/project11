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
$zero=0;
//$check2=$_POST['CheckboxGroup2'];



	

	
// Filter Function -------------------------------------------------------------------


// End Filter Function --------------------------------------------------------------

// Add the info into the database table
 	echo $check0."   ".$term.$from.$to;
	
	if($check0=="error_paided"&&$from!=""&&$to!=""){	
$sqlstatment="SELECT `num_ts`, `date`, `data`,`uses`  FROM `tb_taswiah_gd`  WHERE  `uses` != '".$zero."' AND  date BETWEEN '$from' AND '$to'";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));

echo'
<table width="100%" height="129" border="1"  bgcolor=""  >
                        <tr>
 
                          <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب الموارد المستحقة للجكومة</font></span>
                          </center></td>
                          <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td   colspan="1" width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td   width="90"  align="right" bgcolor="#99FFFF"><center>
                          <span  style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
					';
 while($row = mysqli_fetch_array($query)){ 
 echo' 
   
                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['debt_deserving'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row['date'].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row['data'].'</td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row['num_ts'].'</td>
                        </tr>
                   
   ';

 }
	$sqlstatment="SELECT `num_ts`, `date`, `data`,sum(`uses`) FROM `tb_taswiah_gd` WHERE  `uses` != '".$zero."' ";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
	while($row = mysqli_fetch_array($query)){ 
 echo' 
                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['sum(`uses`)'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center"> '.$from.' to '.$to.' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">المبالغ منصرفة بدون وجة حق مالية الحالية  </td>
						  <td bgcolor="#FFFFFF" width="90" align="center">المجموع</td>
                        </tr>
                      </table>
   ';

 }		
		
	}
	else if($check0=="error_paided"&&$from==""&&$to==""){	
$sqlstatment="SELECT `num_ts`, `date`, `data`,`uses`  FROM `tb_taswiah_gd`  WHERE  `uses` != '".$zero."'";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));

echo'
<table width="1071" height="129" border="1"  bgcolor=""  >
                        <tr>
 
                          <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب الموارد المستحقة للجكومة</font></span>
                          </center></td>
                          <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td   colspan="1" width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td   width="90"  align="right" bgcolor="#99FFFF"><center>
                          <span  style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
						';
 while($row = mysqli_fetch_array($query)){ 
 echo' 
                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['`uses`'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row['date'].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row['data'].'</td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row['num_ts'].'</td>
                        </tr>
                     
   ';

 }
			
	$sqlstatment="SELECT `num_ts`, `date`, `data`,sum(`uses`) FROM `tb_taswiah_gd`  WHERE  `uses` != '".$zero."'";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
	while($row = mysqli_fetch_array($query)){ 
 echo' 
                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['sum(`uses`)'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">- </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">المبالغ المنصرفه بدون وجة حق </td>
						  <td bgcolor="#FFFFFF" width="90" align="center">المجموع</td>
                        </tr>
                      </table>
   ';

 }
	}
	
	
		if($check0=="adveance_mounteray"&&$from!=""&&$to!=""){	
$sqlstatment="SELECT `num_ts`, `date`, `data` ,`bank_c_ac`,`monetary` FROM  `import_money_gm` WHERE  `monetary` != '".$zero."' AND `bank_c_ac` != '".$zero."'   AND  date BETWEEN '$from' AND '$to'";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));

echo'
<table width="100%" height="129" border="1"  bgcolor=""  >
                        <tr>
 
                          <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب تسوية الموارد المستحقة للجكومة</font></span>
                          </center></td>
                          <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td   colspan="1" width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td   width="90"  align="right" bgcolor="#99FFFF"><center>
                          <span  style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
					';
 while($row = mysqli_fetch_array($query)){ 
 echo' 
   
                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['monetary'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row['date'].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row['data'].'</td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row['num_ts'].'</td>
                        </tr>
                   
   ';

 }
	$sqlstatment="SELECT `num_ts`, `date`, `data`,sum(`monetary`) ,sum(`bank_c_ac`) FROM `import_money_gm` WHERE  `monetary` != '".$zero."' AND `bank_c_ac` != '".$zero."'  ";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
	while($row = mysqli_fetch_array($query)){ 
 echo' 
                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['sum(`monetary`)'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center"> '.$from.' to '.$to.' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">المبالغ المنصرفه بدون وجة حق والمورده الى البنك </td>
						  <td bgcolor="#FFFFFF" width="90" align="center">المجموع</td>
                        </tr>
                      </table>
   ';

 }		
		
	}
	else if($check0=="adveance_mounteray"&&$from==""&&$to==""){	
$sqlstatment="SELECT `num_ts`, `date`, `data` ,`bank_c_ac`,`monetary` FROM  `import_money_gm` WHERE  `monetary` != '".$zero."' AND `bank_c_ac` != '".$zero."'";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));

echo'
<table width="1071" height="129" border="1"  bgcolor=""  >
                        <tr>
 
                          <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب  تسوية الموارد المستحقة للجكومة</font></span>
                          </center></td>
                          <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td   colspan="1" width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td   width="90"  align="right" bgcolor="#99FFFF"><center>
                          <span  style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
						';
 while($row = mysqli_fetch_array($query)){ 
 echo' 
                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['monetary'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row['date'].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row['data'].'</td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row['num_ts'].'</td>
                        </tr>
                     
   ';

 }
	$sqlstatment="SELECT `num_ts`, `date`, `data`,sum(`monetary`) ,sum(`bank_c_ac`) FROM `import_money_gm` WHERE  `monetary` != '".$zero."' AND `bank_c_ac` != '".$zero."'  ";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
	while($row = mysqli_fetch_array($query)){ 
 echo' 
                        <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['sum(`monetary`)'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">- </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">المبالغ المنصرفه بدون وجة حق والمورده الى البنك </td>
						  <td bgcolor="#FFFFFF" width="90" align="center">المجموع</td>
                        </tr>
                      </table>
   ';

 }
	}
	
	
	
	
	
	
	
	
	if($check0=="cutback"&&$from!=""&&$to!=""){	
$sqlstatment="SELECT `num_ts`, `date`, `data`,`resources1`,`resources2`,`resources3`,`resources4`,`resources5` FROM  `tb_taswiah_gd` WHERE  `resources1` != '".$zero."' AND `resources2` != '".$zero."' AND `resources3` != '".$zero."' AND `resources4` != '".$zero."' AND `resources5` != '".$zero."' AND  date BETWEEN '$from' AND '$to'";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));

echo'
<table width="100%" height="129" border="1"  bgcolor=""  >
                        <tr>
 <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> اجمالي حـسـاب الموارد</font></span>
                          </center></td>
                          <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب الموارد الاول</font></span>
                          </center></td>
						   <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب الموارد الباب الثاني</font></span>
                          </center></td>
						  <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب الموارد الباب الثالث</font></span>
                          </center></td>
						  <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب الموارد الباب الرابع</font></span>
                          </center></td>
						  <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> حـسـاب الموارد الباب الخامس</font></span>
                          </center></td>
                          <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td   colspan="1" width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td   width="90"  align="right" bgcolor="#99FFFF"><center>
                          <span  style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
					';
 while($row = mysqli_fetch_array($query)){ 
 $sum=$row['resources1']+$row['resources2']+$row['resources3']+$row['resources4']+$row['resources5'];

 echo' 
   
                        <tr>
						<td bgcolor="#FFFFFF"  width="80" align="center"> '.$sum.'</td>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['resources1'].'</td>
						    <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['resources2'].'</td>
							  <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['resources3'].'</td>
							    <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['resources4'].'</td>
								  <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['resources5'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row['date'].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row['data'].'</td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row['num_ts'].'</td>
                        </tr>
                   
   ';

 }
	$sqlstatment="SELECT `num_ts`, `date`, `data`,sum(`resources1`),sum(`resources2`),sum(`resources3`),sum(`resources4`),sum(`resources5`) FROM `tb_taswiah_gd` ";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
	while($row = mysqli_fetch_array($query)){
$sum=$row['sum(`resources1`)']+$row['sum(`resources2`)']+$row['sum(`resources3`)']+$row['sum(`resources4`)']+$row['sum(`resources5`)'];
 echo' 
                        <tr>
						<td bgcolor="#FFFFFF"  width="80" align="center"> '.$sum.'</td>
						  
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['sum(`resources1`)'].'</td>
						     <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['sum(`resources2`)'].'</td>
							    <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['sum(`resources3`)'].'</td>
								   <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['sum(`resources4`)'].'</td>
								      <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row['sum(`resources5`)'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center"> '.$from.' to '.$to.' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">المبالغ المورده بدون وجة حق ولم تورد الى البنك </td>
						  <td bgcolor="#FFFFFF" width="90" align="center">المجموع</td>
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