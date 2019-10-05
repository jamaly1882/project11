<?php
/* Created by Adam Khoury @ www.developphp.com */

// You may want to obtain refering site name that this post came from for security purposes here
// exit the script if it is not from your site and script
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$q =$_GET['q'];
$p1=$_GET['p1'];
$p2=$_GET['p2'];
$p3=$_GET['p3'];
$p4=$_GET['p4'];
$p5= $_GET['p5'];
$p6=$_GET['p6'];
$p7= $_GET['p7'];
$p8= $_GET['p8'];
$p9=$_GET['p9'];
$p10=$_GET['p10'];
$p11= $_GET['p11'];
$p12=$_GET['p12'];
$p13=$_GET['p13'];
$p14= $_GET['p14'];



// Filter Function -------------------------------------------------------------------

// End Filter Function --------------------------------------------------------------
include_once "conee.php"; 
include_once "conee.php";


// Add the info into the database table

// Add the info into the database table
$query = mysqli_query($myConnection, "INSERT INTO subject_s (qran,islmic,arbic,english,math,since,group1,stno,dgree_type,physic,chimestry,biology,gegorphy,history,collo) 
        VALUES('$q','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$p12','$p13','$p14')") or die (mysqli_error($myConnection));
		

exit();
?>
