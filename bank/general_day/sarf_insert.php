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
$gm=$_POST['gm'];
$gd=$_POST['gd'];
$f=$_POST['from'];
$t=$_POST['to'];
echo $f;
	echo $t;
	echo $gm;
	echo $gd;
$gm1=array("h_m_paided","h_m_paided","h_m_paided","h_m_paided","h_m_paided","h_m_paided","h_d_paided","r_paided","r_paided","r_paided","r_paided","r_paided");

$gmc=array("advance_temp","depand_document","change_mounetary","advance_on_sal","amount_paid_beforehand","advance_c_ac","c_ac","uses1","uses2","uses3","uses4","uses5");


$gd1=array("h_m_ts","h_m_ts","h_m_ts","h_m_ts","h_m_ts","h_m_ts","h_m_paided","h_m_danine","h_d_paided");

$gdc=array("advance_temp","depand_document","change_mounetary","amount_paid_beforehand","advance_on_sal","advance_c_ac","bank_c_ac","danine_maliah","money_under_ts");

	

	
// Filter Function -------------------------------------------------------------------


// End Filter Function --------------------------------------------------------------

// Add the info into the database table
 
	echo "aaaa" ;
	

$tb1=equle($f,$gmc,$gm1);
echo $tb1."  ";
$tb2=equle2($t,$gdc,$gd1);
echo $tb2;
$rr=equle3($tb1,$tb2,$num_form,$data,$date,$amount,$sss,$f,$t);
function equle($f,$gmc,$gm1){
	for ($i=0;$i<=17;$i++){
	$r1=$gmc[$i];
	
	if($f==$r1){
		$tb3=$gm1[$i];
		return $tb3;	
			
		}}}
		
		function equle2($t,$gdc,$gd1){
	for ($j=0;$j<=17;$j++){
	$r2=$gdc[$j];
	if($t==$r2){
		$tb4=$gd1[$j];
		return $tb4;		
		}
		}
	
	}
		
		function equle3($tb1,$tb2,$num_form,$data,$date,$amount,$sss,$f,$t){	
	
	
			
			 if($tb1=="r_paided") {// من حساب الاستخدمات 1و2و3و4و5الى حساب المبالغ الدئنه تحت  اوحساب البنك حساب جاريالسوية
			$query = mysqli_query($sss, "INSERT INTO $tb1 ( num_s,data,date,$f) 
        VALUES('$num_form','$data','$date','$amount')") or die (mysqli_error($sss));

			}
			
			 
			return 0;
	}
	
			
			


echo'Operation Completed Successfully! <br /><br /><a href="index.php">Click Here</a>
<pre> 
'.$f.' من حــســاب
     
 '.$t.'   الى حساب    	 </pre>
<table width="700" border="1" >

  <tr  valign="top">
  <td style="width:850px"> '.$t.' </td>

    <td style="width:850px"> '.$f.'</td>
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
';
exit();


?>
</head>

<body>
</body>
</html>