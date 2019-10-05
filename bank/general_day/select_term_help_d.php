<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include_once("dbconnection.php");
$check0 = $_POST['CheckboxGroup1'];
$term = $_POST['term_ganbe'];
$frommonth = $_POST['frommonth'];
$tomonth = $_POST['tomonth'];
$fromday = $_POST['fromday'];
$today = $_POST['today'];
$year = $_POST['year'];
//$check1 = $_POST['CheckboxGroup1'];
$zero=0;
//$check2=$_POST['CheckboxGroup2'];


$typeaccountgm=substr($check0,0,1);
$accountsgm=substr($check0,1,1);
	
echo $check0;
	
// Filter Function -------------------------------------------------------------------


// End Filter Function --------------------------------------------------------------

// Add the info into the database table
 
	
// Filter Function -------------------------------------------------------------------


// End Filter Function --------------------------------------------------------------

// Add the info into the database table
 	

	if($check0=="31"){	
	echo"ddd";
	
$sqlstatment1='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`="'.$typeaccountgm.'" AND `accounts_e`= "'.$accountsgm.'"';
$query1 = mysqli_query($sss,$sqlstatment1) or die (mysqli_error($sss));
$row = mysqli_fetch_array($query1);
 echo "gggggg";
echo'
<table width="100%" height="129" border="1"  bgcolor=""  >
                        <tr>
 
                          <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">'.$row['name_accounts'].'</font></span>
                          </center></td>
                          <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td   colspan="1" width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td   width="90"  align="right" bgcolor="#99FFFF"><center>
                          <span  style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـم الاستمارة</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
						';
						
							$sqlstatment="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, `val`, `num_coll` FROM `public` WHERE
 `type_account`=".$typeaccountgm." AND 
 `accounts`=".$accountsgm." AND
   `month`>=$frommonth AND 
   `month`<= $tomonth AND
    `day`>= $fromday AND 
	`day` <=$today AND
	 `year`=$year AND `term`=2 ";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));

 while($row1 = mysqli_fetch_array($query)){ 

 echo' 
                       <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row1['val'].'</td>
						   <td bgcolor="#FFFFFF" width="177" align="right">'.$row1['year'].'.-.'.$row1['month'].'.-.'.$row1['day'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row1['data'].' </td>
                          <td bgcolor="#FFFFFF" width="90" align="center">'.$row1['num_s'].'</td>
                        </tr>
                      
   ';

 }   $sqlstatment3="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, sum(`val`), `num_coll` FROM `public` WHERE
 `type_account`=$typeaccountgm AND 
 `accounts`=$accountsgm AND
   `month`>=$frommonth AND 
   `month`<= $tomonth AND
    `day`>= $fromday AND 
	`day` <=$today AND
	 `year`=$year AND `term`=2 ";
	 $query3 = mysqli_query($sss,$sqlstatment3) or die (mysqli_error($sss));

		 while($row3 = mysqli_fetch_array($query3)){ 
echo' 
                        <tr>
                         <td bgcolor="#FFFFFF"  width="80" align="center"> <font color="#FF0000" > '.$row3['sum(`val`)'].'</td>
						  <td bgcolor="#FFFFFF" width="177" align="right">'.$year.'.-.'.$frommonth.'.-.'.$fromday.'.to.'.$year.'.-.'.$tomonth.'.-.'.$today.'</td>
                       <td bgcolor="#FFFFFF" width="177" align="right"><font size="4">اجمالي.'.$row['name_accounts'].' </font></td>
						  <td bgcolor="#FFFFFF" width="90" align="center"><font  size="4">المجموع</font></td>
                        </tr>
                    ';}
			
		echo '</table>';
	
		
	}
	
	elseif($check0=="32"||$check0=="33"){
		$sqlstatment1='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`="'.$typeaccountgm.'" AND `accounts_e`= "'.$accountsgm.'"';
$query1 = mysqli_query($sss,$sqlstatment1) or die (mysqli_error($sss));
$row = mysqli_fetch_array($query1);
echo'ddssaa';
echo'
<table width="100%" height="129" border="1"  bgcolor=""  >
                        <tr>
 
                          <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">'.$row['name_accounts'].'</font></span>
                          </center></td>
                          <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td   colspan="1" width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td   width="90"  align="right" bgcolor="#99FFFF"><center>
             <span  style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
						';
						
							$sqlstatment="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, `val`, `num_coll` FROM `public` WHERE
 `type_account`=".$typeaccountgm." AND 
 `accounts`=".$accountsgm." AND
   `month`>=".$frommonth."  AND 
   `month`<= ".$tomonth."  AND
    `day`>=". $fromday."  AND 
	`day` <=".$today."  AND
	 `year`=".$year." AND `term`=2 ";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
 while($row1 = mysqli_fetch_array($query)){ 
 echo' 
                       <tr>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row1['val'].'</td>
						   <td bgcolor="#FFFFFF" width="177" align="right">'.$row1['year'].'.-.'.$row1['month'].'.-.'.$row1['day'].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row1['data'].' </td>
                          <td bgcolor="#FFFFFF" width="90" align="center">'.$row1['num_ts'].'</td>
                        </tr>
                      
   ';

 }   $sqlstatment3="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, sum(`val`), `num_coll` FROM `public` WHERE
 `type_account`=$typeaccountgm AND 
 `accounts`=$accountsgm AND
   `month`>$frommonth AND 
   `month`< $tomonth AND
    `day`> $fromday AND 
	`day` <$today AND
	 `year`=$year AND `term`=2 ";
	 $query3 = mysqli_query($sss,$sqlstatment3) or die (mysqli_error($sss));

		 while($row3 = mysqli_fetch_array($query3)){ 
echo' 
                        <tr>
                         <td bgcolor="#FFFFFF"  width="80" align="center"> <font color="#FF0000" > '.$row3['sum(`val`)'].'</td>
						  <td bgcolor="#FFFFFF" width="177" align="right">'.$year.'.-.'.$frommonth.'.-.'.$fromday.'.to.'.$year.'.-.'.$tomonth.'.-.'.$today.'</td>

                       <td bgcolor="#FFFFFF" width="177" align="right"><font size="4">اجمالي.'.$row['name_accounts'].' </font></td>
						  <td bgcolor="#FFFFFF" width="90" align="center"><font  size="4">المجموع</font></td>
                        </tr>               ';
		}
		echo'</table>';
		}
		

			
			


echo'Operation Completed Successfully! <br /><br /><a href="index.php">Click Here</a>

';
exit();


?>
</head>

<body>
</body>
</html>