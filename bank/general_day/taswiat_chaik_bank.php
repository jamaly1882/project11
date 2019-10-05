<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
echo' <form action="insert.php"  name="a" method="post" enctype="multipart/form-data" onsubmit="return validate_form()"><table width="700" border="1" >

  <tr  valign="top">
    <td style="width:850px"> المــبلغ</td>
  <td style="width:850px">البــــيــــان</td>
    <td style="width:100px">السنه</td>
	  <td style="width:100px">الشهر</td>
	    <td style="width:100px">اليوم</td>
	 <td style="width:150px">رقــم التـســـويه</td>
  </tr>
   <tr  valign="top">
   <td style="width:20%"><input name="amount" type="text" size="25" /></td>
    <td style="width:50%"><input name="data" type="text" size="45" /></td>
    <td style="width:10%"><input name="year" type="text" size="25" /></td>
	<td style="width:10%"><input name="month" type="text" size="25" /></td>
	<td style="width:10%"><input name="day" type="text" size="25" /></td>
    <td style="width:20%"><input name="num_form" type="text" size="25" /></td>
  </tr>
  <tr  align="center"  valign="top">
   <td colspan="2"> <select name="" onchange="getaccount2(this.value);"  style="font-size:18px;"  class="TabbedPanelsTabHover"  >
      <option id="gd">الــى حــســاب</option>
      <option value="31">حساب الحسابات الجارية</option>
	  <option value="53">حساب المستحقات والمقدمات المدينه  </option>
    
	  <option value="52">حساب الموارد المحصلة مقدما</option>
	  <option value="61">حساب الديون المستحقة للحكومة</option>
	   <option value="65">حساب الشيكات الواردة المؤجلة</option>
	    <option value="63">حساب الشيكات الواردة للتحصيل</option>
		 <option value="71">مراقــبة المتحصلات المنح</option>
      
	 
                    
                         
    </select></td>
	<td colspan="2"> <select name="" onchange="getaccount1(this.value);"  style="font-size:18px;"  class="TabbedPanelsTabHover"  >
   <option id="gm" >مــن حــســاب</option>
    <option value="22">حساب البنك حسابات جارية</option>
	<option value="43">حساب الموارد المستحقة </option>
   
     <option value="42">حساب تسويةالمواردالمحصلةمقدما</option>
	  <option value="62">حساب تسوية مطلوبات الحكومة</option>
	   <option value="66">حساب الشيكات المؤجلة</option>
	    <option value="64">حساب الشيكات تحـــت للتحصيل</option>
		 <option value="72">حســـاب المنح</option>
    </select></td></tr>
	  <input name="" type="submit"  onclick="storg_sarf()"  size="15" value="تخزيــــن" />

	 <input type="hidden" name="name_ac_gm" id="gmss" value=""/>
<input type="hidden" name="name_ac_gd" id="gdss" value=""/>
<input type="hidden" name="resources" id="resources" value=""/>
<input type="hidden" name="termgm" id="termgm" value=""/>
<input type="hidden" name="termgd" id="termgd" value=""/>
<input type="hidden" name="uses" id="uses" value=""/> </table></form>
';

 ?>
</head>

<body>
</body>
</html>