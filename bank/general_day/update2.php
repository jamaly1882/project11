<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include_once("dbconnection.php");

$num =$_GET['num'];
$data =$_GET['data'];
$day = $_GET['day'];
$month =$_GET['month'];
$year =$_GET['year'];
$value =$_GET['value'];
$term =$_GET['term'];



$sqlCommand = "UPDATE  public  SET  data='$data', day='$day', month='$month', year='$year', val='$value' WHERE  num_s ='$num' AND term='$term'";  

$query = mysqli_query($sss,$sqlCommand) or die (mysqli_error($sss)); 

echo "تم تعديل الاستمارة بشكل ناجح";
//$check1 = $_POST['CheckboxGroup1'];
$zero=0;
//$check2=$_POST['CheckboxGroup2'];


?>
</head>

<body>
</body>
</html>