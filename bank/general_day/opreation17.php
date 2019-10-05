
<?php
include_once("dbconnection.php");
//$check0 = $_POST['RadioGroup1'];
$month = $_POST['monthe'];
$year = $_POST['year'];
$i=$_POST['num'];
if($month==1){
$monthinsert=$month;}
if($month==0){
$monthinsert=$month+1;}
else{$monthinsert=$month;}


$bagayallsum=0;
$sumalllatgm=0;
$sumallcurgm=0;
$sumalllatgd=0;
$sumallcurgd=0;
$sumall_sumgm=0;
 $sumall_sumgd=0;
 $sumall_sumgm=0;
 $sumall_sumgd=0;
 
echo'
<table><tr> <img align="right" src="opreation16_clip_image002.gif" alt="" width="20%" />
	</tr></table>
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
        <td dir="RTL" width="123"></td>
      </tr>';
	  
	//later_monthe_gm
	
	
 $sqlstatment='SELECT `type_acoount`, `name_type` FROM `type` WHERE   `type_acoount`="'.$i.'" ';
	
$querylater = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$row1=mysqli_fetch_array($querylater);
$typename=$row1['name_type'];
echo'<tr>
        
        <td dir="RTL" width="20"></td>
        <td dir="RTL" width="86"></td>
        <td dir="RTL" width="53"></td>
        <td dir="RTL" width="50"></td>
        <td dir="RTL" width="43"></td>
        <td dir="RTL" width="65"></td>
        <td dir="RTL" width="91"></td>
        <td dir="RTL" width="246"></td>
        <td dir="RTL" width="123">'.$typename.'</td>
      </tr>';





$bagaysum=0;
$sumlagm=0;
$sumlagd=0;
$sumcugm=0;
$sumcugd=0;
$sumgmcur=0;
$sumgdcur=0;
$sumgm=0;
$sumgd=0;
$sqlstatment1w='SELECT `type_acoount`, `accounts_e`, `name_accounts` FROM `accounts`  WHERE   `type_acoount`="'.$i.'"';
	
$querylaterw = mysqli_query($sss,$sqlstatment1w) or die (mysqli_error($sss)); 
while($row2=mysqli_fetch_array($querylaterw)){
	$num_account=$row2['accounts_e'];
$namaccount=$row2['name_accounts'];

$sqlstatment3='SELECT `year`, `month`, `term`, `type_account`, `accounts`, `values` FROM `later` WHERE `year`="'.$year.'" And `month`="'.$month.'" AND `type_account`="'.$i.'" AND`accounts`="'.$num_account.'" AND `term`=1 ';
	
$querylatersumgm = mysqli_query($sss,$sqlstatment3) or die (mysqli_error($sss)); 
$row3=mysqli_fetch_array($querylatersumgm);
$sumgm=$row3['values'];
$sumlagm=$sumlagm+$sumgm;
$sumalllatgm=$sumalllatgm+$sumlagm;
if($sumgm==""||$sumgm==0){$sumgm=0;}


$sqlstatment4='SELECT `year`, `month`, `term`, `type_account`, `accounts`, `values` FROM `later` WHERE `year`="'.$year.'" And `month`="'.$month.'" AND `type_account`="'.$i.'" AND`accounts`="'.$num_account.'" AND  `term`=2 ';
	
$querylatersumgd = mysqli_query($sss,$sqlstatment4) or die (mysqli_error($sss)); 
$row4=mysqli_fetch_array($querylatersumgd);
$sumgd=$row4['values'];
$sumlagd=$sumlagd+$sumgd;
$sumalllatgd=$sumalllatgd+$sumlagd;
if($sumgd==""||$sumgd==0){$sumgd=0;}

$sqlstatment5='SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, sum(`val`), `num_coll` FROM `public` WHERE  `year`="'.$year.'" And `month`="'.$month.'" AND `type_account`="'.$i.'" AND`accounts` ="'.$num_account.'" AND `term`=1 ';
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
$row5=mysqli_fetch_array($querycursumgm);
$sumgmcur=$row5['sum(`val`)'];
$sumcugm=$sumcugm+$sumgmcur;
$sumallcurgm=$sumallcurgm+$sumcugm;

if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}


$sqlstatment6='SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, sum(`val`), `num_coll` FROM `public` WHERE  `year`="'.$year.'" And `month`="'.$month.'" AND `type_account`="'.$i.'" AND`accounts` ="'.$num_account.'" AND `term`=2';
	
$querycurrsumgd = mysqli_query($sss,$sqlstatment6) or die (mysqli_error($sss)); 
$row6=mysqli_fetch_array($querycurrsumgd);
$sumgdcur=$row6['sum(`val`)'];
$sumcugd=$sumcugd+$sumgdcur;
$sumallcurgd=$sumallcurgd+$sumcugd;
if($sumgdcur==""||$sumgdcur==0){$sumgdcur=0;}

//jamlh
$jamlh_gm=$sumgm+$sumgmcur;
$jamlh_gd=$sumgd+$sumgdcur;
 $sumof_sumgd=$sumcugd+$sumlagd;
 $sumof_sumgm=$sumcugm+$sumlagm;
 $sumall_sumgm=$sumallcurgm+$sumalllatgm;
 $sumall_sumgd=$sumallcurgd+$sumalllatgd;
 
 //bagay
 $bagay=$jamlh_gm-$jamlh_gd;
 $bagaysum=$sumof_sumgm- $sumof_sumgd;
// $bagayallsum=$sumall_sumgm- $sumall_sumgd;
 

if($bagay<1){
	$gm=0;
	$gd=1;
	$bagay1 =$bagay*(-1)*$gd;
	$bagay2 =0;

	}
	else if($bagay>1){
	$gm=1;
	$gd=0;
	$bagay2 =$bagay*(1)*$gm;
	$bagay1=0;

		}
	
	else if($bagay==0){
	$gm=1;
	$gd=0;
	$bagay2=0;
	$bagay1=0;
 
		}
		
			if($bagaysum<1){
	$gm=0;
	$gd=1;
	$bagaysum1 =$bagaysum*(-1)*$gd;
	$bagaysum2=0;
	

	}
		else if($bagaysum>1){
	$gm=1;
	$gd=0;
	$bagaysum2 =$bagaysum*(1)*$gm;
	$bagaysum1=0;

	}
	
	else if($bagaysum==0){
	$gm=1;
	$gd=0;
	$bagaysum2 =0;
	$bagaysum1=0;
	}
	
	$query = mysqli_query($sss, "INSERT INTO `later`(`year`, `month`, `term`, `type_account`, `accounts`, `values`) 
        VALUES('$year','$monthinsert','1','$i','$num_account','$bagaysum2')") or die (mysqli_error($sss)); 
$query = mysqli_query($sss, "INSERT INTO `later`(`year`, `month`, `term`, `type_account`, `accounts`, `values`) 
        VALUES('$year','$monthinsert','2','$i','$num_account','$bagaysum1')") or die (mysqli_error($sss)); 

	
echo'
      <tr>
        
        <td dir="RTL" width="86">'.$sumgm.'&nbsp; </td>
        <td dir="RTL" width="20">'.$sumgd.'&nbsp; </td>
        
        <td dir="RTL" width="53">'.$sumgmcur.'&nbsp; </td>
        <td dir="RTL" width="50">'.$sumgdcur.'&nbsp;</td>
        <td dir="RTL" width="43">'.$jamlh_gm.'&nbsp;</td>
        <td dir="RTL" width="65">'.$jamlh_gd.'&nbsp;</td>
        <td dir="RTL" width="91">'.$bagay2.'&nbsp;</td>
        <td dir="RTL" width="246">'.$bagay1.'&nbsp;</td>
        <td dir="RTL" width="123">'.$namaccount.'&nbsp;</td>
      </tr>';

}

echo'
      <tr>
        
        <td dir="RTL" width="86">'.$sumlagm.'&nbsp; </td>
        <td dir="RTL" width="20">'.$sumlagd.'&nbsp; </td>
        <td dir="RTL" width="53">'.$sumcugm.'&nbsp; </td>
        <td dir="RTL" width="50">'.$sumcugd.'&nbsp;</td>
        <td dir="RTL" width="43">'.$sumof_sumgm.'&nbsp;</td>
        <td dir="RTL" width="65">'.$sumof_sumgd.'&nbsp;</td>
        <td dir="RTL" width="91">'.$bagaysum2.'&nbsp;</td>
        <td dir="RTL" width="246">'.$bagaysum1.'&nbsp;</td>
        <td dir="RTL" width="123" style="background-color:#2A5FFF">جملة الحساب</td>
      </tr>';


 $bagayallsum=$sumall_sumgm- $sumall_sumgd;
 

if($bagayallsum<1){
	$gm=0;
	$gd=1;
	$bagayallsum1 =$bagayallsum*(-1)*$gd;
	$bagayallsum2 =0;

	}
	else if($bagayallsum>1){
	$gm=1;
	$gd=0;
	$bagayallsum2 =$bagayallsum*(1)*$gm;
	$bagayallsum1=0;

		}
	
	else if($bagayallsum==0){
	$gm=1;
	$gd=0;
	$bagayallsum2=0;
	$bagayallsum1=0;
 
	}

echo'
      <tr>
        
        <td dir="RTL" width="86">'.$sumalllatgm.' </td>
        <td dir="RTL" width="20">'.$sumalllatgd.' </td>
        <td dir="RTL" width="53">'.$sumallcurgm.' </td>
        <td dir="RTL" width="50">'.$sumallcurgd.'</td>
        <td dir="RTL" width="43">'.$sumall_sumgm.'</td>
        <td dir="RTL" width="65">'.$sumall_sumgd.'</td>
        <td dir="RTL" width="91">'.$bagayallsum2.'</td>
        <td dir="RTL" width="246">'.$bagayallsum1.'</td>
        <td dir="RTL" width="123">الإجمـالــي العــــام</td>
      </tr>


    </table>';?>