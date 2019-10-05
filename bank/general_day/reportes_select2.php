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
 $sqlstatment='SELECT  `year` , `month` , `monetary_gm` , `advance_c_ac_gm` , `advance_temp_gm` , `advance_on_sal_gm` , `depand_document_gm` , `change_mounteray_gm` , `amonet_paide_beforehand_gm`  , `c_ac_gm` , `bank_c_ac_gm` , `resources_gm` , `uses_gm` , `bank_uses_gm` , `danin_malih_gm` , `madinin_malih_gm` , `bank_resources_gm` , `amount_under_ts_gm` , `resources_deserving_gm`  , `debt_deserving_gm` , `checks_coming_collection_gm`  , `checks_coming_delayed_gm`  , `resources_deserving_ts_gm`  , `checks_under_collection_gm`  , `checks_delayed_gm` , `dept_deserving_ts_gm`  , `num_coll`
FROM later_gm WHERE`year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
	
$querylater = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergm = mysqli_fetch_array($querylater); 

$summain=$rowlatergm['monetary_gm'] +$rowlatergm['advance_c_ac_gm']+$rowlatergm['depand_document_gm']+$rowlatergm['advance_on_sal_gm']+$rowlatergm['amonet_paide_beforehand_gm']+$rowlatergm['change_mounteray_gm']+$rowlatergm['bank_c_ac_gm']+$rowlatergm['advance_temp_gm']+$rowlatergm['madinin_malih_gm'];	
	
	
		
//ccurent_monthe_gm	
	 $sqlstatment="SELECT  sum(`monetary_gm`), sum(`advance_c_ac_gm`),sum(`depand_document_gm`),sum(`advance_on_sal_gm`),sum(`amonet_paide_beforehand_gm`),sum(`change_mounteray_gm`),sum(`bank_c_ac_gm`),sum(`advance_temp_gm`),sum(`madinin_malih_gm`) FROM `public_gm`";
$query = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss));
$rowgm = mysqli_fetch_array($query); 

$uses_gm=$rowgm['sum(`monetary_gm`)']+$rowgm['sum(`advance_c_ac_gm`)']+$rowgm['sum(`depand_document_gm`)']+$rowgm['sum(`advance_on_sal_gm`)']+$rowgm['sum(`amonet_paide_beforehand_gm`)'];

$sumgm=$rowgm['sum(`change_mounteray_gm`)'] +$uses_gm+$rowgm['sum(`advance_temp_gm`)']+$rowgm['sum(`bank_c_ac_gm`)']+$rowgm['sum(`madinin_malih_gm`)'];

//jomlah

$monetary_gm=$rowlatergm['monetary_gm']+$rowgm['sum(`monetary_gm`)'];
$advance_c_ac_gm=$rowlatergm['advance_c_ac_gm'] +$rowgm['sum(`advance_c_ac_gm`)'];
$depand_document_gm=$rowlatergm['depand_document_gm']+$rowgm['sum(`depand_document_gm`)'];
$advance_on_sal_gm=$rowlatergm['advance_on_sal_gm']+$rowgm['sum(`advance_on_sal_gm`)'];
$amonet_paide_beforehand_gm=$rowlatergm['amonet_paide_beforehand_gm']+$rowgm['sum(`amonet_paide_beforehand_gm`)'];
$change_mounteray_gm=$rowlatergm['change_mounteray_gm']+$rowgm['sum(`change_mounteray_gm`)'];
$advance_temp_gm=$rowlatergm['advance_temp_gm']+$rowgm['sum(`advance_temp_gm`)'];
$bank_c_ac_gm=$rowlatergm['bank_c_ac_gm']+$rowgm['sum(`bank_c_ac_gm`)'];
$madinin_malih_gm=$rowlatergm['madinin_malih_gm']+$rowgm['sum(`madinin_malih_gm`)'];

$sumjmlh=$summain+$sumgm;





	//later_monthe_gd
$sqlstatment='SELECT `year`, `month`, `monetary_gd`, `advance_c_ac_gd`, `advance_temp_gd`, `advance_on_sal_gd`, `depand_document_gd`, `change_mounteray_gd`, `amonet_paide_beforehand_gd`, `c_ac_gd`, `bank_c_ac_gd`, `uses_gd`, `resources_gd`, `bank_uses_gd`, `danin_malih_gd`, `madinin_malih_gd`, `bank_resources_gd`, `amount_under_ts_gd`, `resources_deserving_gd`, `debt_deserving_gd`, `checks_coming_collection_gd`, `checks_coming_delayed_gd`, `resources_deserving_ts_gd`, `checks_under_collection_gd`, `checks_delayed_gd`, `dept_deserving_ts_gd`, `num_coll` FROM `later_gd` WHERE `year`="'.$year.'" And `month`="'.$month.'"';
	echo $year.$month;
$querylatergd = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$rowlatergd = mysqli_fetch_array($querylatergd); 
$summaingd=$rowlatergd['monetary_gd'] +$rowlatergd['advance_c_ac_gd']+$rowlatergd['depand_document_gd']+$rowlatergd['advance_on_sal_gd']+$rowlatergd['amonet_paide_beforehand_gd']+$rowlatergd['change_mounteray_gd']+$rowlatergd['bank_c_ac_gd']+$rowlatergd['advance_temp_gd']+$rowlatergd['madinin_malih_gd'];

//ccurent_monthe_gd
$sqlstatment1="SELECT  sum(`monetary_gd`), sum(`advance_c_ac_gd`),sum(`depand_document_gd`),sum(`advance_on_sal_gd`),sum(`amonet_paide_beforehand_gd`),sum(`change_mounteray_gd`),sum(`advance_temp_gd`),sum(`bank_c_ac_gd`),sum(`madinin_malih_gd`) FROM `public_gd`";
$query1 = mysqli_query($sss,$sqlstatment1) or die (mysqli_error($sss));
$rowgd = mysqli_fetch_array($query1);
$resourses_gd=$rowgd['sum(`monetary_gd`)']+$rowgd['sum(`advance_c_ac_gd`)']+$rowgd['sum(`depand_document_gd`)']+$rowgd['sum(`advance_on_sal_gd`)']+$rowgd['sum(`amonet_paide_beforehand_gd`)']+$rowgd['sum(`madinin_malih_gd`)'];
$sum=$resourses_gd+$rowgd['sum(`change_mounteray_gd`)']+$rowgd['sum(`advance_temp_gd`)']+$rowgd['sum(`bank_c_ac_gd`)'];


//jomlah_gd
$monetary_gd=$rowlatergd['monetary_gd']+$rowgd['sum(`monetary_gd`)'];
$advance_c_ac_gd=$rowlatergd['advance_c_ac_gd'] +$rowgd['sum(`advance_c_ac_gd`)'];
$depand_document_gd=$rowlatergd['depand_document_gd']+$rowgd['sum(`depand_document_gd`)'];
$advance_on_sal_gd=$rowlatergd['advance_on_sal_gd']+$rowgd['sum(`advance_on_sal_gd`)'];
$amonet_paide_beforehand_gd=$rowlatergd['amonet_paide_beforehand_gd']+$rowgd['sum(`amonet_paide_beforehand_gd`)'];
$change_mounteray_gd=$rowlatergd['change_mounteray_gd']+$rowgd['sum(`change_mounteray_gd`)'];
$advance_temp_gd=$rowlatergd['advance_temp_gd']+$rowgd['sum(`advance_temp_gd`)'];
$bank_c_ac_gd=$rowlatergd['bank_c_ac_gd']+$rowgd['sum(`bank_c_ac_gd`)'];
$madinin_malih_gd=$rowlatergd['madinin_malih_gd']+$rowgd['sum(`madinin_malih_gd`)'];

$sumjmlhgd=$summaingd+$sum;



$monetary=$monetary_gm-$monetary_gd;
$advance_c_ac=$advance_c_ac_gm-$advance_c_ac_gd;
$depand_document=$depand_document_gm-$depand_document_gd;
$advance_on_sal=$advance_on_sal_gm-$advance_on_sal_gd;
$amonet_paide_beforehand=$amonet_paide_beforehand_gm-$amonet_paide_beforehand_gd;
$change_mounteray=$change_mounteray_gm-$change_mounteray_gd;
$advance_temp=$advance_temp_gm-$advance_temp_gd;
$bank_c_ac=$bank_c_ac_gm-$bank_c_ac_gd;
$madinin_malih=$madinin_malih_gm-$madinin_malih_gd;
$sumsub=$sumjmlh-$sumjmlhgd;


if($madinin_malih<1){
	$gm=0;
	$gd=1;
	$madinin_malih1 =$madinin_malih*(-1)*$gd;
	$madinin_malih2 =0;

	}
	else if($madinin_malih>1){
	$gm=1;
	$gd=0;
	$madinin_malih2 =$madinin_malih*(1)*$gm;
	$madinin_malih1=0;

		}
	
	else if($madinin_malih==0){
	$gm=1;
	$gd=0;
	$madinin_malih2=0;
	$madinin_malih1=0;
 
		}
if($monetary<1){
	$gm=0;
	$gd=1;
	$monetary1 =$monetary*(-1)*$gd;
	$monetary2 =0;
}
	else if($monetary>1){
	$gm=1;
	$gd=0;
	$monetary2 =$monetary*(1)*$gm;
	$monetary1=0;
		}
	
	else if($monetary==0){
	$gm=1;
	$gd=0;
	$monetary2=0;
	$monetary1=0;

	}
	if($advance_c_ac<1){
	$gm=0;
	$gd=1;
	$advance_c_ac1 =$advance_c_ac*(-1)*$gd;
	$advance_c_ac2=0;
	}
	else if($advance_c_ac>1){
	$gm=1;
	$gd=0;
	$advance_c_ac2 =$advance_c_ac*(1)*$gm;
	$advance_c_ac1=0;

	}
	else if($advance_c_ac==0){
	$gm=1;
	$gd=0;
	$advance_c_ac2 =0;
	$advance_c_ac1=0;

	}
	
	if($depand_document<1){
	$gm=0;
	$gd=1;
	$depand_document1=$depand_document*(-1);
	$depand_document2=0;

	}
	else if($depand_document>1){
	$gm=1;
	$gd=0;
	$depand_document2=$depand_document*(1)*$gm;
	$depand_document1=0;
	}
	
	else if($depand_document==0){
	$gm=1;
	$gd=0;
	$depand_document2=0;
	$depand_document1=0;
	}
	
		if($advance_on_sal<1){
	$gm=0;
	$gd=1;
	$advance_on_sal1 =$advance_on_sal*(-1)*$gd;
	$advance_on_sal2=0;
		}
	else if($advance_on_sal>1){
	$gm=1;
	$gd=0;
	$advance_on_sal2 =$advance_on_sal*(1)*$gm;
	$advance_on_sal1=0;
		}
	
	else if($advance_on_sal==0){
	$gm=1;
	$gd=0;
	$advance_on_sal2=0;
	$advance_on_sal1=0;
	
		}
	
	

		if($amonet_paide_beforehand<1){
	$gm=0;
	$gd=1;
	$amonet_paide_beforehand_gd1 =$amonet_paide_beforehand*(-1)*$gd;
	$amonet_paide_beforehand_gd2=0;
		}
	
	else if($amonet_paide_beforehand>1){
	$gm=1;
	$gd=0;
	$amonet_paide_beforehand_gd2 =$amonet_paide_beforehand*(1)*$gm;
	$amonet_paide_beforehand_gd1=0;

	}
	
	else if($amonet_paide_beforehand==0){
	$gm=1;
	$gd=0;
	$amonet_paide_beforehand_gd2=0;
	$amonet_paide_beforehand_gd1=0;


	}
	

		if($change_mounteray<1){
	$gm=0;
	$gd=1;
	$change_mounteray1 =$change_mounteray*(-1)*$gd;
	$change_mounteray2=0;

	}
	else if($change_mounteray>1){
	$gm=1;
	$gd=0;
	$change_mountera2 =$change_mounteray*(1)*$gm;
	$change_mounteray1=0;

	}
	
	else if($change_mounteray==0){
	$gm=1;
	$gd=0;
	$change_mountera2 =0;
	$change_mounteray1=0;
}
		
		
		
		
		if($advance_temp<1){
	$gm=0;
	$gd=1;
	$advance_temp1 =$advance_temp*(-1)*$gd;
	$advance_temp2=0;

	}
	else if($advance_temp>1){
	$gm=1;
	$gd=0;
	$advance_temp2 =$advance_temp*(1)*$gm;
	$advance_temp1=0;

	}
	
	else if($advance_temp==0){
	$gm=1;
	$gd=0;
	$advance_temp2 =0;
	$advance_temp1=0;

	}


		if($bank_c_ac<1){
	$gm=0;
	$gd=1;
	$bank_c_ac1 =$bank_c_ac*(-1)*$gd;
	$bank_c_ac2=0;

	}
	else if($bank_c_ac>1){
	$gm=1;
	$gd=0;
	$bank_c_ac2 =$bank_c_ac*(1)*$gm;
	$bank_c_ac1=0;
	}
	
	else if($bank_c_ac==0){
	$gm=1;
	$gd=0;
	$bank_c_ac2 =0;
	$bank_c_ac1=0;

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
	
$query = mysqli_query($sss, "INSERT INTO  `later_gd`   (`year` , `month`,monetary_gd,`advance_c_ac_gd`,depand_document_gd,`advance_on_sal_gd`,amonet_paide_beforehand_gd,change_mounteray_gd,advance_temp_gd,bank_c_ac_gd,madinin_malih_gd,`sum_gd`) 
        VALUES('$year','$monthinsert','$monetary1','$advance_c_ac1','$depand_document1','$advance_on_sal1','$amonet_paide_beforehand_gd1','$change_mounteray1','$advance_temp1','$bank_c_ac1','$madinin_malih1','$sumsub1')") or die (mysqli_error($sss)); 
		
		$query = mysqli_query($sss, "INSERT INTO  `later_gm`   (`year` , `month`,monetary_gm,`advance_c_ac_gm`,depand_document_gm,`advance_on_sal_gm`,amonet_paide_beforehand_gm,change_mounteray_gm,advance_temp_gm,bank_c_ac_gm,madinin_malih_gm,`sum_gm`) 
        VALUES('$year','$monthinsert','$monetary2','$advance_c_ac2','$depand_document2','$advance_on_sal2','$amonet_paide_beforehand_gd2','$change_mounteray2','$advance_temp2','$bank_c_ac2','$madinin_malih2','$sumsub2')") or die (mysqli_error($sss)); 
		
		
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
       <td dir="rtl" width="157">الحسابات    المساعدة المدينة</td>
     
    </tr>
    <tr>
       <td dir="rtl" width="89">'.$bank_c_ac1.'</td>
      <td dir="rtl" width="72">'.$bank_c_ac2.'</td>
      <td dir="rtl" width="82">'.$bank_c_ac_gd.'</td>
      <td dir="rtl" width="63">'.$bank_c_ac_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`bank_c_ac_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`bank_c_ac_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['bank_c_ac_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['bank_c_ac_gm'].'</td>
      <td dir="rtl" width="157">حساب    البنك حسابات جارية</td>
     
    </tr>
    <tr>
       <td dir="rtl" width="89">'.$monetary1.'</td>
      <td dir="rtl" width="72">'.$monetary2.'</td>
      <td dir="rtl" width="82">'.$monetary_gd.'</td>
      <td dir="rtl" width="63">'.$monetary_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`monetary_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`monetary_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['monetary_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['monetary_gm'].'</td>
      <td dir="rtl" width="157">حساب    النقدية</td>
      
    </tr>
    <tr>
      <td dir="rtl" width="89">'.$advance_temp1.'</td>
      <td dir="rtl" width="72">'.$advance_temp2.'</td>
      <td dir="rtl" width="82">'.$advance_temp_gd.'</td>
      <td dir="rtl" width="63">'.$advance_temp_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`advance_temp_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`advance_temp_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['advance_temp_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['advance_temp_gm'].'</td>

        <td dir="rtl" width="157">حساب    السلف المؤقتة</td>
    
    </tr>
    <tr>
     
     <td dir="rtl" width="89">'.$advance_c_ac1.'</td>
      <td dir="rtl" width="72">'.$advance_c_ac2.'</td>
      <td dir="rtl" width="82">'.$advance_c_ac_gd.'</td>
      <td dir="rtl" width="63">'.$advance_c_ac_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`advance_c_ac_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`advance_c_ac_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['advance_c_ac_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['advance_c_ac_gm'].'</td>
       <td dir="rtl" width="157">حساب    سلف الحسابات الجارية</td>
    </tr>
    <tr>
           <td dir="rtl" width="89">'.$advance_on_sal1.'</td>
      <td dir="rtl" width="72">'.$advance_on_sal2.'</td>
      <td dir="rtl" width="82">'.$advance_on_sal_gd.'</td>
      <td dir="rtl" width="63">'.$advance_on_sal_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`advance_on_sal_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`advance_on_sal_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['advance_on_sal_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['advance_on_sal_gm'].'</td>
        <td dir="rtl" width="157">حساب    السلف على الأجور</td>
    
    </tr>
    <tr>
     
           <td dir="rtl" width="89">'.$depand_document1.'</td>
      <td dir="rtl" width="72">'.$depand_document2.'</td>
      <td dir="rtl" width="82">'.$depand_document_gd.'</td>
      <td dir="rtl" width="63">'.$depand_document_gm.'</td>
      <td dir="rtl" width="66">'.$rowgd['sum(`depand_document_gd`)'].'</td>
      <td dir="rtl" width="91">'.$rowgm['sum(`depand_document_gm`)'].'</td>
      <td dir="rtl" width="91">'.$rowlatergd['depand_document_gd'].'</td>
      <td dir="rtl" width="86">'.$rowlatergm['depand_document_gm'].'</td>       <td dir="rtl" width="157">حساب    الاعتمادات المستندية</td>
    </tr>
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
</body>';?>