<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
echo'  <form action="insert_paided.php"  name="a" method="post" enctype="multipart/form-data" onsubmit="return validate_form()"><table width="300px" border="1" >

   <tr  valign="top">
    <td width="10%" > المــبلغ</td>
  <td width="12%" >البــــيــــان</td>
    <td width="8%">السنه</td>
	  <td width="7%">الشهر</td>
	    <td width="8%">اليوم</td>
	 <td width="5%" style="width:10%">رقــم التـســـويه</td>
  </tr>
   <tr  valign="top">
   <td style="width:10%"><input name="amount" type="text"  /></td>
    <td><input name="data" type="text" /></td>
    <td style="width:8%"><input name="year" type="text"  /></td>
	<td style="width:8%"><input name="month" type="text"  /></td>
	<td style="width:8%"><input name="day" type="text"  /></td>
    <td style="width:10%"><input name="num_form" type="text"  /></td>
  </tr>
  <tr  align="center"  valign="top">
   <td align="center" colspan="3"> <select name="" onchange="getaccount2(this.value);"  style="font-size:14px;"  class="TabbedPanelsTabHover"  >
      <option id="gd">الــى حــســاب</option>
	     <option value="23">حـسـاب  السـلف المؤقته</option>
         <option value="26">حـسـاب  الأعتمادات المستندية</option>
           <option value="27">حـسـاب التحويلات النقديه</option>
             <option value="28">حـسـاب المبالغ المدفوعة مقدما</option>
                   <option value="25">حساب السلف على الأجور</option>
                         <option value="24">حساب سلف الحسابات الجارية</option>
	 
    </select></td>
	<td align="center" colspan="3"> <select name="" onchange="getaccount1(this.value);"  style="font-size:14px;"  class="TabbedPanelsTabHover"  >
   <option  id="gm">مــن حــســاب</option>
     <option value="31">حـسـاب الحـسـابات الجارية</option>
	

    
    </select></td></tr>
<input name="" type="submit"  onclick="sarf_insert()"  size="15" value="تخزيــــن" />
	 <input type="hidden" name="name_ac_gm" id="gmss" value=""/>
<input type="hidden" name="name_ac_gd" id="gdss" value=""/>
<input type="hidden" name="resources" id="resources" value=""/>
<input type="hidden" name="termgm" id="termgm" value=""/>
<input type="hidden" name="termgd" id="termgd" value=""/>
<input type="hidden" name="uses" id="uses" value=""/> 
    
</table></form>

';

 ?>
</head>

<body>
</body>
</html>