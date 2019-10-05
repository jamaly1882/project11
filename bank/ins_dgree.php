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
$p5=$_GET['p5'];





// Filter Function -------------------------------------------------------------------

// End Filter Function --------------------------------------------------------------
include_once "conee.php"; 
include_once "conee.php";


// Add the info into the database table

// Add the info into the database table
$query = mysqli_query($myConnection, "INSERT INTO dgree (m_1,dgree_1,dgree_2,dgree_3,dgree_4,stno) 
        VALUES('$q','$p1','$p2','$p3','$p4',$p5)") or die (mysqli_error($myConnection));
		

exit();
?>
