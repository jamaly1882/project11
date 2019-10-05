<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php

	
// Filter Function -------------------------------------------------------------------


// End Filter Function --------------------------------------------------------------

// Add the info into the database table

		 
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

	

//$query = mysqli_query($sss, "INSERT INTO num_ts( num_ts) 
  //      VALUES('$num_form')") or die (mysqli_error($sss));

		

	
// Filter Function -------------------------------------------------------------------


// End Filter Function --------------------------------------------------------------

// Add the info into the database table
//$query = mysqli_query($sss, "INSERT INTO num_ts( num_ts) 
//        VALUES('$num_form')") or die (mysqli_error($sss));
$typeaccountgm=substr($typegm,0,1);
$accountsgm=substr($typegm,1,1);
$typeaccountgd=substr($typegd,0,1);
$accountsgd=substr($typegd,1,1);
		
	//	$query = mysqli_query($sss, "INSERT INTO `num_ts`(`num_ts`)  
      //  VALUES('$num_form')") or die (mysqli_error($sss));
	  
	if($amount!=""&&$day!=""&&$year!=""&&$month!=""&&$data!=""&&$num_form!=""){
if($resuorces!=""){
$query = mysqli_query($sss, "INSERT INTO `public`(`num_ts`, `data`, `year`, `month`, `day`, `term`, `type_account`, `accounts`, `val`) VALUES ('$num_form','$data','$year','$month','$day','$termgm','$typeaccountgm','$accountsgm','$amount')") or die (mysqli_error($sss));
$query = mysqli_query($sss, "INSERT INTO `public`(`num_ts`, `data`, `year`, `month`, `day`, `term`, `type_account`, `accounts`, `resources`, `val`) VALUES ('$num_form','$data','$year','$month','$day','$termgd','$typeaccountgd','$accountsgd','$resuorces','$amount')") or die (mysqli_error($sss));}
else{
	$query = mysqli_query($sss, "INSERT INTO `public`(`num_ts`, `data`, `year`, `month`, `day`, `term`, `type_account`, `accounts`, `val`) VALUES ('$num_form','$data','$year','$month','$day','$termgm','$typeaccountgm','$accountsgm','$amount')") or die (mysqli_error($sss));
	
	$query = mysqli_query($sss, "INSERT INTO `public`(`num_ts`, `data`, `year`, `month`, `day`, `term`, `type_account`, `accounts`, `val`) VALUES ('$num_form','$data','$year','$month','$day','$termgd','$typeaccountgd','$accountsgd','$amount')") or die (mysqli_error($sss));
	}
	}
	if($amount!=""&&$day!=""&&$year!=""&&$month!=""&&$data!=""&&$num_form!=""){
echo'لقد تمت عملية الادخال بنجاح
';
exit("<a href='index.php'> لرجوع لصفحة الرئيسية اضغط هنا</a>
");
	}
	else{
		echo'لم تتم عملية الادخال بنجاح
<br>
';
exit("<a href='index.php'> لرجوع لصفحة الرئيسية اضغط هنا</a>
");
}
?>

</head>

<body>
</body>
</html>