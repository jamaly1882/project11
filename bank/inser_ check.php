<?php
/* Created by Adam Khoury @ www.developphp.com */

// You may want to obtain refering site name that this post came from for security purposes here
// exit the script if it is not from your site and script
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$q = $_GET['q'];
$p1=$_GET['p1'];
$p2=$_GET['p2'];
$p3=$_GET['p3'];
$p4= $_GET['p4'];
$p5= $_GET['p5'];



// Filter Function -------------------------------------------------------------------

// End Filter Function --------------------------------------------------------------
include_once "conection.php"; 
include_once "conection.php";
if($q == "" || $p1 == "" || $p2 == "" || $p3 == "" || $p4 == ""  || $p5 == ""  ) {
die("<b>نسيت حقل فارغ</b>");
}

// Add the info into the database table

// Add the info into the database table
$query = mysqli_query($myConnection, "INSERT INTO check1 (check_no,check_date, check_type,custmer_name,account,form_no) 
        VALUES('$q','$p1','$p2','$p3','$p4','$p5')") or die (mysqli_error($myConnection));
		

exit();
?>
