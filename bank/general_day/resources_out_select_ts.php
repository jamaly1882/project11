<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include_once("dbconnection.php");

$f = $_GET['term_w'];
$ganb = $_GET['ganb'];
//$check1 = $_POST['CheckboxGroup1'];
$zero=0;
//$check2=$_POST['CheckboxGroup2'];

$tr=$ganb;

	
// Filter Function -------------------------------------------------------------------


// End Filter Function --------------------------------------------------------------

// Add the info into the database table
 
	
// Filter Function -------------------------------------------------------------------
// Filter Function -------------------------------------------------------------------
$sqlstatment="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, `val`, `num_coll` FROM `public` WHERE
 `num_ts`=".$f." AND 
 `term`=$tr ";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$row1 = mysqli_fetch_array($query);
// End Filter Function --------------------------------------------------------------
$typeaccountgm=$row1['type_account'];
$accountsgm=$row1['accounts'];
$babr=$row1['resources'];
$babu=$row1['uses'];
// Add the info into the database table
 
		$sqlstatment1='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`="'.$typeaccountgm.'" AND `accounts_e`= "'.$accountsgm.'"';
$query1 = mysqli_query($sss,$sqlstatment1) or die (mysqli_error($sss));
$row = mysqli_fetch_array($query1);

echo'
<table width="100%" height="129" border="1"  bgcolor=""  >
                        <tr>
 
                          <td  colspan="1"  width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">'.$row['name_accounts'].'</font></span>
                          </center></td>
                          <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">السنة</font></span></center></td>
						   <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">الشهر</font></span></center></td>
						    <td width="142"  colspan="1"  align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">اليوم</font></span></center></td>
                          <td   colspan="1" width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td   width="90"  align="right" bgcolor="#99FFFF"><center>
             <span  style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
						';
						
							
 echo' 
                       <tr>
                          <td bgcolor="#FFFFFF"   width="80" align="center"><input name="todate" id="valuup" type="text" value="'.$row1['val'].'" size="25" />  </td>
						   <td bgcolor="#FFFFFF" width="177" align="right"><input name="todate" id="yearup" type="text" value="'.$row1['year'].'"/></td>
						   <td bgcolor="#FFFFFF" width="177" align="right"><input name="todate" id="monthup" type="text" value="'.$row1['month'].'"/></td>
						   <td bgcolor="#FFFFFF" width="177" align="right"><input name="todate" id="dayup" type="text" value="'.$row1['day'].'"/></td>
                          <td bgcolor="#FFFFFF"  width="140" align="center"><input name="todate" id="dataup" type="text" value="'.$row1['data'].'"/> </td>
                          <td bgcolor="#FFFFFF" width="90" align="center"><input name="todate" id="numup" type="text" value="'.$row1['num_ts'].'"/></td>
                        </tr>
						<input name="todate" id="gn" type="hidden" value="'.$tr.'"/>
                     ';

 

	
		


echo'تمت العملية بنجاح! <br /><br /><a href="index.php">Click Here</a>

';
exit();


?>
</head>

<body>
</body>
</html>