<?php
include_once("dbconnection.php");
$name = $_GET['name'];

//$check1 = $_POST['CheckboxGroup1'];
$zero=0;
//$check2=$_POST['CheckboxGroup2'];



	

	
// Filter Function -------------------------------------------------------------------


// End Filter Function --------------------------------------------------------------

// Add the info into the database table

		$sqlstatment='SELECT `num_account`, `name_account`, `name_db_tb`, `nam_arab` FROM `name_accountes` WHERE `name_account`="'.$name.'"';
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
echo"gd under";
$row = mysqli_fetch_array($query);
echo'
<input type="text" name="name_ac_gd" id="name_ac_gm" value="'.$row['name_account'].'"/>
<input type="text" name="name_tb_gd" id="name_tb_gm" value="'.$row['name_db_tb'].'"/>';

 ';
	?>