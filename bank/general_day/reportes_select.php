<?php
include_once("dbconnection.php");
//$check0 = $_POST['RadioGroup1'];
$month = $_POST['monthe'];
$year = $_POST['year'];
if($month==1){
$monthinsert=$month;}
if($month==0){
$monthinsert=$month+1;}
	//later_monthe_gm
	$i=1;
	while($i<=4){}
 $sqlstatment='SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, `values`, `num_coll` 
FROM later WHERE`year`="'.$year.'" And `month`="'.$month.'" `type_account`=1 AND `accounts`=$i AND `term`=1 ';
	echo $year.$month;
	
$querylater = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergm = mysqli_fetch_array($querylater); 
$summain=$rowlatergm['resources_gm'] +$rowlatergm['uses_gm']+$rowlatergm['bank_uses_gm']+$rowlatergm['bank_resources_gm'];	
	
	
		

	//later_monthe_gd
$sqlstatment='SELECT `year`, `month`, `monetary_gd`, `advance_c_ac_gd`, `advance_temp_gd`, `advance_on_sal_gd`, `depand_document_gd`, `change_mounteray_gd`, `amonet_paide_beforehand_gd`, `c_ac_gd`, `bank_c_ac_gd`, `uses_gd`, `resources_gd`, `bank_uses_gd`, `danin_malih_gd`, `madinin_malih_gd`, `bank_resources_gd`, `amount_under_ts_gd`, `resources_deserving_gd`, `debt_deserving_gd`, `checks_coming_collection_gd`, `checks_coming_delayed_gd`, `resources_deserving_ts_gd`, `checks_under_collection_gd`, `checks_delayed_gd`, `dept_deserving_ts_gd`, `num_coll` FROM `later_gd` WHERE `year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
$querylatergd = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergd = mysqli_fetch_array($querylatergd); 
$summaingd=$rowlatergd['resources_gd'] +$rowlatergd['uses_gd']+$rowlatergd['bank_uses_gd']+$rowlatergd['bank_resources_gd'];

//ccurent_monthe_gm	
	 $sqlstatment="SELECT  sum(`resources_gm`), sum(`uses1`),sum(`uses2`),sum(`uses3`),sum(`uses4`),sum(`uses5`),sum(`bank_resources_gm`),sum(`bank_uses_gm`) FROM `public_gm`";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$rowgm = mysqli_fetch_array($query); 

$uses_gm=$rowgm['sum(`uses1`)']+$rowgm['sum(`uses2`)']+$rowgm['sum(`uses3`)']+$rowgm['sum(`uses4`)']+$rowgm['sum(`uses5`)'];

$sumgm=$rowgm['sum(`resources_gm`)'] +$uses_gm+$rowgm['sum(`bank_uses_gm`)']+$rowgm['sum(`bank_resources_gm`)'];

//ccurent_monthe_gd
$sqlstatment1="SELECT  sum(`uses_gd`), sum(`resources1`),sum(`resources2`),sum(`resources3`),sum(`resources4`),sum(`resources5`),sum(`bank_resources_gd`),sum(`bank_uses_gd`) FROM `public_gd`";
$query1 = mysqli_query($sss,$sqlstatment1) or die (mysqli_error($sss));
$rowgd = mysqli_fetch_array($query1);
$resourses_gd=$rowgd['sum(`resources1`)']+$rowgd['sum(`resources2`)']+$rowgd['sum(`resources3`)']+$rowgd['sum(`resources4`)']+$rowgd['sum(`resources5`)'];
$sum=$resourses_gd+$rowgd['sum(`uses_gd`)']+$rowgd['sum(`bank_uses_gd`)']+$rowgd['sum(`bank_resources_gd`)'];

//jomlah

$used=$rowlatergm['uses_gm']+$uses_gm;
$resources=$rowgm['sum(`resources_gm`)'] +$rowlatergm['resources_gm'];
$used_bank=$rowgm['sum(`bank_uses_gm`)']+$rowlatergm['bank_uses_gm'];
$resources_bank=$rowgm['sum(`bank_resources_gm`)']+$rowlatergm['bank_resources_gm'];
$sumjmlh=$summain+$sumgm;
//jomlah_gd
$used_gds=$rowlatergd['uses_gd']+$rowgd['sum(`uses_gd`)'];
$resourcesgd=$rowlatergd['resources_gd'] +$resourses_gd;
$used_bank_gd=$rowlatergd['bank_uses_gd']+$rowgd['sum(`bank_uses_gd`)'];
$resources_bank_gd=$rowlatergd['bank_resources_gd']+$rowgd['sum(`bank_resources_gd`)'];
$sumjmlhgd=$summaingd+$sum;



$usedsub=$used-$used_gds;
$resourcessub=$resources-$resourcesgd;
$used_bank_sub=$used_bank-$used_bank_gd;
$resources_bank_sub=$resources_bank-$resources_bank_gd;
$sumsub=$sumjmlh-$sumjmlhgd;


if($usedsub<1){
	$gm=0;
	$gd=1;
	$usedsub1 =$usedsub*(-1)*$gd;
	$usedsub2 =0;
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,uses_gd) 
        VALUES('$year','$monthinsert','$usedsub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,uses_gm) 
        VALUES('$year','$monthinsert','$usedsub2')") or die (mysqli_error($sss)); 
	}
	else if($usedsub>1){
	$gm=1;
	$gd=0;
	$usedsub2 =$usedsub*(1)*$gm;
	$usedsub1=0;
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,uses_gd) 
        VALUES('$year','$monthinsert','$usedsub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,uses_gm) 
        VALUES('$year','$monthinsert','$usedsub2')") or die (mysqli_error($sss)); 
	}
	
	else if($usedsub==0){
	$gm=1;
	$gd=0;
	$usedsub2=0;
	$usedsub1=0;
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,uses_gd) 
        VALUES('$year','$monthinsert','$usedsub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,uses_gm) 
        VALUES('$year','$monthinsert','$usedsub2')") or die (mysqli_error($sss)); 
	}
	if($resourcessub<1){
	$gm=0;
	$gd=1;
	$resourcessub1 =$resourcessub*(-1)*$gd;
	$resourcessub2=0;
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`resources_gd`) 
        VALUES('$year','$monthinsert','$resourcessub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`resources_gm`) 
        VALUES('$year','$monthinsert','$resourcessub2')") or die (mysqli_error($sss)); 
	}
	else if($resourcessub>1){
	$gm=1;
	$gd=0;
	$resourcessub2 =$resourcessub*(1)*$gm;
	$resourcessub1=0;
		$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`resources_gd`) 
        VALUES('$year','$monthinsert','$resourcessub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`resources_gm`) 
        VALUES('$year','$monthinsert','$resourcessub2')") or die (mysqli_error($sss));
	}
	else if($resourcessub==0){
	$gm=1;
	$gd=0;
	$resourcessub2 =0;
	$resourcessub1=0;
		$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`resources_gd`) 
        VALUES('$year','$monthinsert','$resourcessub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`resources_gm`) 
        VALUES('$year','$monthinsert','$resourcessub2')") or die (mysqli_error($sss));
	}
	
	if($used_bank_sub<1){
	$gm=0;
	$gd=1;
	$used_bank_sub1=$used_bank_sub*(-1);
	$used_bank_sub2=0;
		$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`bank_uses_gd`) 
        VALUES('$year','$monthinsert','$used_bank_sub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`bank_uses_gm`) 
        VALUES('$year','$monthinsert','$used_bank_sub2')") or die (mysqli_error($sss));
	}
	else if($used_bank_sub>1){
	$gm=1;
	$gd=0;
	$used_bank_sub2=$used_bank_sub*(1)*$gm;
	$used_bank_sub1=0;
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`bank_uses_gd`) 
        VALUES('$year','$monthinsert','$used_bank_sub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`bank_uses_gm`) 
        VALUES('$year','$monthinsert','$used_bank_sub2')") or die (mysqli_error($sss));
	}
	
	else if($used_bank_sub==0){
	$gm=1;
	$gd=0;
	$used_bank_sub2=0;
	$used_bank_sub1=0;
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`bank_uses_gd`) 
        VALUES('$year','$monthinsert','$used_bank_sub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`bank_uses_gm`) 
        VALUES('$year','$monthinsert','$used_bank_sub2')") or die (mysqli_error($sss));
	}
	
	if($resources_bank_sub<1){
	$gm=0;
	$gd=1;
	$resources_bank_sub1 =$resources_bank_sub*(-1)*$gd;
	$resources_bank_sub2=0;
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`bank_resources_gd`) 
        VALUES('$year','$monthinsert','$resources_bank_sub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`bank_resources_gm`) 
        VALUES('$year','$monthinsert','$resources_bank_sub2')") or die (mysqli_error($sss));
	}
	else if($resources_bank_sub>1){
	$gm=1;
	$gd=0;
	$resources_bank_sub2 =$resources_bank_sub*(1)*$gm;
	$resources_bank_sub1=0;
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`bank_resources_gd`) 
        VALUES('$year','$monthinsert','$resources_bank_sub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`bank_resources_gm`) 
        VALUES('$year','$monthinsert','$resources_bank_sub2')") or die (mysqli_error($sss));
	}
	
	else if($resources_bank_sub==0){
	$gm=1;
	$gd=0;
	$resources_bank_sub2=0;
	$resources_bank_sub1=0;
	
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`bank_resources_gd`) 
        VALUES('$year','$monthinsert','$resources_bank_sub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`bank_resources_gm`) 
        VALUES('$year','$monthinsert','$resources_bank_sub2')") or die (mysqli_error($sss));
	}
	if($sumsub<1){
	$gm=0;
	$gd=1;
	$sumsub1 =$sumsub*(-1)*$gd;
	$sumsub2=0;
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`sum_gd`) 
        VALUES('$year','$monthinsert','$sumsub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`sum_gm`) 
        VALUES('$year','$monthinsert','$sumsub2')") or die (mysqli_error($sss));

	}
	else if($sumsub>1){
	$gm=1;
	$gd=0;
	$sumsub2 =$sumsub*(1)*$gm;
	$sumsub1=0;
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`sum_gd`) 
        VALUES('$year','$monthinsert','$sumsub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`sum_gm`) 
        VALUES('$year','$monthinsert','$sumsub2')") or die (mysqli_error($sss));
	}
	else if($sumsub==0){
	$gm=1;
	$gd=0;
	$sumsub2 =0;
	$sumsub1=0;
	$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,`sum_gd`) 
        VALUES('$year','$monthinsert','$sumsub1')") or die (mysqli_error($sss)); 
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,`sum_gm`) 
        VALUES('$year','$monthinsert','$sumsub2')") or die (mysqli_error($sss));
	}
	echo'
<table width="100%" border="1" cellpadding="0" cellspacing="0">
      
      <tr>
          <td colspan="2" dir="RTL">الباقي حتى نهاية الشهر الجاري</td>
            <td colspan="2" dir="RTL">الجملة</td>
              <td colspan="2" dir="RTL">عمليات الشهر الجاري</td>
      
       <td colspan="2" dir="RTL">المتأخرات حتى نهاية الشهر السابق</td>
     <td rowspan="2" dir="RTL" width="123">بيان أنواع الحسابات</td>
      
      </tr>
      <tr>
        <td dir="RTL" width="20">منه</td>
        <td dir="RTL" width="86">له</td>
        <td dir="RTL" width="53">منه</td>
        <td dir="RTL" width="50">له</td>
        <td dir="RTL" width="43">منه</td>
        <td dir="RTL" width="65">له</td>
        <td dir="RTL" width="91">منه</td>
        <td dir="RTL" width="246">له</td>
      </tr>
      <tr>
        
        <td dir="RTL" width="20">ريال</td>
        <td dir="RTL" width="86">ريال</td>
        <td dir="RTL" width="53">ريال</td>
        <td dir="RTL" width="50">ريال</td>
        <td dir="RTL" width="43">ريال</td>
        <td dir="RTL" width="65">ريال</td>
        <td dir="RTL" width="91">ريال</td>
        <td dir="RTL" width="246">ريال</td>
        <td dir="RTL" width="123">الحسابات    الرئيسية</td>
      </tr>
      <tr>
        
        <td dir="RTL" width="86">'.$rowlatergm['resources_gm'].' </td>
        <td dir="RTL" width="20">'.$rowlatergd['resources_gd'].' </td>
        
        <td dir="RTL" width="53">'.$rowgm['sum(`resources_gm`)'].' </td>
        <td dir="RTL" width="50">'.$resourses_gd.'</td>
        <td dir="RTL" width="43">'.$resources.'</td>
        <td dir="RTL" width="65">'.$resourcesgd.'</td>
        <td dir="RTL" width="91">'.$resourcessub2.'</td>
        <td dir="RTL" width="246">'.$resourcessub1.'</td>
        <td dir="RTL" width="123">الموارد</td>
      </tr>
      <tr>
       
         <td dir="RTL" width="86">'.$rowlatergm['uses_gm'].' </td>
        <td dir="RTL" width="20">'.$rowlatergd['uses_gd'].' </td>
       
        <td dir="RTL" width="53">'.$uses_gm.'</td>
        <td dir="RTL" width="50">'.$rowgd['sum(`uses_gd`)'].'</td>
        <td dir="RTL" width="43">'.$used.'</td>
        <td dir="RTL" width="65">'.$used_gds.'</td>
        <td dir="RTL" width="91">'.$usedsub2.'</td>
        <td dir="RTL" width="246">'.$usedsub1.'</td>
         <td dir="RTL" width="123">الاستخدامات</td>
      </tr>
      <tr>
       
        <td dir="RTL" width="86">'.$rowlatergm['bank_resources_gm'].' </td>
        <td dir="RTL" width="20">'.$rowlatergd['bank_uses_gd'].' </td>
        
        <td dir="RTL" width="53">'.$rowgm['sum(`bank_uses_gm`)'].'</td>
        <td dir="RTL" width="50">'.$rowgd['sum(`bank_uses_gd`)'].'</td>
        <td dir="RTL" width="43">'.$used_bank.'</td>
        <td dir="RTL" width="65">'.$used_bank_gd.'</td>
        <td dir="RTL" width="91">'.$used_bank_sub2.'</td>
        <td dir="RTL" width="246">'.$used_bank_sub1.'</td>
         <td dir="RTL" width="123">حساب    البنك موارد</td>
      </tr>
      <tr>
        
        
          <td dir="RTL" width="86">'.$rowlatergm['bank_uses_gm'].' </td>
        <td dir="RTL" width="20">'.$rowlatergd['bank_resources_gd'].'</td>
      
        <td dir="RTL" width="53">'.$rowgm['sum(`bank_resources_gm`)'].'</td>
        <td dir="RTL" width="50">'.$rowgd['sum(`bank_resources_gd`)'].'</td>
        <td dir="RTL" width="43">'.$resources_bank.'</td>
        <td dir="RTL" width="65">'.$resources_bank_gd.'</td>
        <td dir="RTL" width="91">resources_bank_sub2</td>
        <td dir="RTL" width="246">'.$resources_bank_sub1.'</td>
        <td dir="RTL" width="123">حساب    البنك استخدامات</td>
      </tr>
      <tr>
         <td dir="RTL" width="20">'.$summaingd.'</td>
       
        <td dir="RTL" width="53">'.$sumgm.'</td>
        <td dir="RTL" width="50">'.$sum.'</td>
        <td dir="RTL" width="43">'.$sumjmlh.'</td>
        <td dir="RTL" width="65">'.$sumjmlhgd.'</td>
        <td dir="RTL" width="91">'.$sumsub2.'</td>
        <td dir="RTL" width="246">'.$sumsub1.'</td>
          <td dir="RTL" width="123">جملة    الحسابات الرئيسية</td> <td dir="RTL" width="86">'.$summain.'</td>
     
      </tr>
    </table>';?>