<table><tr> <img align="right" src="opreation16_clip_image002.gif" alt="" width="20%" />
	</tr></table>
<?php
include_once("dbconnection.php");
//$check0 = $_POST['RadioGroup1'];
$month = $_POST['monthe'];
$year = $_POST['year'];
echo $year;
if($month==1){
$monthinsert=$month;}
if($month==0){
$monthinsert=$month+1;}
	//later_monthe_gm
 $sqlstatment='SELECT  `year` , `month` , bank_safety_gm , `num_coll`
FROM later_gm WHERE`year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
	
$querylater = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergm = mysqli_fetch_array($querylater); 

$summain=$rowlatergm['bank_safety_gm'];
	
	
		
//ccurent_monthe_gm	
	 $sqlstatment="SELECT  sum(`bank_safety_gm`) FROM `public_gm`";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$rowgm = mysqli_fetch_array($query); 


$sumgm=$rowgm['sum(`bank_safety_gm`)'];
//jomlah

$bank_safety_gm=$rowlatergm['bank_safety_gm']+$rowgm['sum(`bank_safety_gm`)'];

$sumjmlh=$summain+$sumgm;





	//later_monthe_gd
$sqlstatment='SELECT `year`, `month`,  bank_safety_gd , `num_coll` FROM `later_gd` WHERE `year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
$querylatergd = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergd = mysqli_fetch_array($querylatergd); 
$summaingd=$rowlatergd['bank_safety_gd'];

//ccurent_monthe_gd
$sqlstatment1="SELECT  sum(`bank_safety_gd`) FROM `public_gd`";
$query1 = mysqli_query($sss,$sqlstatment1) or die (mysqli_error($sss));
$rowgd = mysqli_fetch_array($query1);
$sum=$rowgd['sum(`bank_safety_gd`)'];

//jomlah_gd

$bank_safety_gd=$rowlatergd['bank_safety_gd']+$rowgd['sum(`bank_safety_gd`)'];

$sumjmlhgd=$summaingd+$sum;



$bank_safety=$bank_safety_gm-$bank_safety_gd;


$sumsub=$sumjmlh-$sumjmlhgd;




		
		if($bank_safety<1){
	$gm=0;
	$gd=1;
	$bank_safety1 =$bank_safety*(-1)*$gd;
	$bank_safety2 =0;

	}
	else if($bank_safety>1){
	$gm=1;
	$gd=0;
	$bank_safety2 =$bank_safety*(1)*$gm;
	$bank_safety1=0;

		}
	
	else if($bank_safety==0){
	$gm=1;
	$gd=0;
	$bank_safety2=0;
	$bank_safety1=0;
 
		}

	if($sumsub<1){
	$gm=0;
	$gd=1;
	$sumsub1 =$sumsub*(-1)*$gd;
	$sumsub2=0;
	

	}
		else if($sumsub>1){
	$gm=1;
	$gd=0;
	$sumsub2 =$sumsub*(1)*$gm;
	$sumsub1=0;

	}
	
	else if($sumsub==0){
	$gm=1;
	$gd=0;
	$sumsub2 =0;
	$sumsub1=0;
	}

	
$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`bank_safety_gd`,`sum_gd`) 
        VALUES('$year','$monthinsert','$bank_safety1','$sumsub1')") or die (mysqli_error($sss)); 
		
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`bank_safety_gm`,`sum_gm`) 
        VALUES('$year','$monthinsert','$bank_safety2','$sumsub2')") or die (mysqli_error($sss)); 
		
		
echo'
<table cellspacing="0" cellpadding="0" border="1">
    
     <td colspan="2" dir="rtl">الباقي حتى نهاية الشهر الجاري</td>
       <td colspan="2" dir="rtl">الجملة</td>
      <td colspan="2" dir="rtl">عمليات الشهر الجاري</td>
     
     <td colspan="2" dir="rtl">المتأخرات حتى نهاية الشهر السابق</td>
        <td rowspan="2" dir="rtl" width="221">بيان أنواع الحسابات</td>
    </tr>
    <tr>
      <td dir="rtl" width="45">منه</td>
      <td dir="rtl" width="53">له</td>
      <td dir="rtl" width="100">منه</td>
      <td dir="rtl" width="53">له</td>
      <td dir="rtl" width="97">منه</td>
      <td dir="rtl" width="53">له</td>
      <td dir="rtl" width="98">منه</td>
      <td dir="rtl" width="58">له</td>
    </tr>
    <tr>
     
      <td dir="rtl" width="45">ريال</td>
      <td dir="rtl" width="53">ريال</td>
      <td dir="rtl" width="100">ريال</td>
      <td dir="rtl" width="53">ريال</td>
      <td dir="rtl" width="97">ريال</td>
      <td dir="rtl" width="53">ريال</td>
      <td dir="rtl" width="98">ريال</td>
      <td dir="rtl" width="58">ريال</td>
       <td dir="rtl" width="221">الحسابات الانتقالية  الدائنة</td>
    </tr>
    <tr>
      <td dir="rtl" width="45">'.$bank_safety1.'</td>
      <td dir="rtl" width="53">'.$bank_safety2 .'</td>
      <td dir="rtl" width="100">'.$bank_safety_gd.'</td>
      <td dir="rtl" width="53">'.$bank_safety_gm.'</td>
      <td dir="rtl" width="97">'.$rowgd['sum(`bank_safety_gd`)'].'</td>
      <td dir="rtl" width="53">'.$rowgm['sum(`bank_safety_gm`)'].'</td>
      <td dir="rtl" width="98">'.$rowlatergd['bank_safety_gd'].'</td>
      <td dir="rtl" width="58">'.$rowlatergm['bank_safety_gm'].'</td>
         <td dir="rtl" width="221">حساب مرتجع الأجور</td>
   
    </tr>
    <tr>
     
    <tr>
      <td dir="rtl" width="45">'.$sumsub1.'</td>
      <td dir="rtl" width="53">'.$sumsub2.'</td>
      <td dir="rtl" width="100">'.$sumjmlhgd.'</td>
      <td dir="rtl" width="53">'.$sumjmlh.'</td>
      <td dir="rtl" width="97">'.$sumjmlhgd.'</td>
      <td dir="rtl" width="53">'.$sumgm.'</td>
      <td dir="rtl" width="98">'.$summaingd.'</td>
      <td dir="rtl" width="58">'.$summain.'</td>
       <td dir="rtl" width="221">الجمــــلة</td>

    </tr>
  </table>
</body>';?>