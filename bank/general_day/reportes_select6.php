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
 $sqlstatment='SELECT  `year` , `month` , `resources_deserving_gm`  , `debt_deserving_gm` , `checks_coming_collection_gm`  , `checks_coming_delayed_gm`  , `resources_deserving_ts_gm`  , `checks_under_collection_gm`  , `checks_delayed_gm` , `dept_deserving_ts_gm`  , `num_coll`
FROM later_gm WHERE`year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
	
$querylater = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergm = mysqli_fetch_array($querylater); 

$summain=$rowlatergm['resources_deserving_gm'] +$rowlatergm['debt_deserving_gm']+$rowlatergm['checks_coming_collection_gm']+$rowlatergm['checks_coming_delayed_gm']+$rowlatergm['resources_deserving_ts_gm']+$rowlatergm['checks_under_collection_gm']+$rowlatergm['checks_delayed_gm']+$rowlatergm['dept_deserving_ts_gm'];	
	
	
		
//ccurent_monthe_gm	
	 $sqlstatment="SELECT  sum(`resources_deserving_gm`), sum(`debt_deserving_gm`),sum(`checks_coming_collection_gm`),sum(`checks_coming_delayed_gm`),sum(`resources_deserving_ts_gm`),sum(`checks_under_collection_gm`),sum(`checks_delayed_gm`),sum(`dept_deserving_ts_gm`) FROM `public_gm`";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$rowgm = mysqli_fetch_array($query); 
$sumgm=$rowgm['sum(`checks_under_collection_gm`)'] +$rowgm['sum(`resources_deserving_gm`)']+$rowgm['sum(`debt_deserving_gm`)']+$rowgm['sum(`checks_coming_collection_gm`)']+$rowgm['sum(`checks_coming_delayed_gm`)']+$rowgm['sum(`resources_deserving_ts_gm`)']+$rowgm['sum(`checks_delayed_gm`)']+$rowgm['sum(`dept_deserving_ts_gm`)'];

//jomlah

$resources_deserving_gm=$rowlatergm['resources_deserving_gm']+$rowgm['sum(`resources_deserving_gm`)'];
$debt_deserving_gm=$rowlatergm['debt_deserving_gm'] +$rowgm['sum(`debt_deserving_gm`)'];
$checks_coming_collection_gm=$rowlatergm['checks_coming_collection_gm']+$rowgm['sum(`checks_coming_collection_gm`)'];
$checks_coming_delayed_gm=$rowlatergm['checks_coming_delayed_gm']+$rowgm['sum(`checks_coming_delayed_gm`)'];
$resources_deserving_ts_gm=$rowlatergm['resources_deserving_ts_gm']+$rowgm['sum(`resources_deserving_ts_gm`)'];
$checks_under_collection_gm=$rowlatergm['checks_under_collection_gm']+$rowgm['sum(`checks_under_collection_gm`)'];
$checks_delayed_gm=$rowlatergm['checks_delayed_gm']+$rowgm['sum(`checks_delayed_gm`)'];
$dept_deserving_ts_gm=$rowlatergm['dept_deserving_ts_gm']+$rowgm['sum(`dept_deserving_ts_gm`)'];

$sumjmlh=$summain+$sumgm;





	//later_monthe_gd
$sqlstatment='SELECT `year`, `month`, `resources_deserving_gd`, `debt_deserving_gd`, `checks_coming_collection_gd`, `checks_coming_delayed_gd`, `resources_deserving_ts_gd`, `checks_under_collection_gd`, `checks_delayed_gd`, `dept_deserving_ts_gd`, `num_coll` FROM `later_gd` WHERE `year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
$querylatergd = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergd = mysqli_fetch_array($querylatergd); 
$summaingd=$rowlatergd['resources_deserving_gd'] +$rowlatergd['debt_deserving_gd']+$rowlatergd['checks_coming_collection_gd']+$rowlatergd['checks_coming_delayed_gd']+$rowlatergd['resources_deserving_ts_gd']+$rowlatergd['checks_under_collection_gd']+$rowlatergd['checks_delayed_gd']+$rowlatergd['dept_deserving_ts_gd'];

//ccurent_monthe_gd
$sqlstatment1="SELECT  sum(`resources_deserving_gd`), sum(`debt_deserving_gd`),sum(`checks_coming_collection_gd`),sum(`checks_coming_delayed_gd`),sum(`resources_deserving_ts_gd`),sum(`checks_under_collection_gd`),sum(`checks_delayed_gd`),sum(`dept_deserving_ts_gd`) FROM `public_gd`";
$query1 = mysqli_query($sss,$sqlstatment1) or die (mysqli_error($sss));
$rowgd = mysqli_fetch_array($query1); 
$resourses_gd=$rowgd['sum(`resources_deserving_gd`)']+$rowgd['sum(`debt_deserving_gd`)']+$rowgd['sum(`checks_coming_collection_gd`)']+$rowgd['sum(`checks_coming_delayed_gd`)']+$rowgd['sum(`resources_deserving_ts_gd`)']+$rowgd['sum(`checks_under_collection_gd`)'];
$sum=$resourses_gd+$rowgd['sum(`checks_delayed_gd`)']+$rowgd['sum(`dept_deserving_ts_gd`)'];


//jomlah_gd
$resources_deserving_gd=$rowlatergd['resources_deserving_gd']+$rowgd['sum(`resources_deserving_gd`)'];
$debt_deserving_gd=$rowlatergd['debt_deserving_gd'] +$rowgd['sum(`debt_deserving_gd`)'];
$checks_coming_collection_gd=$rowlatergd['checks_coming_collection_gd']+$rowgd['sum(`checks_coming_collection_gd`)'];
$checks_coming_delayed_gd=$rowlatergd['checks_coming_delayed_gd']+$rowgd['sum(`checks_coming_delayed_gd`)'];
$resources_deserving_ts_gd=$rowlatergd['resources_deserving_ts_gd']+$rowgd['sum(`resources_deserving_ts_gd`)'];
$checks_under_collection_gd=$rowlatergd['checks_under_collection_gd']+$rowgd['sum(`checks_under_collection_gd`)'];
$checks_delayed_gd=$rowlatergd['checks_delayed_gd']+$rowgd['sum(`checks_delayed_gd`)'];
$dept_deserving_ts_gd=$rowlatergd['dept_deserving_ts_gd']+$rowgd['sum(`dept_deserving_ts_gd`)'];


$sumjmlhgd=$summaingd+$sum;



$resources_deserving=$resources_deserving_gm-$resources_deserving_gd;
$debt_deserving=$debt_deserving_gm-$debt_deserving_gd;
$checks_coming_collection=$checks_coming_collection_gm-$checks_coming_collection_gd;
$checks_coming_delayed=$checks_coming_delayed_gm-$checks_coming_delayed_gd;
$resources_deserving_ts=$resources_deserving_ts_gm-$resources_deserving_ts_gd;
$checks_under_collection=$checks_under_collection_gm-$checks_under_collection_gd;
$checks_delayed=$checks_delayed_gm-$checks_delayed_gd;
$dept_deserving_ts=$dept_deserving_ts_gm-$dept_deserving_ts_gd;
$sumsub=$sumjmlh-$sumjmlhgd;


if($resources_deserving<1){
	$gm=0;
	$gd=1;
	$resources_deserving1 =$resources_deserving*(-1)*$gd;
	$resources_deserving2 =0;

	}
	else if($resources_deserving>1){
	$gm=1;
	$gd=0;
	$resources_deserving2 =$resources_deserving*(1)*$gm;
	$resources_deserving1=0;

		}
	
	else if($resources_deserving==0){
	$gm=1;
	$gd=0;
	$resources_deserving2=0;
	$resources_deserving1=0;
 
		}
	

if($debt_deserving<1){
	$gm=0;
	$gd=1;
	$debt_deserving1 =$debt_deserving*(-1)*$gd;
	$debt_deserving2 =0;
}
	else if($debt_deserving>1){
	$gm=1;
	$gd=0;
	$debt_deserving2 =$debt_deserving*(1)*$gm;
	$debt_deserving1=0;
		}
	
	else if($debt_deserving==0){
	$gm=1;
	$gd=0;
	$debt_deserving2=0;
	$debt_deserving1=0;

	}
	
	

	if($checks_coming_collection<1){
	$gm=0;
	$gd=1;
	$checks_coming_collection1 =$checks_coming_collection*(-1)*$gd;
	$checks_coming_collection2=0;
	}
	else if($checks_coming_collection>1){
	$gm=1;
	$gd=0;
	$checks_coming_collection2 =$checks_coming_collection*(1)*$gm;
	$checks_coming_collection1=0;

	}
	else if($checks_coming_collection==0){
	$gm=1;
	$gd=0;
	$checks_coming_collection2 =0;
	$checks_coming_collection1=0;

	}

	if($checks_coming_delayed<1){
	$gm=0;
	$gd=1;
	$checks_coming_delayed1=$checks_coming_delayed*(-1);
	$checks_coming_delayed2=0;

	}
	else if($checks_coming_delayed>1){
	$gm=1;
	$gd=0;
	$checks_coming_delayed2=$checks_coming_delayed*(1)*$gm;
	$checks_coming_delayed1=0;
	}
	
	else if($checks_coming_delayed==0){
	$gm=1;
	$gd=0;
	$checks_coming_delayed2=0;
	$checks_coming_delayed1=0;
	}
	
		if($resources_deserving_ts<1){
	$gm=0;
	$gd=1;
	$resources_deserving_ts1 =$resources_deserving_ts*(-1)*$gd;
	$resources_deserving_ts2=0;
		}
	else if($resources_deserving_ts>1){
	$gm=1;
	$gd=0;
	$resources_deserving_ts2 =$resources_deserving_ts*(1)*$gm;
	$resources_deserving_ts1=0;
		}
	
	else if($resources_deserving_ts==0){
	$gm=1;
	$gd=0;
	$resources_deserving_ts2=0;
	$resources_deserving_ts1=0;
	
		}
	

		if($checks_under_collection<1){
	$gm=0;
	$gd=1;
	$checks_under_collection1 =$checks_under_collection*(-1)*$gd;
	$checks_under_collection2=0;
		}
	
	else if($checks_under_collection>1){
	$gm=1;
	$gd=0;
	$checks_under_collection2 =$checks_under_collection*(1)*$gm;
	$checks_under_collection1=0;

	}
	
	else if($checks_under_collection==0){
	$gm=1;
	$gd=0;
	$checks_under_collection2=0;
	$checks_under_collection1=0;


	}
	
		if($checks_delayed<1){
	$gm=0;
	$gd=1;
	$checks_delayed1 =$checks_delayed*(-1)*$gd;
	$checks_delayed2=0;

	}
	else if($checks_delayed>1){
	$gm=1;
	$gd=0;
	$checks_delayed2 =$checks_delayed*(1)*$gm;
	$checks_delayed1=0;

	}
	
	else if($checks_delayed==0){
	$gm=1;
	$gd=0;
	$checks_delayed2 =0;
	$checks_delayed1=0;
}
		
	
		if($dept_deserving_ts<1){
	$gm=0;
	$gd=1;
	$dept_deserving_ts1 =$dept_deserving_ts*(-1)*$gd;
	$dept_deserving_ts2=0;

	}
	else if($dept_deserving_ts>1){
	$gm=1;
	$gd=0;
	$dept_deserving_ts2 =$dept_deserving_ts*(1)*$gm;
	$dept_deserving_ts1=0;

	}
	
	else if($dept_deserving_ts==0){
	$gm=1;
	$gd=0;
	$dept_deserving_ts2 =0;
	$dept_deserving_ts1=0;

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
	

	
$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month` ,`resources_deserving_gd`, `debt_deserving_gd`, `checks_coming_collection_gd`, `checks_coming_delayed_gd`, `resources_deserving_ts_gd`, `checks_under_collection_gd`, `checks_delayed_gd`, `dept_deserving_ts_gd`,`sum_gd`) 
        VALUES('$year','$monthinsert','$resources_deserving1','$debt_deserving1','$checks_coming_collection1','$checks_coming_delayed1','$resources_deserving_ts1','$checks_under_collection1','$checks_delayed1','$dept_deserving_ts1','$sumsub1')") or die (mysqli_error($sss)); 
		
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`, `resources_deserving_gm`  , `debt_deserving_gm` , `checks_coming_collection_gm`  , `checks_coming_delayed_gm`  , `resources_deserving_ts_gm`  , `checks_under_collection_gm`  , `checks_delayed_gm` , `dept_deserving_ts_gm`,`sum_gm`) 
        VALUES('$year','$monthinsert','$resources_deserving2','$debt_deserving2','$checks_coming_collection2','$checks_coming_delayed2','$resources_deserving_ts2','$checks_under_collection2','$checks_delayed2','$dept_deserving_ts2','$sumsub2')") or die (mysqli_error($sss)); 
echo'
<table width="100%" cellpadding="0" cellspacing="0" border="1">
    <tr>
      
      <td colspan="2" dir="rtl">الباقي حتى نهاية الشهر الجاري</td>
      <td colspan="2" dir="rtl">الجملة</td>
      <td colspan="2" dir="rtl">عمليات الشهر الجاري</td>
      <td colspan="2" dir="rtl"> المتأخرات حتى نهاية الشهر السابق</td>
      <td rowspan="2" dir="rtl" width="157">بيان أنواع الحسابات</td>
    </tr>
    <tr>
      <td dir="rtl" width="89">منه</td>
      <td dir="rtl" width="72">له</td>
      <td dir="rtl" width="82">منه</td>
      <td dir="rtl" width="63">له</td>
      <td dir="rtl" width="66">منه</td>
      <td dir="rtl" width="91">له</td>
      <td dir="rtl" width="91">منه</td>
      <td dir="rtl" width="86">له</td>
    </tr>
    <tr>
      <td dir="rtl" width="89">ريال</td>
      <td dir="rtl" width="72">ريال</td>
      <td dir="rtl" width="82">ريال</td>
      <td dir="rtl" width="63">ريال</td>
      <td dir="rtl" width="66">ريال</td>
      <td dir="rtl" width="91">ريال</td>
      <td dir="rtl" width="91">ريال</td>
      <td dir="rtl" width="86">ريال</td>
       <td dir="rtl" width="157">الحسـابـــات    النظـاميـــة</td>

    </tr>
    <tr>
       <td dir="rtl" width="89">'.$debt_deserving1.'</td>
      <td dir="rtl" width="72">'.$debt_deserving2.'</td>
      <td dir="rtl" width="82">'.$debt_deserving_gd.'</td>
      <td dir="rtl" width="63">'.$debt_deserving_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`debt_deserving_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`debt_deserving_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['debt_deserving_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['debt_deserving_gm'].'</td>
      <td dir="rtl" width="157">حساب    الديون المستحقة للحكومة</td>
     
    </tr>
    <tr>
       <td dir="rtl" width="89">'.$dept_deserving_ts1.'</td>
      <td dir="rtl" width="72">'.$dept_deserving_ts2.'</td>
      <td dir="rtl" width="82">'.$dept_deserving_ts_gd.'</td>
      <td dir="rtl" width="63">'.$dept_deserving_ts_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`dept_deserving_ts_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`dept_deserving_ts_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['dept_deserving_ts_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['dept_deserving_ts_gm'].'</td>
      <td dir="rtl" width="157">حساب    تسوية مطلوبات الحكومة</td>
      
    </tr>
    <tr>
      <td dir="rtl" width="89">'.$checks_coming_collection1.'</td>
      <td dir="rtl" width="72">'.$checks_coming_collection2.'</td>
      <td dir="rtl" width="82">'.$checks_coming_collection_gd.'</td>
      <td dir="rtl" width="63">'.$checks_coming_collection_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`checks_coming_collection_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`checks_coming_collection_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['checks_coming_collection_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['checks_coming_collection_gm'].'</td>

        <td dir="rtl" width="157">حساب    الشيكات الواردة للتحصيل</td>
    
    </tr>
    <tr>
     
     <td dir="rtl" width="89">'.$checks_under_collection1.'</td>
      <td dir="rtl" width="72">'.$checks_under_collection2.'</td>
      <td dir="rtl" width="82">'.$checks_under_collection_gd.'</td>
      <td dir="rtl" width="63">'.$checks_under_collection_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`checks_under_collection_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`checks_under_collection_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['checks_under_collection_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['checks_under_collection_gm'].'</td>
       <td dir="rtl" width="157">حساب    الشيكات تحت التحصيل</td>
    </tr>
    <tr>
           <td dir="rtl" width="89">'.$checks_coming_delayed1.'</td>
      <td dir="rtl" width="72">'.$checks_coming_delayed2.'</td>
      <td dir="rtl" width="82">'.$checks_coming_delayed_gd.'</td>
      <td dir="rtl" width="63">'.$checks_coming_delayed_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`checks_coming_delayed_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`checks_coming_delayed_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['checks_coming_delayed_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['checks_coming_delayed_gm'].'</td>
        <td dir="rtl" width="157">حساب    الشيكات الواردة المؤجلة</td>
    
    </tr>
    <tr>
     
           <td dir="rtl" width="89">'.$checks_delayed1.'</td>
      <td dir="rtl" width="72">'.$checks_delayed2.'</td>
      <td dir="rtl" width="82">'.$checks_delayed_gd.'</td>
      <td dir="rtl" width="63">'.$checks_delayed_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`checks_delayed_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`checks_delayed_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['checks_delayed_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['checks_delayed_gm'].'</td>       <td dir="rtl" width="157">حساب    الشيكات المؤجلة</td>
    </tr>
	
	<tr>
      <td dir="rtl" width="89">'.$sumsub1.'</td>
      <td dir="rtl" width="72">'.$sumsub2.'</td>
      <td dir="rtl" width="82">'.$sumjmlhgd.'</td>
      <td dir="rtl" width="63">'.$sumjmlh.'</td>
      <td dir="rtl" width="66">'.$sum.'</td>
      <td dir="rtl" width="91">'.$sumgm.'</td>
      <td dir="rtl" width="91">'.$summaingd.'</td>
      <td dir="rtl" width="86">'.$summain.'</td>
	  
       <td dir="rtl" width="157">الجمــــلة</td>
     
    </tr>
  </table>
</body>';
    /*
    <tr>
     
           <td dir="rtl" width="89">'.$change_mounteray1.'</td>
      <td dir="rtl" width="72">'.$change_mounteray2.'</td>
      <td dir="rtl" width="82">'.$change_mounteray_gd.'</td>
      <td dir="rtl" width="63">'.$change_mounteray_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`change_mounteray_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`change_mounteray_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['change_mounteray_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['change_mounteray_gm'].'</td>
       <td dir="rtl" width="157">حساب    التحويلات النقدية للخارج</td>
    </tr>
    <tr>
      
        <td dir="rtl" width="89">'.$amonet_paide_beforehand_gd1.'</td>
      <td dir="rtl" width="72">'.$amonet_paide_beforehand_gd2.'</td>
      <td dir="rtl" width="82">'.$amonet_paide_beforehand_gd.'</td>
      <td dir="rtl" width="63">'.$amonet_paide_beforehand_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`amonet_paide_beforehand_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`amonet_paide_beforehand_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['amonet_paide_beforehand_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['amonet_paide_beforehand_gm'].'</td>
      <td dir="rtl" width="157">حساب    المبالغ المدفوعة  مقدما</td>
    </tr>
    <tr>
      <td dir="rtl" width="89">'.$madinin_malih1.'</td>
      <td dir="rtl" width="72">'.$madinin_malih2.'</td>
      <td dir="rtl" width="82">'.$madinin_malih_gd.'</td>
      <td dir="rtl" width="63">'.$madinin_malih_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`madinin_malih_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`madinin_malih_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['madinin_malih_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['madinin_malih_gm'].'</td>     <td dir="rtl" width="157">حساب    المدينين (مالية)</td>
    
    </tr>*/
    ?>