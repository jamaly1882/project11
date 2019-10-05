<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
	
	

//$query = mysqli_query($sss, "INSERT INTO num_ts( num_ts) 
  //      VALUES('$num_form')") or die (mysqli_error($sss));

		

	
// Filter Function -------------------------------------------------------------------


 include_once("dbconnection.php");
$num_form = $_POST['num_form'];
$data = $_POST['data'];

$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$amount=$_POST['amount'];
$typegm=$_POST['name_ac_gm'];
$typegd=$_POST['name_ac_gd'];
$resuorces=$_POST['resources'];
$uses=$_POST['uses'];
$termgm=$_POST['termgm'];

	$termgd=$_POST['termgd'];

$typeaccountgm=substr($typegm,0,1);
$accountsgm=substr($typegm,1,1);
$typeaccountgd=substr($typegd,0,1);
$accountsgd=substr($typegd,1,1);
echo $typeaccountgm;
echo $accountsgm;	
echo $typeaccountgd;
echo $accountsgd;		
	//	$query = mysqli_query($sss, "INSERT INTO `num_ts`(`num_ts`)  
      //  VALUES('$num_form')") or die (mysqli_error($sss));
	  
	if($amount!=""&&$day!=""&&$year!=""&&$month!=""&&$data!=""&&$num_form!=""){
if($uses!=""){
$query = mysqli_query($sss, "INSERT INTO `public`(`num_ts`, `data`, `year`, `month`, `day`, `term`, `type_account`, `accounts`, `val`) VALUES ('$num_form','$data','$year','$month','$day','$termgm','$typeaccountgm','$accountsgm','$amount')") or die (mysqli_error($sss));
$query = mysqli_query($sss, "INSERT INTO `public`(`num_ts`, `data`, `year`, `month`, `day`, `term`, `type_account`, `accounts`, `resources`, `val`) VALUES ('$num_form','$data','$year','$month','$day','$termgd','$typeaccountgd','$accountsgd','$resuorces','$amount')") or die (mysqli_error($sss));}
else{
	$query = mysqli_query($sss, "INSERT INTO `public`(`num_ts`, `data`, `year`, `month`, `day`, `term`, `type_account`, `accounts`, `val`) VALUES ('$num_form','$data','$year','$month','$day','$termgm','$typeaccountgm','$accountsgm','$amount')") or die (mysqli_error($sss));
	
	$query = mysqli_query($sss, "INSERT INTO `public`(`num_ts`, `data`, `year`, `month`, `day`, `term`, `type_account`, `accounts`, `val`) VALUES ('$num_form','$data','$year','$month','$day','$termgd','$typeaccountgd','$accountsgd','$amount')") or die (mysqli_error($sss));
	}
		

			

/*$query = mysqli_query($sss, "INSERT INTO tb_sarfe_gm (`num_s`, `date`, `data`,$f)
VALUES('$num_form','$data','$date','$amount')") or die (mysqli_error($sss));
echo $t."   " ;
$query = mysqli_query($sss, "INSERT INTO tb_sarfe_gd (`num_s_gd`, `date`, `data`,$t,, `num_s`) 
        VALUES('$num_form','$data','$date','$amount','$num_form')") or die (mysqli_error($sss));
		

	*/	
			
	
			
			
	
echo'Operation Completed Successfully! <br /><br /><a href="index.php">Click Here</a>';
//<pre> 
$sqlstatment='SELECT `num_account`, `name_account`, `name_db_tb`, `nam_arab` FROM `name_accountes` WHERE name_account="'.$t.'"';
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
echo"gd under";
while($row = mysqli_fetch_array($query)){ 		
//
//'.$f.' من حــســاب
     
// '.$t.'   الى حساب    	 </pre>
 echo'
<table width="700" border="1" >

  <tr  valign="top">
  <td style="width:850px"> '.$row['nam_arab'].' </td>';}
$sqlstatment='SELECT `num_account`, `name_account`, `name_db_tb`, `nam_arab` FROM `name_accountes` WHERE name_account="'.$f.'"';
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
echo"gd under";
while($row = mysqli_fetch_array($query)){ 		

echo'
    <td style="width:850px"> '.$row['nam_arab'].'</td>
  <td style="width:850px">البــــيــــان</td>
    <td style="width:250px">الــتاريـــخ</td>
	 <td style="width:150px">رقــم التـســـويه</td>
  </tr>
   <tr  valign="top">
    <td style="width:20%">'.$amount.'</td>
   <td style="width:20%">'.$amount.'</td>
    <td style="width:50%">'.$data.'</td>
    <td style="width:30%">'.$date.'</td>
    <td style="width:20%">'.$num_form.'</td>
  </tr></table>
';}
exit();
	}

?>
</head>

<body>
</body>
</html>