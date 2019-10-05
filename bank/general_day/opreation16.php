<img src="opreation16_clip_image002.gif" alt="" width="196" height="74" />
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
 $sumgd=0;
 $sumgdcur=0;
 $sumgm=0;
 $sumgmcur=0;
  $jmlh_gd=0;
 $jamlhacccountgd=0;
 $jamlhacccountcurgd=0;
 $jmlh_gm=0;
 $jamlhaccountgm=0;
 $jamlhaccountcurgm=0;
  $jmlh_gdall=0;
 $jamlhacccountgdall=0;
 $jamlhacccountcurgdall=0;
 $jmlh_gmall=0;
 $jamlhaccountgmall=0;
 $jamlhaccountcurgmall=0;
echo'

<table width="100%" border="2" cellpadding="0" cellspacing="0">
      
     <tr>
      <td colspan="7" rowspan="2" dir="RTL" align="center">صــفحـــــة    الــــعمـليـــــات </td>
    </tr>
    <tr> </tr>
    <tr>
      <td colspan="3" dir="RTL" width="610">الجانب المدين (منه)</td>
      <td rowspan="2" dir="RTL" width="469">بيان أنواع الحسابات</td>
      <td colspan="3" dir="RTL" width="634">الجانب الدائن (لـــه)</td>
    </tr>
    <tr>
      <td dir="LTR" width="610">الجملة</td>
      <td dir="LTR" width="210">(الاشهر السابقة/المدة    السابقة)</td>
      <td dir="LTR" width="220">الشهرالجاري    /المدة الجارية </td>
      <td dir="LTR" width="634">الشهرالجاري    /المدة الجارية </td>
      <td dir="LTR" width="229">(الاشهر السابقة/المدة    السابقة  )</td>
      <td dir="LTR" width="180">الجملة</td>
    </tr>
     ';
	  
	//later_monthe_gm
	
	
 $sqlstatment='SELECT `type_acoount`, `name_type` FROM `type` WHERE   `type_acoount`="'.$i.'" ';
	
$querylater = mysqli_query($sss,$sqlstatment) or die (mysqli_error($sss)); 
$row1=mysqli_fetch_array($querylater);
$typename=$row1['name_type'];
echo'

<tr>
    
      <td dir="RTL"  align="center" colspan="9" style="background-color:#CCC"width="123">'.$typename.'</td>
  </tr>
    ';

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

$sqlstatment3='SELECT `year`, `month`, `term`, `type_account`, `accounts`, sum(`values`) FROM `later` WHERE `year`="'.$year.'" And `month`<="'.$monthinsert.'" AND `type_account`="'.$i.'" AND`accounts`="'.$num_account.'" AND `term`=2 ';
	
$querylatersumgm = mysqli_query($sss,$sqlstatment3) or die (mysqli_error($sss)); 
$row3=mysqli_fetch_array($querylatersumgm);
$sumlagd=$row3['sum(`values`)'];
$jamlhacccountgd=$jamlhacccountgd+$sumlagd;

$sqlstatment5='SELECT `num_ts`, `num_s`, `year`, `month`, `day`, `data`, `term`, `type_account`, `accounts`, `resources`, `uses`, sum(`val`), `num_coll` FROM `public` WHERE  `year`="'.$year.'" And `month`="'.$month.'"  AND `type_account`="'.$i.'" AND`accounts` ="'.$num_account.'" AND `term`=2 ';
	
$querycursumgm = mysqli_query($sss,$sqlstatment5) or die (mysqli_error($sss)); 
$row5=mysqli_fetch_array($querycursumgm);
$sumgdcur=$row5['sum(`val`)'];

$jamlhacccountcurgd=$jamlhacccountcurgd+$sumgdcur;

if($sumgdcur==""||$sumgdcur==0){$sumgdcur=0;}

$jmlh=$sumgdcur+$sumlagd;
$jmlh_gd=$jmlh_gd+$jmlh;
echo'




<tr>
      <td dir="RTL" >'.$jmlh.'</td>
        <td dir="RTL">'.$sumlagd.'</td>
      
        <td dir="RTL" >'.$sumgdcur.'</td>
      <td dir="RTL" >'.$namaccount.'</td>
       
    ';



$sqlstatment4='SELECT `year`, `month`, `term`, `type_account`, `accounts`, sum(`values`) FROM `later` WHERE `year`="'.$year.'" And `month`<="'.$monthinsert.'" AND `type_account`="'.$i.'" AND`accounts`="'.$num_account.'" AND  `term`=1 ';
	
$querylatersumgd = mysqli_query($sss,$sqlstatment4) or die (mysqli_error($sss)); 
$row4=mysqli_fetch_array($querylatersumgd);
$sumlagm=$row4['sum(`values`)'];
$jamlhaccountgm=$jamlhaccountgm+$sumlagm;

if($sumlagd==""||$sumlagd==0){$sumlagd=0;}



$sqlstatment6='SELECT  `year`, `month`, `term`, `type_account`, `accounts`, sum(`val`) FROM `public` WHERE  `year`="'.$year.'" And `month`="'.$month.'"  AND `type_account`="'.$i.'" AND`accounts` ="'.$num_account.'" AND `term`=1';
	
$querycurrsumgd = mysqli_query($sss,$sqlstatment6) or die (mysqli_error($sss)); 
$row6=mysqli_fetch_array($querycurrsumgd);
$sumgmcur=$row6['sum(`val`)'];
if($sumgmcur==""||$sumgmcur==0){$sumgmcur=0;}

$jamlhaccountcurgm=$jamlhaccountcurgm+$sumgmcur;

$jmlh=$sumgmcur+$sumlagm;
$jmlh_gm=$jmlh_gm+$jmlh;
echo'
 <td dir="RTL">'.$sumgmcur.'</td>
        <td dir="RTL" >'.$sumlagm.' </td>
        <td dir="RTL" >'.$jmlh.'</td>//
    </tr>';



	
	$query = mysqli_query($sss, "INSERT INTO `later`(`year`, `month`, `term`, `type_account`, `accounts`, `values`) 
VALUES('$year','$monthinsert','1','$i','$num_account','$sumlagm')") or die (mysqli_error($sss)); 
$query = mysqli_query($sss, "INSERT INTO `later`(`year`, `month`, `term`, `type_account`, `accounts`, `values`) 
        VALUES('$year','$monthinsert','2','$i','$num_account','$sumlagd')") or die (mysqli_error($sss)); 


}
$i++;
echo' 
   <tr>
       <td dir="RTL">'.$jmlh_gd.'</td>
        <td dir="RTL" >'.$jamlhacccountgd.'</td>
        <td dir="RTL">'.$jamlhacccountcurgd.'</td>
  <td dir="RTL" style="background-color:#2A5FFF">جملة الحساب</td>
      <td dir="RTL">'.$jamlhaccountcurgm.'</td>
           <td dir="RTL" >'.$jamlhaccountgm.'</td> 
     <td dir="RTL" >'.$jmlh_gm.' </td>
    </tr>
  
    <tr>
        
          
        
   
       
       
      
           </tr>';
     
 

 $jmlh_gdall=$jmlh_gd+$jmlh_gdall;
 $jamlhacccountgdall= $jamlhacccountgdall+ $jamlhacccountgd;
 $jamlhacccountcurgdall=$jamlhacccountcurgdall+$jamlhacccountcurgd;
 $jmlh_gmall=$jmlh_gmall+$jmlh_gm;
 $jamlhaccountgmall=$jamlhaccountgmall+$jamlhaccountgm;
 $jamlhaccountcurgmall=$jamlhaccountcurgmall+$jamlhaccountcurgm;
 $jmlh_gd=0;
 $jamlhacccountgd=0;
 $jamlhacccountcurgd=0;
 $jmlh_gm=0;
 $jamlhaccountgm=0;
 $jamlhaccountcurgm=0;
echo'

      <tr>
         <td dir="RTL"">'.$jmlh_gdall.'</td>
        <td dir="RTL">'.$jamlhacccountgdall.'</td>
       
    
          <td dir="RTL">'.$jamlhacccountcurgdall.'</td>
		        <td dir="RTL" style="background-color:#CCC">الإجمـالــي العــــام</td>
        <td dir="RTL">'.$jamlhaccountcurgmall.'</td>
      <td dir="RTL">'.$jamlhaccountgmall.'</td>
         <td dir="RTL">'.$jmlh_gmall.' </td>
      </tr>


    </table>';
    ?>