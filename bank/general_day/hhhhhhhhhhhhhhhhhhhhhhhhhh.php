<?php 
include_once("dbconnection.php");
//$check0 = $_POST['RadioGroup1'];
$sqlstatment='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`';
	
$querylater = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$row1=mysqli_fetch_array($querylater);


echo $row1['name_accounts'];
?>
