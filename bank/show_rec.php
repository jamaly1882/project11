<?php
include_once("conee.php");
// You should put an if condition here to check that the posted $pid variable is present first thing, I did not do that
$q =$_GET['q'];

//$q = ereg_replace("[^0-9]", "", $_GET['pid']);
// filter everything but numbers for security
// Query the body section for the proper page
//include_once "file:///D|/scripts/connect_to_mysql.php";
//echo $q;
$sqlCommand = "SELECT student_s.stno, `stname`,`classno`,`deperment`, `m_1`,`dgree_1`,`dgree_2`,`dgree_3`,
`dgree_4`  FROM `student_s`,`dgree` WHERE  student_s.stno= dgree.stno
AND  classno='$q' 
 
";
$sqlCommand1 = "SELECT student_s.stno, `stname`,`classno`,`deperment`, `m_1`,`dgree_1`,`dgree_2`,`dgree_3`,
`dgree_4`  FROM `student_s`,`dgree` WHERE  student_s.stno= dgree.stno
AND  classno='$q'AND  m_1='2' 
 
";
$sqlCommand2 = "SELECT student_s.stno, `stname`,`classno`,`deperment`, `m_1`,`dgree_1`,`dgree_2`,`dgree_3`,
`dgree_4`  FROM `student_s`,`dgree` WHERE  student_s.stno= dgree.stno
AND  classno='$q'AND  m_1='3' 

";
$sqlCommand3 = "SELECT student_s.stno, `stname`,`classno`,`deperment`, `m_1`,`dgree_1`,`dgree_2`,`dgree_3`,
`dgree_4`  FROM `student_s`,`dgree` WHERE  student_s.stno= dgree.stno
AND  classno='$q'AND  m_1='5' 

";
$sqlCommand4 = "SELECT student_s.stno, `stname`,`classno`,`deperment`, `m_1`,`dgree_1`,`dgree_2`,`dgree_3`,
`dgree_4`  FROM `student_s`,`dgree` WHERE  student_s.stno= dgree.stno
AND  classno='$q'AND  m_1='6' 

";
$sqlCommand5 = "SELECT student_s.stno, `stname`,`classno`,`deperment`, `m_1`,`dgree_1`,`dgree_2`,`dgree_3`,
`dgree_4`  FROM `student_s`,`dgree` WHERE  student_s.stno= dgree.stno
AND  classno='$q'AND  m_1='7' 

";
$sqlCommand5 = "SELECT student_s.stno, `stname`,`classno`,`deperment`, `m_1`,`dgree_1`,`dgree_2`,`dgree_3`,
`dgree_4`  FROM `student_s`,`dgree` WHERE  student_s.stno= dgree.stno
AND  classno='$q'AND  m_1='7' 

";




 
if($q==1 ||$q==2 ||$q==3||$q==4 ||$q==5||$q==6){ 

echo  '

<table >
 border="1"  width="80%" dir="rtl">
  <tr>
    <td colspan="2" >الطالب</td>
    <td colspan="5">قران كريم</td>
     <td colspan="5">تربية اسلامية</td>
        <td colspan="5">عربي</td>
		<td colspan="5">E</td>
     <td colspan="5">رياضيات</td>
        <td colspan="5">علوم</td>
     <td colspan="5">اجتماعيات</td>
    
  </tr>
  <tr>
    <td  colspan="1">الرقم</td>
    <td colspan="1" >الاسم</td>
    <td >محصلة نصف العام</td>
    <td >درجة اختبار نصف العام</td>
    <td >محصلة اخر العام</td>
    <td >درجة اختبار اخر العام</td>
    <td >المجموع</td>
    <td >محصلة نصف العام</td>
    <td >درجة اختبار نصف العام</td>
    <td>محصلة اخر العام</td>
    <td >درجة اختبار اخر العام</td>
    <td >المجموع</td>
     <td >محصلة نصف العام</td>
    <td>درجة اختبار نصف العام</td>
    <td>محصلة اخر العام</td>
    <td >درجة اختبار اخر العام</td>
    <td >المجموع</td>
     <td >محصلة نصف العام</td>
    <td colspan="1">درجة اختبار نصف العام</td>
    <td colspan="1">محصلة اخر العام</td>
    <td colspan="1">درجة اختبار اخر العام</td>
    <td colspan="1">المجموع</td>
     <td colspan="1">محصلة نصف العام</td>
    <td colspan="1">درجة اختبار نصف العام</td>
    <td colspan="1">محصلة اخر العام</td>
    <td colspan="1">درجة اختبار اخر العام</td>
    <td colspan="1">المجموع</td>
     <td colspan="1">محصلة نصف العام</td>
    <td colspan="1">درجة اختبار نصف العام</td>
    <td colspan="1">محصلة اخر العام</td>
    <td colspan="1">درجة اختبار اخر العام</td>
    <td colspan="1">المجموع</td>
	
     <td colspan="1">محصلة نصف العام</td>
    <td colspan="1">درجة اختبار نصف العام</td>
    <td colspan="1">محصلة اخر العام</td>
    <td colspan="1">درجة اختبار اخر العام</td>
    <td colspan="1">المجموع</td>
     
  </tr>


	

	';
	$sum1=0;
	$sum2=0;
	$sum3=0;
	$sum4=0;
	
	$sum5=0;
	$sum6=0;
	
	

	
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) {
	$sum1=0;
   $sum1= $sum1+$row["dgree_1"]+$row["dgree_2"]+$row["dgree_3"]+$row["dgree_4"];
   

  echo'<tr>';
  

   echo'
  
    <td >'.$row["stno"].'</td>
    
    <td  >'.$row["stname"].'</td>

	
	<td>'.$row["dgree_1"].'</td>
   <td> '.$row["dgree_2"].'</td>
    <td>'.$row["dgree_3"].'</td>
	<td>'.$row["dgree_4"].'</td>
	

	';
	
	  
}
echo'
	<td>'.$sum1.'</td>
	';
	$query1= mysqli_query($myConnection,$sqlCommand1) or die (mysqli_error($myConnection));
	while ($row1 = mysqli_fetch_array($query1)) {
		$sum2=0;
   $sum2= $sum2+$row1["dgree_1"]+$row1["dgree_2"]+$row1["dgree_3"]+$row1["dgree_4"];

   

	
	echo'
	   
	<td>'.$row1["dgree_1"].'</td>
   <td> '.$row1["dgree_2"].'</td>
    <td>'.$row1["dgree_3"].'</td>
	<td>'.$row1["dgree_4"].'</td>';
	

	  
}
echo'
	<td>'.$sum2.'</td>';
	$query2= mysqli_query($myConnection,$sqlCommand2) or die (mysqli_error($myConnection));
	while ($row2 = mysqli_fetch_array($query2)) {
   $sum3= $sum3+$row2["dgree_1"]+$row2["dgree_2"]+$row2["dgree_3"]+$row2["dgree_4"];
   
	echo'
	
	<td>'.$row2["dgree_1"].'</td>
   <td> '.$row2["dgree_2"].'</td>
    <td>'.$row2["dgree_3"].'</td>
	<td>'.$row2["dgree_4"].'</td>';}
	 echo'
	 <td>  '.$sum3.'  </td>';
	 
	 $query3= mysqli_query($myConnection,$sqlCommand3) or die (mysqli_error($myConnection));
	while ($row3 = mysqli_fetch_array($query3)) {
   $sum4= $sum4+$row3["dgree_1"]+$row3["dgree_2"]+$row3["dgree_3"]+$row3["dgree_4"];
   
	echo'
	
	<td>'.$row3["dgree_1"].'</td>
   <td> '.$row3["dgree_2"].'</td>
    <td>'.$row3["dgree_3"].'</td>
	<td>'.$row3["dgree_4"].'</td>';}
	 echo'
	 <td>  '.$sum4.'  </td>';

	  $query4= mysqli_query($myConnection,$sqlCommand4) or die (mysqli_error($myConnection));
	while ($row4 = mysqli_fetch_array($query4)) {
   $sum5= $sum5+$row4["dgree_1"]+$row4["dgree_2"]+$row4["dgree_3"]+$row4["dgree_4"];
   
	echo'
	
	<td>'.$row4["dgree_1"].'</td>
   <td> '.$row4["dgree_2"].'</td>
    <td>'.$row4["dgree_3"].'</td>
	<td>'.$row4["dgree_4"].'</td>';}
	 echo'
	 <td>  '.$sum5.'  </td>';
	   $query5= mysqli_query($myConnection,$sqlCommand5) or die (mysqli_error($myConnection));
	while ($row5 = mysqli_fetch_array($query5)) {
   $sum6= $sum6+$row5["dgree_1"]+$row5["dgree_2"]+$row5["dgree_3"]+$row5["dgree_4"];
   
	echo'
	
	<td>'.$row5["dgree_1"].'</td>
   <td> '.$row5["dgree_2"].'</td>
    <td>'.$row5["dgree_3"].'</td>
	<td>'.$row5["dgree_4"].'</td>';}
	 echo'
	 <td>  '.$sum6.'  </td>
	 </tr>
	 
	

	 </table>';}

	 
	else if($q==7||$q==8 ||$q==9){ 

echo  '

<table 
 border="1"  width="300%" dir="rtl">
  <tr>
    <td colspan="2"  >الطالب</td>
    <td colspan="6">قران كريم</td>
     <td colspan="6">تربية اسلامية</td>
        <td colspan="6">عربي</td>
		<td colspan="6">E</td>
     <td colspan="6">رياضيات</td>
        <td colspan="6">علوم</td>
     <td colspan="5">اجتماعيات</td>
	  <td colspan="1">المجموع</td>
    
  </tr>
  <tr>
    <td height="80"  colspan="1">الرقم</td>
    <td colspan="1"   width="400" align="center" >الاسم</td>
   

    
 
     
<td >محصلة نصف العام</td>
    <td >درجة اختبار نصف العام</td>
    <td >محصلة اخر العام</td>
    <td >درجة اختبار اخر العام</td>
    <td >المجموع</td>
	 <td colspan="1" >المجموع</td>

	    
    <td >محصلة نصف العام</td>
    <td >درجة اختبار نصف العام</td>
    <td>محصلة اخر العام</td>
    <td >درجة اختبار اخر العام</td>
    <td >المجموع</td>
	   <td colspan="1" >المجموع</td>
  
     <td >محصلة نصف العام</td>
    <td>درجة اختبار نصف العام</td>
    <td>محصلة اخر العام</td>
    <td >درجة اختبار اخر العام</td>
    <td >المجموع</td>
	    <td colspan="1" >المجموع</td>

     <td >محصلة نصف العام</td>
    <td colspan="1">درجة اختبار نصف العام</td>
    <td colspan="1">محصلة اخر العام</td>
    <td colspan="1">درجة اختبار اخر العام</td>
    <td colspan="1">المجموع</td>
	 <td colspan="1" >المجموع</td>

	         <td colspan="1">محصلة نصف العام</td>
    <td colspan="1">درجة اختبار نصف العام</td>
    <td colspan="1">محصلة اخر العام</td>
    <td colspan="1">درجة اختبار اخر العام</td>
    <td colspan="1">المجموع</td>
	    <td colspan="1" >المجموع</td>

     <td colspan="1">محصلة نصف العام</td>
    <td colspan="1">درجة اختبار نصف العام</td>
    <td colspan="1">محصلة اخر العام</td>
    <td colspan="1">درجة اختبار اخر العام</td>
    <td colspan="1" >المجموع</td>
	 <td colspan="1" >المجموع</td>


	
     <td colspan="1">محصلة نصف العام</td>
    <td colspan="1">درجة اختبار نصف العام</td>
    <td colspan="1">محصلة اخر العام</td>
    <td colspan="1">درجة اختبار اخر العام</td>
    <td colspan="1" >المجموع</td>



	 <td colspan="1">المجموع الكلي</td>
     
  </tr>

   
	

	';
	$sum1=0;
	$sum2=0;
	$sum3=0;
	$sum4=0;
	$sum5=0;
	$sum6=0;
	$sum7=0;
	
	$av=0;
	
$query = mysqli_query($myConnection,$sqlCommand) or die (mysqli_error($myConnection)); 
while ($row = mysqli_fetch_array($query)) {
	$sum8=0;


	if($row["m_1"]==1){
		$sum1=0;
		
		$sum1= $sum1+$row["dgree_1"]+$row["dgree_2"]+$row["dgree_3"]+$row["dgree_4"];
	


   echo'
  
     
   
   <tr>
   
  

    <td >'.$row["stno"].'</td>
    
    <td  width="400">'.$row["stname"].'</td>

	
	<td>'.$row["dgree_1"].'</td>
   <td> '.$row["dgree_2"].'</td>
    <td>'.$row["dgree_3"].'</td>
	<td>'.$row["dgree_4"].'</td>
		<td>'.$sum1.'</td>
		';

		

	
		
		}
		else if($row["m_1"]==2){
			

				$sum2=0;
				
		$sum2= $sum2+$row["dgree_1"]+$row["dgree_2"]+$row["dgree_3"]+$row["dgree_4"];
	


   echo'
  
     
   

   
 

	
	<td>'.$row["dgree_1"].'</td>
   <td> '.$row["dgree_2"].'</td>
    <td>'.$row["dgree_3"].'</td>
	<td>'.$row["dgree_4"].'</td>
		<td>'.$sum2.'</td>';


		

		
		
		}
		else if($row["m_1"]==3){
			
				$sum3=0;
				
		$sum3= $sum3+$row["dgree_1"]+$row["dgree_2"]+$row["dgree_3"]+$row["dgree_4"];
	

   echo'
  
     
   

   
 

	
	<td>'.$row["dgree_1"].'</td>
   <td> '.$row["dgree_2"].'</td>
    <td>'.$row["dgree_3"].'</td>
	<td>'.$row["dgree_4"].'</td>
		<td>'.$sum3.'</td>';


	
		
		
		}
		
	
	 
   
   else if($row["m_1"]==4){
	  
				$sum4=0;
				 
		$sum4= $sum4+$row["dgree_1"]+$row["dgree_2"]+$row["dgree_3"]+$row["dgree_4"];
		


   echo'
  
     
  
 

	
	<td>'.$row["dgree_1"].'</td>
   <td> '.$row["dgree_2"].'</td>
    <td>'.$row["dgree_3"].'</td>
	<td>'.$row["dgree_4"].'</td>
		<td>'.$sum4.'</td>';


	
		
		}
		   
   else if($row["m_1"]==5){
	  
				$sum5=0;
				
		$sum5= $sum5+$row["dgree_1"]+$row["dgree_2"]+$row["dgree_3"]+$row["dgree_4"];
	

   echo'
  
     
  
 

	
	<td>'.$row["dgree_1"].'</td>
   <td> '.$row["dgree_2"].'</td>
    <td>'.$row["dgree_3"].'</td>
	<td>'.$row["dgree_4"].'</td>
		<td>'.$sum5.'</td>';

		
		
		
		}
		   
   else if($row["m_1"]==6){
	   
				$sum6=0;
				
		$sum6= $sum6+$row["dgree_1"]+$row["dgree_2"]+$row["dgree_3"]+$row["dgree_4"];
		
	

   echo'
  
     
  
 

	
	<td>'.$row["dgree_1"].'</td>
   <td> '.$row["dgree_2"].'</td>
    <td>'.$row["dgree_3"].'</td>
	<td>'.$row["dgree_4"].'</td>
		<td>'.$sum6.'</td>';


		
		
		

		}
		   
   else if($row["m_1"]==7){
	    
				$sum7=0;
				
		$sum7= $sum7+$row["dgree_1"]+$row["dgree_2"]+$row["dgree_3"]+$row["dgree_4"];
	


   echo'
  
     
  
 

	
	<td>'.$row["dgree_1"].'</td>
   <td> '.$row["dgree_2"].'</td>
    <td>'.$row["dgree_3"].'</td>
	<td>'.$row["dgree_4"].'</td>
		<td>'.$sum7.'</td>';
		


		
		 
		
		}
$sum8= $sum1+$sum2+$sum3+$sum4+$sum5+$sum6+$sum7;	
			
	
echo'<td >'.$sum8.'</td>';

  	
 }
	
echo'</tr>';	
	
	
echo'	

	
	
	

	 </table>';}

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
