<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include_once("dbconnection.php");
$num_form = $_POST['num_form'];
$data = $_POST['data'];

$date=$_POST['date'];
$amount=$_POST['amount'];

$f=$_POST['name_ac_gm'];
$t=$_POST['name_ac_gd'];
$ncool=$_POST['num_coll'];
echo $f;
	echo $t;
	


	
// Filter Function -------------------------------------------------------------------


// End Filter Function --------------------------------------------------------------

// Add the info into the database table
//$query = mysqli_query($sss, "INSERT INTO num_ts( num_ts) 
//        VALUES('$num_form')") or die (mysqli_error($sss));

	
	
	$query = mysqli_query($sss, "INSERT INTO public_gm  (num_ts,data,date,$f,num_coll) 
        VALUES('$num_form','$data','$date','$amount',$ncool)") or die (mysqli_error($sss));
		
		$query = mysqli_query($sss, "INSERT INTO public_gd  (num_ts,data,date,$t,num_coll) 
        VALUES('$num_form','$data','$date','$amount',$ncool)") or die (mysqli_error($sss));


			
	
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


?>
</head>

<body>
</body>
</html>