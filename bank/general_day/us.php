<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
  <?php 
	 include_once("dbconnection.php");
	
$term = $_POST['term_ganbe'];
$frommonth = $_POST['frommonth'];
$tomonth = $_POST['tomonth'];
$fromday = $_POST['fromday'];
$today = $_POST['today'];
$year = $_POST['year'];
	 echo'
<table width="100%" cellspacing="0" cellpadding="0" border="1">
<tr>
  <td colspan="2" dir="rtl" width="1575"><table width="100%" cellspacing="0"  border="1" cellpadding="0">
    <tr>
      <td colspan="14" rowspan="2" dir="rtl" width="1148">الجانب المدين (منه)</td>
      <td colspan="3" rowspan="2" dir="ltr" width="328">&nbsp;</td>
      <td dir="ltr" width="145"></td>
      <td dir="ltr" width="328"></td>
      <td dir="ltr" width="145"></td>
      <td dir="ltr" width="19"></td>
      <td dir="ltr" width="145"></td>
      <td dir="ltr" width="19"></td>
      <td dir="rtl" width="145">دفــتـــــــر</td>
      <td dir="ltr" width="164"></td>
      <td dir="ltr" width="145"></td>
    </tr>
    <tr>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
      <td dir="ltr"></td>
    </tr>
    <tr>
      <td colspan="2" dir="rtl" width="1575">رقم اليومية العامة</td>
      <td rowspan="2" dir="rtl" width="110">التاريخ</td>
      <td rowspan="2" dir="rtl" width="425">البيـــــــــــــــــــــــــــــــان</td>
      <td colspan="10" dir="rtl" width="820">الإستخدامات </td>
      <td colspan="2" rowspan="2" dir="rtl" width="164">حـ/البنك إستخدامات</td>
      <td colspan="2" rowspan="2" dir="rtl" width="164">حـ/ البنك  موارد<br /></td>
      <td colspan="6" dir="rtl">الحسابات    المساعدة المدينة</td>
      <td colspan="4" dir="rtl">الحسابات    المساعدة الدائنة</td>
      <td colspan="4" dir="rtl" width="328">الحسابات    الإنتقالية </td>
      <td colspan="4" dir="rtl" width="328">الحسابات النظامية</td>
      <td colspan="4" dir="rtl" width="328">الحسابات الرقابية الاحصائية<br /></td>
      <td rowspan="2" dir="ltr" width="19">&nbsp;</td>
      <td rowspan="2" dir="rtl" width="145">حساب<br />
        الموارد<br /></td>
      <td colspan="2" rowspan="2" dir="rtl" width="164">المبلغ<br />
        الكلي<br /></td>
    </tr>
    <tr>
      <td dir="rtl" width="1575">استمارة<br />
        اعتماد الصرف<br /></td>
      <td dir="rtl" width="110">تسويات</td>
      <td colspan="2" dir="rtl" width="820">الباب <br />
        الأول<br /></td>
      <td colspan="2" dir="rtl" width="164">الباب <br />
        الثاني<br /></td>
      <td colspan="2" dir="rtl" width="164">الباب<br />
        الثالث<br /></td>
      <td colspan="2" dir="rtl" width="164">الباب<br />
        الرابع<br /></td>
      <td colspan="2" dir="rtl" width="164">الباب<br />
        الخامس<br /></td>
      <td colspan="2" dir="rtl" width="1148">حـ/ النقدية</td>
      <td colspan="2" dir="rtl" width="164">حسابات<br />
        مدينه<br />
        أخرى<br /></td>
      <td colspan="2" dir="rtl" width="164">حـ/    المدينين<br />
        (مالية)<br /></td>
      <td colspan="2" dir="rtl" width="164">حسابات  دائنة  أخرى</td>
      <td colspan="2" dir="rtl" width="164">حـ/    الدائنين<br />
        (مالية)<br /></td>
      <td colspan="2" dir="rtl" width="328">مدينة</td>
      <td colspan="2" dir="rtl" width="164">دائنة</td>
      <td dir="ltr" width="328">&nbsp;</td>
      <td dir="rtl" width="145">مدينـــــة</td>
      <td dir="ltr" width="19">&nbsp;</td>
      <td dir="rtl" width="145">دائنــــــة</td>
      <td dir="ltr" width="328">&nbsp;</td>
      <td dir="rtl" width="145">مدينـــــة</td>
      <td dir="ltr" width="19">&nbsp;</td>
      <td dir="rtl" width="145">دائنــــــة</td>
    </tr>
    ';
   
	  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];

$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=1
AND `accounts` =2 AND uses=1 AND `term`=1 AND
 `month`>= ".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];


echo'
     
   <tr>
     
      <td dir="ltr">'.$row5['num_s'].'</td>
      <td dir="ltr">-</td>
      <td dir="ltr">'.$row5['year'].'.-.'.$row5['num_s'].'.-.'.$row5['month'].'.-.'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	   <td dir="ltr">'.$row5['val'].'</td>
 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
		  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];

$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=1
AND `accounts` =2 AND uses=2 AND `term`=1 AND `month`>= ".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";;
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];


echo'
     
   <tr>
     
       <td dir="ltr">'.$row5['num_s'].'</td>
      <td dir="ltr">-</td>
      <td dir="ltr">'.$row5['year'].'.-.'.$row5['num_s'].'.-.'.$row5['month'].'.-.'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	   
	   
  <td dir="ltr">&nbsp;</td>
  <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
	
		  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];

$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=1
AND `accounts` =2 AND uses=3 AND `term`=1 AND `month`>= ".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];


echo'
     
   <tr>
     
      <td dir="ltr">'.$row5['num_s'].'</td>
      <td dir="ltr">-</td>
      <td dir="ltr">'.$row5['year'].'.-.'.$row5['num_s'].'.-.'.$row5['month'].'.-.'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
		  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];

$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=1
AND `accounts` =2 AND uses=4 AND `term`=1 AND `month`> ".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
     <td dir="ltr">'.$row5['num_s'].'</td>
      <td dir="ltr">-</td>
      <td dir="ltr">'.$row5['year'].'.-.'.$row5['num_s'].'.-.'.$row5['month'].'.-.'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	 
 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   <td dir="ltr">'.$row5['val'].'</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
		  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];

$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=1
AND `accounts` =2 AND uses=5 AND `term`=1 AND `month`>=".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
       <td dir="ltr">'.$row5['num_s'].'</td>
      <td dir="ltr">-</td>
      <td dir="ltr">'.$row5['year'].'.-.'.$row5['num_s'].'.-.'.$row5['month'].'.-.'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	     <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
			  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];

$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=1
AND `accounts` =3 AND `term`=1 AND `month`>= ".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
      
      <td dir="ltr">-</td>
	   <td dir="ltr">'.$row5['num_ts'].'</td>
      <td dir="ltr">'.$row5['year'].'.-.'.$row5['num_s'].'.-.'.$row5['month'].'.-.'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	  
	 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
	
			  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];

$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=1
AND `accounts` =4 AND `term`=1 AND `month`>= ".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
       <td dir="ltr">-</td>
	   <td dir="ltr">'.$row5['num_ts'].'</td>
      <td dir="ltr">'.$row5['year'].'-'.$row5['month'].'-'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	  
	 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	  <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
	
	
			  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];

$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=2
AND `accounts` =1 AND `term`=1 AND `month`>= ".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
      <td dir="ltr">-</td>
	   <td dir="ltr">'.$row5['num_ts'].'</td>
       <td dir="ltr">'.$row5['year'].'-'.$row5['month'].'-'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	  
	 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	 
      <td dir="ltr">&nbsp;</td>
	  
	   <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
	
	
		
			  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];

$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=2
AND `accounts` =2 AND `term`=1 AND `month`>= ".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
     <td dir="ltr">'.$row5['num_s'].'</td>
      <td dir="ltr">'.$row5['num_ts'].'</td>
     <td dir="ltr">'.$row5['year'].'-'.$row5['month'].'-'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>    
	  
	 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	 
      <td dir="ltr">&nbsp;</td>
	  
	   <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
			  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];
$i=3;
while($i<=8){
$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=2
AND `accounts` =$i AND `term`=1 AND `month`>=".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];


echo'
     
   <td dir="ltr">'.$row5['num_s'].'</td>
      <td dir="ltr">'.$row5['num_ts'].'</td>
       <td dir="ltr">'.$row5['year'].'-'.$row5['month'].'-'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	 
      <td dir="ltr">&nbsp;</td>
	  
	  
      <td dir="ltr">&nbsp;</td>
	   <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
	
	$i++;}
	
				  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];

$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=2
AND `accounts` =9 AND `term`=1 AND `month`>=".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
       <td dir="ltr">'.$row5['num_s'].'</td>
      <td dir="ltr">'.$row5['num_ts'].'</td>
      <td dir="ltr">'.$row5['year'].'-'.$row5['month'].'-'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	 
      <td dir="ltr">&nbsp;</td>
	  
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	   <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
	
					  $sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`=1';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
$row2=mysqli_fetch_array($querylaterw);
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];
$i=1;
while($i<=2){
$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=3
AND `accounts` =".$i." AND `term`=1 AND `month`>=".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
    <td dir="ltr">'.$row5['num_s'].'</td>
      <td dir="ltr">'.$row5['num_ts'].'</td>
      <td dir="ltr">'.$row5['year'].'-'.$row5['month'].'-'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	 
      <td dir="ltr">&nbsp;</td>
	  
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
 
      <td dir="ltr">&nbsp;</td>
	   <td dir="ltr">'.$row5['val'].'</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}$i++;}
	
	
	$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=3
AND `accounts` =3 AND `term`=1 AND `month`>=".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
    <td dir="ltr">'.$row5['num_s'].'</td>
      <td dir="ltr">'.$row5['num_ts'].'</td>
      <td dir="ltr">'.$row5['year'].'-'.$row5['month'].'-'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	 
	 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	 
      <td dir="ltr">&nbsp;</td>
	  
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	 
      <td dir="ltr">&nbsp;</td>
	    <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}
	$i=1;
	while($i<=3){
	$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=4
AND `accounts` =".$i." AND `term`=1 AND `month`>=".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
    <td dir="ltr">-</td>
      <td dir="ltr">'.$row5['num_ts'].'</td>
      <td dir="ltr">'.$row5['year'].'-'.$row5['month'].'-'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
	 
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	 
      <td dir="ltr">&nbsp;</td>
	  
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	         <td dir="ltr">&nbsp;</td>
	
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	    <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}$i++;}
	$i=1;
	while($i<=3){
	$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=5
AND `accounts` =".$i." AND `term`=1 AND `month`>=".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
      <td dir="ltr">-</td>
      <td dir="ltr">'.$row5['num_ts'].'</td>
      <td dir="ltr">'.$row5['year'].'-'.$row5['month'].'-'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	 
      <td dir="ltr">&nbsp;</td>
	  
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	         <td dir="ltr">&nbsp;</td>
	   <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  <td dir="ltr">'.$row5['val'].'</td>
 
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}$i++;}
		$i=1;
	while($i<=6){
	$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=6
AND `accounts` =".$i." AND `term`=1 AND `month`>=".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
     
     <td dir="ltr">-</td>
      <td dir="ltr">'.$row5['num_ts'].'</td>
       <td dir="ltr">'.$row5['year'].'-'.$row5['month'].'-'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	 
      <td dir="ltr">&nbsp;</td>
	  
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	         <td dir="ltr">&nbsp;</td>
	   <td dir="ltr">&nbsp;</td>
	  <td dir="ltr">&nbsp;</td>
	     
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  <td dir="ltr">'.$row5['val'].'</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}$i++;}
			$i=1;
	while($i<=2){
	$sqlstatment5="SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, val, `num_coll` FROM `public` WHERE `type_account`=7
AND `accounts` =".$i." AND `term`=1 AND `month`>=".$frommonth." AND 
   `month`<= ".$tomonth ." AND
    `day`>= ".$fromday." AND 
	`day` <=".$today." AND
	 `year`=".$year."";
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
while($row5=mysqli_fetch_array($querycursumgm)){
$sumgmcur=$row5['val'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


echo'
     
   <tr>
  <td dir="ltr">-</td>
      <td dir="ltr">'.$row5['num_ts'].'</td>
       <td dir="ltr">'.$row5['year'].'-'.$row5['month'].'-'.$row5['day'].'</td>
      <td dir="ltr">'.$row5['data'].'</td>   
  <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   
      <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	 
      <td dir="ltr">&nbsp;</td>
	  
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	  
      <td dir="ltr">&nbsp;</td>
	         <td dir="ltr">&nbsp;</td>
	   <td dir="ltr">&nbsp;</td>
	  <td dir="ltr">&nbsp;</td>
	    
      <td dir="ltr">&nbsp;</td>
	   <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
	   <td dir="ltr">'.$row5['val'].'</td>
    
      
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
      <td dir="ltr">&nbsp;</td>
    </tr>';}$i++;}
	echo'
    <tr>
      <td dir="ltr"></td>
    </tr>
    <tr>
      <td dir="ltr"></td>
    </tr>
  </table></td>
</tr>
</table>';
?>
</html>
