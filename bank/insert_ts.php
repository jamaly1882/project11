<?php
/* Created by Adam Khoury @ www.developphp.com */

// You may want to obtain refering site name that this post came from for security purposes here
// exit the script if it is not from your site and script
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$q =$_GET['q'];
$p1 =$_GET['p1'];
$p2 =$_GET['p2'];
$p3 =$_GET['p3'];
$p4=$_GET['p4'];
$p5=$_GET['p5'];
$p6=$_GET['p6'];
$p7=$_GET['p7'];
//$p8=$_GET['p8'];





// Filter Function -------------------------------------------------------------------

// End Filter Function --------------------------------------------------------------
include_once "conection.php";
if($q == "" || $p1 == "" || $p2 == "" || $p3 == "" || $p4 == ""  || $p5 == "" || $p6 == "" || $p7 == "" ) {
die("<b>نسيت حقل فارغ</b>");
}


// Add the info into the database table
		$query = mysqli_query($myConnection, "INSERT INTO ts (ts_no, bine,day,month,year) 
        VALUES('$q','$p1','$p2','$p3','$p4')") or die (mysqli_error($myConnection));
	
$query = mysqli_query($myConnection, "INSERT INTO export (export_no, export_date, account,ts_no) 
        VALUES('$p5','$p6','$p7','$q')") or die (mysqli_error($myConnection));
		

exit();
?>