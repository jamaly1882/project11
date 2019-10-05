<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
echo'

 <form action="insert_paided.php"  name="a" method="post" enctype="multipart/form-data" onsubmit="return validate_form()"><table width="700" border="1" >

  <tr  valign="top">
   
  
    
	  
	   
	 
  </tr>
   <tr  valign="top">
    
   <td  align="right" style="width:20%"><input name="amount" type="text" size="25" /></td>
   <td  align="right"><font size="5"> المــبلغ</font></td>
   </tr>
     <tr  valign="top">
	
    <td  align="right" style="width:50%"><input name="data" type="text" size="45" /></td>
	 <td  align="right"><font size="5">البــــيــــان</font></td></tr>
	  <tr  valign="top">
	
    <td  align="right" style="width:10%"><input name="year" type="text" size="25" /></td>
	  <td  align="right"><font size="5">السنه</font></td></tr>
	  <tr  valign="top">
	 
	<td   align="right"style="width:10%"><input name="month" type="text" size="25" /></td>
	 <td  align="right"><font size="5">الشهر</font></td></tr>
	  <tr  valign="top">
	  
	<td  align="right" style="width:10%"><input name="day" type="text" size="25" /></td>
	 <td  align="right"><font size="5">اليوم</font></td></tr>
	  <tr  valign="top">
	 
    <td  align="right" style="width:20%"><input name="num_form" type="text" size="25" /></td>
	 <td  align="right"><font size="5">رقــم الاستمارة  </font></td>
  </tr>
  <tr  align="center"  valign="top">
   <td colspan="1"> <select name="" onchange="getaccount2(this.value);"  style="font-size:18px;"  class="TabbedPanelsTabHover"  >
      <option>الــى حــســاب</option>
	<option value="22">حـسـاب  البـنك حـسـاب جاري</option>
           
     <option value="14">حـسـاب  البـنك  الاستــخدامات</option>
    
    </select></td>
	<td colspan="1"> <select name="" onchange="getaccount1(this.value);"  style="font-size:18px;"  class="TabbedPanelsTabHover"  >
   <option  >مــن حــســاب</option>
   <option value="121">  حـسـاب الاستــخدامات الباب الاول</option>
					 <option value="122">حـسـاب الاستــخدامات الباب الثاني</option>
					 					 <option value="123">حـسـاب الاستــخدامات الباب الثالث</option>

					 <option value="124">حـسـاب الاستــخدامات الباب الربع</option>

					 <option value="125">حـسـاب الاستــخدامات الباب الخامس</option>

      <option value="23">حـسـاب  السـلف المؤقته</option>
	  <option value="24">حـسـاب  السـلف حـسـاب جاري</option>
        <option value="25">حـسـاب  السـلف على الأجور</option>
         <option value="26">حـسـاب  الأعتمادات المستندية</option>
           <option value="27">حـسـاب التحويلات النقديه</option>
             <option value="28">حـسـاب المبالغ المدفوعة مقدما</option>
                    
                         
        </select></td></tr>
		
	<input type="hidden" name="name_ac_gm" id="gmss" value=""/>
<input type="hidden" name="name_ac_gd" id="gdss" value=""/>
<input type="hidden" name="resources" id="resources" value=""/>
<input type="hidden" name="termgm" id="termgm" value=""/>
<input type="hidden" name="termgd" id="termgd" value=""/>
<input type="hidden" name="uses" id="uses" value=""/>    
</table>
<input type="submit" onclick="sarf_insert(2)" size="15" value="تخزين" /> </form>
';

 ?>
</head>

<body>
</body>
</html>