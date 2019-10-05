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
 $sqlstatment='SELECT  `year` , `month`,`returned_salary_gm`, `num_coll`
FROM later_gm WHERE`year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
	
$querylater = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergm = mysqli_fetch_array($querylater); 

$summain=$rowlatergm['returned_salary_gm'];
	
	
		
//ccurent_monthe_gm	
	 $sqlstatment="SELECT  sum(`returned_salary_gm`) FROM `public_gm`";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$rowgm = mysqli_fetch_array($query); 


$sumgm=$rowgm['sum(`returned_salary_gm`)'];
//jomlah

$returned_salary_gm=$rowlatergm['returned_salary_gm']+$rowgm['sum(`returned_salary_gm`)'];

$sumjmlh=$summain+$sumgm;





	//later_monthe_gd
$sqlstatment='SELECT `year`, `month`,`returned_salary_gd`, `num_coll` FROM `later_gd` WHERE `year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
$querylatergd = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergd = mysqli_fetch_array($querylatergd); 
$summaingd=$rowlatergd['returned_salary_gd'];

//ccurent_monthe_gd
$sqlstatment1="SELECT  sum(`returned_salary_gd`) FROM `public_gd`";
$query1 = mysqli_query($sss,$sqlstatment1) or die (mysqli_error($sss));
$rowgd = mysqli_fetch_array($query1);
$sum=$rowgd['sum(`returned_salary_gd`)'];
//jomlah_gd
$returned_salary_gd=$rowlatergd['returned_salary_gd']+$rowgd['sum(`returned_salary_gd`)'];
$sumjmlhgd=$summaingd+$sum;



$returned_salary=$returned_salary_gm-$returned_salary_gd;

$sumsub=$sumjmlh-$sumjmlhgd;



if($returned_salary<1){
	$gm=0;
	$gd=1;
	$returned_salary1 =$returned_salary*(-1)*$gd;
	$returned_salary2 =0;

	}
	else if($returned_salary>1){
	$gm=1;
	$gd=0;
	$returned_salary2 =$returned_salary*(1)*$gm;
	$returned_salary1=0;

		}
	
	else if($returned_salary==0){
	$gm=1;
	$gd=0;
	$returned_salary2=0;
	$returned_salary1=0;
 
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

	
$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,returned_salary_gd,`sum_gd`) 
        VALUES('$year','$monthinsert','$returned_salary1','$sumsub1')") or die (mysqli_error($sss)); 
		
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,returned_salary_gm,`sum_gm`) 
        VALUES('$year','$monthinsert','$returned_salary2','$sumsub2')") or die (mysqli_error($sss)); 
		
		
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
       <td dir="rtl" width="221">الحسابات الانتقالية المدينة</td>
    </tr>
    <tr>
      <td dir="rtl" width="45">'.$returned_salary1.'</td>
      <td dir="rtl" width="53">'.$returned_salary2 .'</td>
      <td dir="rtl" width="100">'.$returned_salary_gd.'</td>
      <td dir="rtl" width="53">'.$returned_salary_gm.'</td>
      <td dir="rtl" width="97">'.$rowgd['sum(`returned_salary_gd`)'].'</td>
      <td dir="rtl" width="53">'.$rowgm['sum(`returned_salary_gm`)'].'</td>
      <td dir="rtl" width="98">'.$rowlatergd['returned_salary_gd'].'</td>
      <td dir="rtl" width="58">'.$rowlatergm['returned_salary_gm'].'</td>
         <td dir="rtl" width="221">حساب    البنك أمانات</td>
   
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