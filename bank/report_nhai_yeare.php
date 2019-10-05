<?php


include_once("conection.php");                                                 
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q =$_POST['q'];



//echo $q;
$sqlCommand ="SELECT form.form_no, `bine`,form.day, form.month, form.year,`check_no`,
 `check_date`,`check_type`,
`account`,`custmer_name`  FROM `form`,`check1` WHERE form.form_no=check1.form_no 
 AND form.year='$q' ";
  $query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 

echo'<table width="100%" cellspacing="0" cellpadding="0" border="2">
 
    <tr  bgcolor="#56A973">
     <td colspan="2" rowspan="2" align="center" bgcolor="#CCCCCC" dir="RTL"><font size="4">الرصيد</font></td>

            
      <td colspan="5" align="center" bgcolor="#CCCCCC" dir="RTL"><font size="5"><strong>الجانب    الدائن</strong></font></td>
      <td colspan="4" align="center" bgcolor="#CCCCCC" dir="RTL"><font size="5"> <strong>الجانب المدين</strong> </font></td>
          
<td width="106" rowspan="3" align="center" bgcolor="#CCCCCC" dir="RTL"><font size="4">البيان</font></td>
 <td width="95" rowspan="3" align="center" bgcolor="#CCCCCC"  dir="RTL"><font size="4">التاريخ</font> </td>
<td colspan="2" align="center" bgcolor="#CCCCCC" dir="RTL"><font size="5"><strong>رقم اليومية العامة</strong> </font></td>

  </tr>
    <tr bgcolor="#56A973">
     <td align="center" colspan="2" bgcolor="#CCCCCC" dir="RTL"><font size="4">المبلغ</font> </td>
    
    <td align="center" width="107" rowspan="2" bgcolor="#CCCCCC" dir="RTL"><font size="4">إسم    المستفيد </font></td>
      <td align="center" colspan="2" bgcolor="#CCCCCC" dir="RTL"><font size="4"> رقم الشيك    وتأريخه </font></td>
     <td  align="center" colspan="2" bgcolor="#CCCCCC" dir="RTL"><font size="4">المبلغ </font></td>
     
          
      
      <td align="center" colspan="2" bgcolor="#CCCCCC" dir="RTL"><font size="4">رقم اشعار    التوريد وتأريخه</font></td>
      <td align="center" width="68" rowspan="2" bgcolor="#CCCCCC" dir="RTL"><font size="4">تسويات </font></td>

      <td align="center" width="78" rowspan="2"bgcolor="#CCCCCC" dir="RTL"><font size="4">استمارات</font></td>
    
      
  </tr>
    <tr  bgcolor="#56A973">
      
      <td width="16" align="center" bgcolor="#CCCCCC" dir="RTL">ف</td>
      <td width="31" align="center" bgcolor="#CCCCCC" dir="RTL"><font size="4">ريال </font></td>
      <td width="17" align="center" bgcolor="#CCCCCC" dir="RTL">ف</td>
      <td width="73" align="center" bgcolor="#CCCCCC" dir="RTL"><font size="4">ريال</font> </td>
      <td width="81"  align="center" bgcolor="#CCCCCC" dir="RTL"><font size="4">التأريخ</font></td>
      <td width="88"  align="center" bgcolor="#CCCCCC" dir="RTL"><font size="4">الرقم</font> </td>
      <td width="18" bgcolor="#CCCCCC" dir="RTL">ف</td>
      <td width="73" align="center" bgcolor="#CCCCCC" dir="RTL"><font size="4">ريال</font> </td>
      <td width="95" align="center" bgcolor="#CCCCCC" dir="RTL"><font size="4">التأريخ</font></td>

      <td width="84"  align="center" bgcolor="#CCCCCC" dir="RTL"><font size="4">الرقم</font> </td>
  </tr>';
	

	

	$sun1=0;
$sun=0;
$sun2=0;



$sqlCommand1 ="SELECT ts.ts_no, `bine`,ts.day, ts.month,ts.year,`export_no`,
 `export_date`,`account`
  FROM `ts`,`export` WHERE ts.ts_no=export.ts_no
  
  
  AND ts.year='$q'";
$query1 = mysqli_query($myConnection,$sqlCommand1) or die (mysqli_error($myConnection));
 
while ($row= mysqli_fetch_array($query)) { 
$sun=$sun+$row["account"];



echo'
  <tr>
      <td  align="center" dir="LTR">ـــ</td>
      <td  align="center" dir="LTR">ـــ</td>
      <td  align="center" dir="LTR">ـــ</td>
      <td  align="center" dir="LTR">'.$row["account"].'</td>
      <td  align="center" dir="LTR">'.$row["custmer_name"].'</td>
      <td  align="center" dir="LTR">'.$row["check_date"].'</td>
      <td  align="center" dir="LTR">'.$row["check_no"].'</td>
      <td  align="center" dir="LTR">ـــ</td>
      <td  align="center" dir="LTR">ـــ</td>
      <td  align="center" dir="LTR">ـــ</td>
      <td  align="center" dir="LTR">ـــ</td>
      <td  align="center" dir="LTR">'.$row["bine"].'</td>
      <td  align="center" dir="LTR">'.$row["check_date"].'</td>
      <td  align="center" dir="LTR">ـــ</td>
      <td  align="center" dir="LTR">'.$row["form_no"].'</td>
    </tr>
	
  
';




 }


  
while ($row1= mysqli_fetch_array($query1)) { 
$sun1=$sun1+$row1["account"];


echo'
    
	
	 <tr>
      <td align="center" dir="LTR">ـــ</td>
      <td align="center" dir="LTR">ـــ</td>
      <td align="center" dir="LTR">ـــ</td>
      <td align="center" dir="LTR">ـــ</td>
      <td align="center" dir="LTR">ـــ</td>
      <td align="center" dir="LTR">ـــ</td>
      <td align="center" dir="LTR">ـــ</td>
      <td align="center" dir="LTR">ـــ</td>
      <td align="center"  dir="LTR"> '.$row1["account"].'</td>
      <td align="center" dir="LTR">'.$row1["export_date"].'</td>
      <td align="center" dir="LTR"> '.$row1["export_no"].'</td>
      <td align="center" dir="LTR"> '.$row1["bine"].'</td>
      <td align="center" dir="LTR"> '.$row1["export_date"].'</td>
      <td align="center" dir="LTR">'.$row1["ts_no"].'</td>
      <td  align="center" dir="LTR">ـــ</td>
    </tr>
  
';




 }
$sun2=$sun-$sun1;
if($sun2>1){
	$sun2=$sun2*(1);
	}
else if($sun2<1){
	$sun2=$sun2*(-1);
	}
	
	else if($sun2==0){
	$sun2=0;
	}
echo'
       <tr>
      <td  align="center" dir="LTR">ـــ</td>
    <td  align="center" dir="LTR"><font color="#FF0000" size="4" >'.$sun2.'</font></td>
    <td  align="center" dir="LTR">ـــ</td>
    <td  align="center" dir="LTR"><font color="#FF0000" size="4" >'.$sun.'</font></td>
<td  align="center" dir="LTR">ـــ</td>
<td  align="center" dir="LTR">ـــ</td>
<td  align="center" dir="LTR">ـــ</td>
<td  align="center" dir="LTR">ـــ</td>
    <td   align="center" dir="LTR"><font color="#FF0000"  size="4">'.$sun1.'</font></td>
  <td  align="center" dir="LTR">ـــ</td>
  <td  align="center" dir="LTR">ـــ</td>
    <td   align="center" dir="LTR"><font size="4"> اجمالي كلا الجانبين لكشف البنك حساب جاري </font> </td>
    <td  align="center" dir="LTR">ـــ</td>
    <td  align="center" dir="LTR">ـــ</td>
	<td  align="center" dir="LTR">ـــ</td>
    </tr>



	

</table></td>';




?>