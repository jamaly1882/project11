<?php
$q =$_GET['q'];
$p1= $_GET['p1'];
$p2=$_GET['p2'];
$p3=$_GET['p3'];
$p4=$_GET['p4'];


///////////////////////////////////////////////////////////
include_once "conection.php";

include_once "conection.php";
if($q == "" || $p1 == "" || $p2 == "" || $p3 == "" || $p4 == ""  ) {
die("<b>نسيت حقل فارغ</b>");
}

$query = mysqli_query($myConnection, "INSERT INTO  form( form_no	,bine,day,month,year) 
        VALUES('$q','$p1','$p2','$p3','$p4')") or die (mysqli_error($myConnection));


?>