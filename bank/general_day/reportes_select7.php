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
 $sqlstatment='SELECT  `year` , `month`,`monitoring_bestowing_gm`,bestowing_gm, `num_coll`
FROM later_gm WHERE`year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
	
$querylater = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergm = mysqli_fetch_array($querylater); 

$summain=$rowlatergm['monitoring_bestowing_gm']+$rowlatergm['bestowing_gm'];;
	
	
		
//ccurent_monthe_gm	
	 $sqlstatment="SELECT  sum(`monitoring_bestowing_gm`),sum(`bestowing_gm`) FROM `public_gm`";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$rowgm = mysqli_fetch_array($query); 


$sumgm=$rowgm['sum(`monitoring_bestowing_gm`)']+$rowgm['sum(`bestowing_gm`)'];
//jomlah

$monitoring_bestowing_gm=$rowlatergm['monitoring_bestowing_gm']+$rowgm['sum(`monitoring_bestowing_gm`)'];
$bestowing_gm=$rowlatergm['bestowing_gm']+$rowgm['sum(`bestowing_gm`)'];

$sumjmlh=$summain+$sumgm;





	//later_monthe_gd
$sqlstatment='SELECT `year`, `month`,`monitoring_bestowing_gd`,bestowing_gd, `num_coll` FROM `later_gd` WHERE `year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
$querylatergd = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergd = mysqli_fetch_array($querylatergd); 
$summaingd=$rowlatergd['monitoring_bestowing_gd']+$rowlatergd['bestowing_gd'];

//ccurent_monthe_gd
$sqlstatment1="SELECT  sum(`monitoring_bestowing_gd`),sum(`bestowing_gd`) FROM `public_gd`";
$query1 = mysqli_query($sss,$sqlstatment1) or die (mysqli_error($sss));
$rowgd = mysqli_fetch_array($query1);
$sum=$rowgd['sum(`monitoring_bestowing_gd`)']+$rowgd['sum(`bestowing_gd`)'];
//jomlah_gd
$monitoring_bestowing_gd=$rowlatergd['monitoring_bestowing_gd']+$rowgd['sum(`monitoring_bestowing_gd`)'];
$bestowing_gd=$rowlatergd['bestowing_gd']+$rowgd['sum(`bestowing_gd`)'];
$sumjmlhgd=$summaingd+$sum;



$monitoring_bestowing=$monitoring_bestowing_gm-$monitoring_bestowing_gd;
$bestowing=$bestowing_gm-$bestowing_gd;

$sumsub=$sumjmlh-$sumjmlhgd;
if($bestowing<1){
	$gm=0;
	$gd=1;
	$bestowing1 =$bestowing*(-1)*$gd;
	$bestowing2 =0;

	}
	else if($bestowing>1){
	$gm=1;
	$gd=0;
	$bestowing2 =$bestowing*(1)*$gm;
	$bestowing1=0;

		}
	
	else if($bestowing==0){
	$gm=1;
	$gd=0;
	$bestowing2=0;
	$bestowing1=0;
 
		}


if($monitoring_bestowing<1){
	$gm=0;
	$gd=1;
	$monitoring_bestowing1 =$monitoring_bestowing*(-1)*$gd;
	$monitoring_bestowing2 =0;

	}
	else if($monitoring_bestowing>1){
	$gm=1;
	$gd=0;
	$monitoring_bestowing2 =$monitoring_bestowing*(1)*$gm;
	$monitoring_bestowing1=0;

		}
	
	else if($monitoring_bestowing==0){
	$gm=1;
	$gd=0;
	$monitoring_bestowing2=0;
	$monitoring_bestowing1=0;
 
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

	
$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,monitoring_bestowing_gd,bestowing_gd,`sum_gd`) 
        VALUES('$year','$monthinsert','$monitoring_bestowing1','bestowing1','$sumsub1')") or die (mysqli_error($sss)); 
		
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,monitoring_bestowing_gm,bestowing_gm,`sum_gm`) 
        VALUES('$year','$monthinsert','$monitoring_bestowing2','bestowing2','$sumsub2')") or die (mysqli_error($sss)); 
		
		
echo'
<table width="100%" cellspacing="0" cellpadding="0" border="1">
    
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
       <td dir="rtl" width="221"> الحسـابــات    الرقابيــة الإحصائيــة</td>
    </tr>
    <tr>
      <td dir="rtl" width="45">'.$monitoring_bestowing1.'</td>
      <td dir="rtl" width="53">'.$monitoring_bestowing2 .'</td>
      <td dir="rtl" width="100">'.$monitoring_bestowing_gd.'</td>
      <td dir="rtl" width="53">'.$monitoring_bestowing_gm.'</td>
      <td dir="rtl" width="97">'.$rowgd['sum(`monitoring_bestowing_gd`)'].'</td>
      <td dir="rtl" width="53">'.$rowgm['sum(`monitoring_bestowing_gm`)'].'</td>
      <td dir="rtl" width="98">'.$rowlatergd['monitoring_bestowing_gd'].'</td>
      <td dir="rtl" width="58">'.$rowlatergm['monitoring_bestowing_gm'].'</td>
         <td dir="rtl" width="221">حساب مراقبة متحصلات الاقتراض</td>
   
    </tr>
	  <tr>
      <td dir="rtl" width="45">'.$bestowing1.'</td>
      <td dir="rtl" width="53">'.$bestowing2 .'</td>
      <td dir="rtl" width="100">'.$bestowing_gd.'</td>
      <td dir="rtl" width="53">'.$bestowing_gm.'</td>
      <td dir="rtl" width="97">'.$rowgd['sum(`bestowing_gd`)'].'</td>
      <td dir="rtl" width="53">'.$rowgm['sum(`bestowing_gm`)'].'</td>
      <td dir="rtl" width="98">'.$rowlatergd['bestowing_gd'].'</td>
      <td dir="rtl" width="58">'.$rowlatergm['bestowing_gm'].'</td>
         <td dir="rtl" width="221">حساب المنح</td>
   
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