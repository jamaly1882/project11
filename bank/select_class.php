<?php
include_once("conee.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q =$_GET['q'];

//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand = "SELECT student_s.stno, `stname`,`classno`,`deperment`, `qran`,`islmic`,`arbic`,`english`,
`math`,`since`,`group1`,`dgree_type`,subject_s.stno,`physic`,`chimestry`,`biology`,`gegorphy`,`history`,`collo`  FROM `student_s`,`subject_s` WHERE  student_s.stno= subject_s.stno
AND  classno='$q' 
";

$query1= mysqli_query($myConnection,$sqlCommand1) or die (mysqli_error($myConnection)); 
if($q==1 ||$q==2 ||$q==3||$q==4 ||$q==5||$q==6){ 

echo  '

<table width="100%" border="2" dir="rtl" id="select_math" align="center"   >
  <tr>

 <td  bgcolor="#9CF" width="400">رقم الطالب</td>
  <td  bgcolor="#9CF" width="400">الصف</td>
  <td  bgcolor="#9CF" width="400">الاسم</td>
 
     <td width="300"   bgcolor="#9CF"  >نوع الدرجة</td>
   <td width="136"  bgcolor="#9CF">قران</td>
    <td width="136"   bgcolor="#9CF">إسلامية </td>
  <td width="136"  bgcolor="#9CF">عربي</td>

   <td width="262"  bgcolor="#9CF" >رياضيات</td>
   <td width="136"  bgcolor="#9CF">علوم</td>
   <td width="136"  bgcolor="#9CF">اجتماعيات</td>
   
  
  
   </tr>
    
   
	

	';
	$sum1=0;
	$sum2=0;
	$sum3=0;

	$sum5=0;
	$sum6=0;
	$sum7=0;
	$sum8=0;
	$av=0;
	
	
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) {
	$sum1= $sum1+$row["qran"];
	$sum2= $sum2+$row["islmic"];
	$sum3= $sum3+$row["arbic"];
	
	$sum5= $sum5+$row["math"];
	$sum6= $sum6+$row["since"];
	$sum7= $sum7+$row["group1"];
	
	$sum8=$sum1+$sum2+$sum3+$sum5+$sum6+$sum7;
	$av=$sum8/7;
   echo'
  
     
   
   <tr>
    <td>'.$row["s.stno"].'</td>
    <td>'.$row["classno"].'</td>
    <td>'.$row["stname"].'</td>';

	if($row["dgree_type"]==1){
  echo'  <td>محصلة الصف الاول</td>';
   }
  
	else if ($row["dgree_type"]==3){
	  echo'  <td>محصلةالفصل الثاني</td>';}	
  else if ($row["dgree_type"]==4){
	  echo'  <td>اختبار الفصل الثاني</td>';}
	echo'
	
	<td>'.$row["qran"].'</td>
   <td> '.$row["islmic"].'</td>
    <td>'.$row["arbic"].'</td>
	<td>'.$row["english"].'</td>
	<td width="200">'.$row["math"].'</td>
	<td>'.$row["since"].'</td>
	<td>' .$row["group1"].'</td> ';
	  
}
	  
	while ($row1 = mysqli_fetch_array($query1)) { 
	 	
	if ($row1["dgree_type"]==2){
	  echo'  <td>محصلةالفصل الثاني</td>';}
	  echo'
 <td>'.$row1["qran"].'</td>
	</tr>';}
	echo'
	
	
	<td> '.$sum1.'</td>
	<td> '.$sum2.'</td>
	<td> '.$sum3.'</td>

	<td> '.$sum5.'</td>
	
	<td> '.$sum6.'</td>
	
	<td> '.$sum7.'</td> 
	<td> '.$sum1.'</td>
	<td> '.$sum2.'</td>
	<td> '.$sum3.'</td>

	<td> '.$sum5.'</td>
	
	<td> '.$sum6.'</td>
	
	<td> '.$sum7.'</td> 
	</tr>';
	
	 
   echo'	
   
	
	
		

	

	<td  >مجمـــوع الـــمــواد </td>
		<td  >المـــــجــمــــوع> </td>
	<td> '.$sum1.'</td>
	<td> '.$sum2.'</td>
	<td> '.$sum3.'</td>

	<td> '.$sum5.'</td>
	
	<td> '.$sum6.'</td>
	
	<td> '.$sum7.'</td>
		
	</tr>';
	
	
	echo '
	
	<tr>
	<td >  المجموع الكلي</td>
	
	<td colspan="6" align="center"> '.$sum8.'</td>
	<td  align="center"> '.$av.'</td>

	

	
	</tr>';
	
	
echo'
	 </table>';}
	 
	else if($q==7||$q==8 ||$q==9){ 

echo  '

<table width="100%" border="2" dir="rtl" id="select_math" align="center"   >

<tr>
 





  <td  bgcolor="#9CF" width="400">الاسم</td>
     <td width="300"   bgcolor="#9CF"  >نوع الدرجة</td>
   <td width="136"  bgcolor="#9CF">قران</td>
    <td width="136"   bgcolor="#9CF">إسلامية </td>
  <td width="136"  bgcolor="#9CF">عربي</td>
  <td width="138"  bgcolor="#9CF">E </td>
   <td width="262"  bgcolor="#9CF" >رياضيات</td>
   <td width="136"  bgcolor="#9CF">علوم</td>
   <td width="136"  bgcolor="#9CF">اجتماعيات</td>
   
  
  
   </tr>
    
   
	

	';
	$sum1=0;
	$sum2=0;
	$sum3=0;
	$sum4=0;
	$sum5=0;
	$sum6=0;
	$sum7=0;
	$sum8=0;
	$av=0;
	
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) {
	$sum1= $sum1+$row["qran"];
	$sum2= $sum2+$row["islmic"];
	$sum3= $sum3+$row["arbic"];
	$sum4= $sum4+$row["english"];
	$sum5= $sum5+$row["math"];
	$sum6= $sum6+$row["since"];
	$sum7= $sum7+$row["group1"];
	
	$sum8=$sum1+$sum2+$sum3+$sum4+$sum5+$sum6+$sum7;
	$av=$sum8/7;
   echo'
  
     
   
   <tr>
   
    <td>'.$row["stname"].'</td>';

	if($row["dgree_type"]==1){
  echo'  <td>محصلة الصف الاول</td>';
   }
  else if ($row["dgree_type"]==2){
	  echo'  <td>اختبار الفصل الاول</td>';} 
	
	else if ($row["dgree_type"]==3){
	  echo'  <td>محصلةالفصل الثاني</td>';}	
  else if ($row["dgree_type"]==4){
	  echo'  <td>اختبار الفصل الثاني</td>';}
	  	
echo'
	
	<td>'.$row["qran"].'</td>
   <td> '.$row["islmic"].'</td>
    <td>'.$row["arbic"].'</td>
	<td>'.$row["english"].'</td>
	<td width="200">'.$row["math"].'</td>
	<td>'.$row["since"].'</td>
	<td>' .$row["group1"].'</td> ';
	
	 
   echo'	</tr>
   
	';}
	
		
	echo'
	
	<tr>
	<td >مجمـــوع الـــمــواد </td>
		<td  align="center">المجموع </td>
	<td> '.$sum1.'</td>
	<td> '.$sum2.'</td>
	<td> '.$sum3.'</td>
	<td> '.$sum4.'</td>
	<td> '.$sum5.'</td>
	
	<td> '.$sum6.'</td>
	
	<td> '.$sum7.'</td>
		
	</tr>';
	
	
	echo '
	
	<tr>
	<td >  المجموع الكلي</td>
	
	<td colspan="7" align="center"> '.$sum8.'</td>
	<td  align="center"> '.$av.'</td>
	
	

	
	</tr>';
	
	
echo'
	 </table>';
}
else if($q==10){ 

echo  '

<table width="100%" border="2" dir="rtl" id="select_math" align="center"   >
  <tr>


  <td  bgcolor="#9CF" width="400">الاسم</td>
 
     <td width="300"   bgcolor="#9CF"  >نوع الدرجة</td>
   <td width="136"  bgcolor="#9CF">قران</td>
    <td width="136"   bgcolor="#9CF">إسلامية </td>
  <td width="136"  bgcolor="#9CF">عربي</td>
  <td width="138"  bgcolor="#9CF">E </td>
   <td width="262"  bgcolor="#9CF" >رياضيات</td>
   <td width="136"  bgcolor="#9CF">فيزيا</td>
    <td width="136"   bgcolor="#9CF">كيمياء </td>
  <td width="136"  bgcolor="#9CF">احياء</td>
  <td width="138"  bgcolor="#9CF">جغرفياء </td>
   <td width="262"  bgcolor="#9CF" >تاريخ</td>
   <td width="262"  bgcolor="#9CF" >مجتمع</td>
 
   
  
  
   </tr>
    
   
	

	';
	$sum1=0;
	$sum2=0;
	$sum3=0;
	$sum4=0;
	$sum5=0;
	$sum6=0;
	$sum7=0;
	$sum8=0;
	$sum9=0;
	$sum10=0;
	$sum11=0;
	$sum12=0;
	$av=0;
	
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) {
	$sum1= $sum1+$row["qran"];
	$sum2= $sum2+$row["islmic"];
	$sum3= $sum3+$row["arbic"];
	$sum4= $sum4+$row["english"];
	$sum5= $sum5+$row["math"];
	$sum6= $sum6+$row["physic"];
	$sum7= $sum7+$row["chimestry"];
	$sum8= $sum8+$row["biology"];
	$sum9= $sum9+$row["gegorphy"];
	$sum10= $sum10+$row["history"];
	$sum11= $sum11+$row["collo"];
	
	
	$sum12=$sum1+$sum2+$sum3+$sum4+$sum5+$sum6+$sum7+$sum8+$sum9+$sum10+$sum11;
	$av=$sum12/11;
   echo'
  
     
   
   <tr>
   
    <td>'.$row["stname"].'</td>';

	if($row["dgree_type"]==1){
  echo'  <td>محصلة الصف الاول</td>';
   }
  else if ($row["dgree_type"]==2){
	  echo'  <td>اختبار الفصل الاول</td>';} 
	
	else if ($row["dgree_type"]==3){
	  echo'  <td>محصلةالفصل الثاني</td>';}	
  else if ($row["dgree_type"]==4){
	  echo'  <td>اختبار الفصل الثاني</td>';}
	  	
echo'
	
	<td>'.$row["qran"].'</td>
   <td> '.$row["islmic"].'</td>
    <td>'.$row["arbic"].'</td>
	<td>'.$row["english"].'</td>
	<td width="200">'.$row["math"].'</td>
	<td>'.$row["physic"].'</td>
	<td>' .$row["chimestry"].'</td> 
	<td>'.$row["biology"].'</td>
	<td width="200">'.$row["gegorphy"].'</td>
	<td>'.$row["history"].'</td>
	<td>' .$row["collo"].'</td> ';
	
	
	
	 
   echo'	</tr>
   
	';}
	
		
	echo'
	
	<tr>
	<td  >مجمـــوع الـــمــواد </td>
		<td>المـــــجــمــــوع </td>
	<td> '.$sum1.'</td>
	<td> '.$sum2.'</td>
	<td> '.$sum3.'</td>
	<td> '.$sum4.'</td>
	<td> '.$sum5.'</td>
	
	<td> '.$sum6.'</td>
	
	<td> '.$sum7.'</td>
	<td> '.$sum8.'</td>
	<td> '.$sum9.'</td>
	
	<td> '.$sum10.'</td>
	
	<td> '.$sum11.'</td>
		
	</tr>';
	
	
	echo '
	
	<tr>
	<td >  المجموع الكلي</td>
	
	<td colspan="11" align="center"> '.$sum12.'</td>
	<td  align="center"> '.$av.'</td>
	
	

	
	</tr>';
	
	
echo'
	 </table>';
}
else if($q==11 ||$q==12){ 

echo  '

<table width="100%" border="2" dir="rtl" id="select_math" align="center"   >
  <tr>


  <td  bgcolor="#9CF" width="400">الاسم</td>
 
     <td width="300"   bgcolor="#9CF"  >نوع الدرجة</td>
   <td width="136"  bgcolor="#9CF">قران</td>
    <td width="136"   bgcolor="#9CF">إسلامية </td>
  <td width="136"  bgcolor="#9CF">عربي</td>
  <td width="138"  bgcolor="#9CF">E </td>
   <td width="262"  bgcolor="#9CF" >رياضيات</td>
   <td width="136"  bgcolor="#9CF">فيزيا</td>
    <td width="136"   bgcolor="#9CF">كيمياء </td>
  <td width="136"  bgcolor="#9CF">احياء</td>

   
  
  
   </tr>
    
   
	

	';
	$sum1=0;
	$sum2=0;
	$sum3=0;
	$sum4=0;
	$sum5=0;
	$sum6=0;
	$sum7=0;
	$sum8=0;
	$sum9=0;
	
	$av=0;
	
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) {
	$sum1= $sum1+$row["qran"];
	$sum2= $sum2+$row["islmic"];
	$sum3= $sum3+$row["arbic"];
	$sum4= $sum4+$row["english"];
	$sum5= $sum5+$row["math"];
	$sum6= $sum6+$row["physic"];
	$sum7= $sum7+$row["chimestry"];
	$sum8= $sum8+$row["biology"];

	
	
	$sum9=$sum1+$sum2+$sum3+$sum4+$sum5+$sum6+$sum7+$sum8;
	$av=$sum9/8;
   echo'
  
     
   
   <tr>
   
    <td>'.$row["stname"].'</td>';

	if($row["dgree_type"]==1){
  echo'  <td>محصلة الصف الاول</td>';
   }
  else if ($row["dgree_type"]==2){
	  echo'  <td>اختبار الفصل الاول</td>';} 
	
	else if ($row["dgree_type"]==3){
	  echo'  <td>محصلةالفصل الثاني</td>';}	
  else if ($row["dgree_type"]==4){
	  echo'  <td>اختبار الفصل الثاني</td>';}
	  	
echo'
	
	<td>'.$row["qran"].'</td>
   <td> '.$row["islmic"].'</td>
    <td>'.$row["arbic"].'</td>
	<td>'.$row["english"].'</td>
	<td width="200">'.$row["math"].'</td>
	<td>'.$row["physic"].'</td>
	<td>' .$row["chimestry"].'</td> 
	<td>'.$row["biology"].'</td>';

	
	
	
	 
   echo'	</tr>
   
	';}
	
		
	echo'
	
	<tr>
	<td  >مجمـــوع الـــمــواد </td>
		<td  >المـــــجــمــــوع </td>
	<td> '.$sum1.'</td>
	<td> '.$sum2.'</td>
	<td> '.$sum3.'</td>
	<td> '.$sum4.'</td>
	<td> '.$sum5.'</td>
	
	<td> '.$sum6.'</td>
	
	<td> '.$sum7.'</td>
	<td> '.$sum8.'</td>
	
		
	</tr>';
	
	
	echo '
	
	<tr>
	<td >  المجموع الكلي</td>
	
	<td colspan="8" align="center"> '.$sum9.'</td>
	<td  align="center" > '.$av.'</td>
	
	

	
	</tr>';
	
	
echo'
	 </table>';
}

	 

 
   


	//$pagebody = str_replace("<br />", "", $pagebody);

//mysqli_free_result($query); 
?> 
