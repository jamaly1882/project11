<table><tr> <img align="right" src="opreation16_clip_image002.gif" alt="" width="20%" />
	</tr></table>tion16_clip_image002.gif" alt="" width="196" height="74" />
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
 $sqlstatment='SELECT  `year` , `month` ,  `c_ac_gm`, `danin_malih_gm`,`amount_under_ts_gm` , `num_coll`
FROM later_gm WHERE`year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
	
$querylater = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergm = mysqli_fetch_array($querylater); 

$summain=$rowlatergm['c_ac_gm'] +$rowlatergm['danin_malih_gm']+$rowlatergm['amount_under_ts_gm'];	
	
	
		
//ccurent_monthe_gm	
	 $sqlstatment="SELECT  sum(`c_ac_gm`), sum(`danin_malih_gm`),sum(`amount_under_ts_gm`) FROM `public_gm`";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$rowgm = mysqli_fetch_array($query); 


$sumgm=$rowgm['sum(`c_ac_gm`)']+$rowgm['sum(`danin_malih_gm`)']+$rowgm['sum(`amount_under_ts_gm`)'];

//jomlah

$c_ac_gm=$rowlatergm['c_ac_gm']+$rowgm['sum(`c_ac_gm`)'];
$danin_malih_gm=$rowlatergm['danin_malih_gm'] +$rowgm['sum(`danin_malih_gm`)'];
$amount_under_ts_gm=$rowlatergm['amount_under_ts_gm']+$rowgm['sum(`amount_under_ts_gm`)'];
$sumjmlh=$summain+$sumgm;





	//later_monthe_gd
$sqlstatment='SELECT  `year` , `month` ,  `c_ac_gd`, `danin_malih_gd`,`amount_under_ts_gd` 
FROM later_gd WHERE`year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;	echo $year.$month;
$querylatergd = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergd = mysqli_fetch_array($querylatergd); 
$summaingd=$rowlatergd['c_ac_gd'] +$rowlatergd['danin_malih_gd']+$rowlatergd['amount_under_ts_gd'];

//ccurent_monthe_gd
$sqlstatment1="SELECT  sum(`c_ac_gd`), sum(`danin_malih_gd`),sum(`amount_under_ts_gd`) FROM `public_gd`";
$query1 = mysqli_query($sss,$sqlstatment1) or die (mysqli_error($sss));
$rowgd = mysqli_fetch_array($query1);

$sum=$rowgd['sum(`c_ac_gd`)']+$rowgd['sum(`danin_malih_gd`)']+$rowgd['sum(`amount_under_ts_gd`)'];


//jomlah_gd
$c_ac_gd=$rowlatergd['c_ac_gd']+$rowgd['sum(`c_ac_gd`)'];
$danin_malih_gd=$rowlatergd['danin_malih_gd'] +$rowgd['sum(`danin_malih_gd`)'];
$amount_under_ts_gd=$rowlatergd['amount_under_ts_gd']+$rowgd['sum(`amount_under_ts_gd`)'];
$sumjmlhgd=$summaingd+$sum;

		


$c_ac=$c_ac_gm-$c_ac_gd;
$danin_malih=$danin_malih_gm-$danin_malih_gd;
$amount_under_ts=$amount_under_ts_gm-$amount_under_ts_gd;
$sumsub=$sumjmlh-$sumjmlhgd;


if($c_ac<1){
	$gm=0;
	$gd=1;
	$c_ac1 =$c_ac*(-1)*$gd;
	$c_ac2 =0;

	}
	else if($c_ac>1){
	$gm=1;
	$gd=0;
	$c_ac2 =$c_ac*(1)*$gm;
	$c_ac1=0;

		}
	
	else if($c_ac==0){
	$gm=1;
	$gd=0;
	$c_ac2=0;
	$c_ac1=0;
 
		}
if($danin_malih<1){
	$gm=0;
	$gd=1;
	$danin_malih1 =$danin_malih*(-1)*$gd;
	$danin_malih2 =0;
}
	else if($danin_malih>1){
	$gm=1;
	$gd=0;
	$danin_malih2 =$danin_malih*(1)*$gm;
	$danin_malih1=0;
		}
	
	else if($danin_malih==0){
	$gm=1;
	$gd=0;
	$danin_malih2=0;
	$danin_malih1=0;

	}
	if($amount_under_ts<1){
	$gm=0;
	$gd=1;
	$amount_under_ts1 =$amount_under_ts*(-1)*$gd;
	$amount_under_ts2=0;
	}
	else if($amount_under_ts>1){
	$gm=1;
	$gd=0;
	$amount_under_ts2 =$amount_under_ts*(1)*$gm;
	$amount_under_ts1=0;

	}
	else if($amount_under_ts==0){
	$gm=1;
	$gd=0;
	$amount_under_ts2 =0;
	$amount_under_ts1=0;

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
$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`c_ac_gd`,`danin_malih_gd`,`amount_under_ts_gd`,`sum_gd`) 
        VALUES('$year','$monthinsert','$c_ac1','$danin_malih1','$amount_under_ts1','$sumsub1')") or die (mysqli_error($sss)); 
		
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,c_ac_gm,`danin_malih_gm`,`amount_under_ts_gm`,`sum_gm`) 
        VALUES('$year','$monthinsert','$c_ac2','$danin_malih2','$amount_under_ts2','$sumsub2')") or die (mysqli_error($sss)); 
	
echo'

<table cellspacing="0" width="100%" cellpadding="0" border="1">
  
    <tr>
     <td colspan="2" dir="rtl">الباقي حتى نهاية الشهر الجاري</td>
     
    
      <td colspan="2" dir="rtl">الجملة</td>
        <td colspan="2" dir="rtl">عمليات الشهر الجاري</td>
      <td colspan="2" dir="rtl">المتأخرات حتى نهاية الشهر السابق</td>
        <td rowspan="2" dir="rtl" width="183">بيان أنواع الحسابات</td>
    </tr>
    <tr>
      <td dir="rtl" width="87">منه</td>
      <td dir="rtl" width="55">له</td>
      <td dir="rtl" width="103">منه</td>
      <td dir="rtl" width="55">له</td>
      <td dir="rtl" width="100">منه</td>
      <td dir="rtl" width="55">له</td>
      <td dir="rtl" width="102">منه</td>
      <td dir="rtl" width="58">له</td>
    </tr>
    <tr>
      
      <td dir="rtl" width="87">ريال</td>
      <td dir="rtl" width="55">ريال</td>
      <td dir="rtl" width="103">ريال</td>
      <td dir="rtl" width="55">ريال</td>
      <td dir="rtl" width="100">ريال</td>
      <td dir="rtl" width="55">ريال</td>
      <td dir="rtl" width="102">ريال</td>
      <td dir="rtl" width="58">ريال</td>
      <td dir="rtl" width="183">لحسابــات    المسـاعــدة الدائنـــة</td>
    </tr>
    <tr>
      <td dir="rtl" width="87">'.$rowlatergm['c_ac_gm'].'</td>
      <td dir="rtl" width="55">'.$rowlatergd['c_ac_gd'].'</td>
      <td dir="rtl" width="103">'.$rowgm['sum(`c_ac_gm`)'].'</td>
 


      <td dir="rtl" width="55">'.$rowgd['sum(`c_ac_gd`)'].'</td>
      <td dir="rtl" width="100">'.$c_ac_gm.'</td>
      <td dir="rtl" width="55">'.$c_ac_gd.'</td>
      <td dir="rtl" width="102">'.$c_ac2 .'</td>
      <td dir="rtl" width="58">'.$c_ac1.'</td>
       <td dir="rtl" width="183">حساب    الحسابات الجارية</td>
     
    </tr>
    <tr>
     
      <td dir="rtl" width="87">'.$rowlatergm['amount_under_ts_gm']
        .'</td>
      <td dir="rtl" width="55">'.$rowgd['sum(`amount_under_ts_gd`)'].'</td>
      <td dir="rtl" width="103">'.$rowgm['sum(`amount_under_ts_gm`)'].'</td>
      <td dir="rtl" width="55">'.$rowgd['sum(`danin_malih_gd`)'].'</td>
      <td dir="rtl" width="100">'.$amount_under_ts_gm.'</td>
      <td dir="rtl" width="55">'.$amount_under_ts_gd.'</td>
      <td dir="rtl" width="102">'.$amount_under_ts2.'</td>
      <td dir="rtl" width="58">'.$amount_under_ts1.'</td>
       <td dir="rtl" width="183">حساب    المبالغ الدائنة تحت التسوية</td>
    </tr>
   
    <tr>
      <td dir="rtl" width="87">'.$rowlatergm['danin_malih_gm'].'</td>
      <td dir="rtl" width="55">'.$rowlatergd['danin_malih_gd'].'</td>
      <td dir="rtl" width="103">'.$rowgm['sum(`danin_malih_gm`)'].'</td>
      <td dir="rtl" width="55">'.$rowgd['sum(`amount_under_ts_gd`)'].'</td>
      <td dir="rtl" width="100">'.$danin_malih_gm.'</td>
      <td dir="rtl" width="55">'.$danin_malih_gd.'</td>
      <td dir="rtl" width="102">'.$danin_malih2.'</td>
      <td dir="rtl" width="58">'.$danin_malih1.'</td>
         <td dir="rtl" width="183">حساب    الدائنين (مالية)</td>
   
    </tr>
    <tr>
   
      <td dir="rtl" width="87">'.$summain.'</td>
      <td dir="rtl" width="55">'.$summaingd.'</td>
      <td dir="rtl" width="103">'.$sumgm.'</td>
      <td dir="rtl" width="55">'.$sum.'</td>
      <td dir="rtl" width="100">'.$sumjmlh.'</td>
      <td dir="rtl" width="55">'.$sumjmlhgd.'</td>
      <td dir="rtl" width="102">'.$sumsub2.'</td>
      <td dir="rtl" width="58">'.$sumsub1.'</td>
         <td dir="rtl" width="183">الجمــــلة</td>
    </tr>
  </table>

</body>';?>