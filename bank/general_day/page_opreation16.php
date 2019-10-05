<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php


echo'<table align="center"><tr>
                  <br />
                  <td  align="center">
                  <select name=""   onchange="reportes_select(this.value)" id="type_term" style="font-size:18px;"   class="TabbedPanelsTabHover"  >
     <option >الشهر</option>
     <option value="1">يناير</option>
     <option value="2">قبرير</option>
     <option value="3">مارس</option>
     <option value="4">ابريل</option>
     <option value="5">مايو</option>
     <option value="6">يونيو</option>
     <option value="7">يوليو</option>
     <option value="8">اغسطس</option>
     <option value="9">سيبتمبر</option>
     <option value="10">اكتوبر</option>
     <option value="11">نوفمبر</option>
     <option value="12">ديسمبر</option>
    
    </select> </td></tr></table>

 <table width="700" border="1" id="k"  style="visibility:hidden" >
  <tr  align="center"  valign="top">
   <td colspan="" id="y"  style="visibility:hidden" > 
    <label> <input id="year" name="year" type="text" size="25" /> <font size="+1">السنة   </font>
  </label></td>
</tr>
   <tr  align="center"  style="background-color:#9CF;" valign="top">
   <td colspan="2"> 
  <table width="400" style="background-color:#9CF;" align="right">
    <tr>
      <td  align="right"><label><font size="+1">الحسابات الرئسية
        <input type="radio" name="RadioGroup1" onclick="reporte_show(this.value)" value="main_accounts" id="Check0" />
        </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">الحسابات المساعدة المدينة
        <input type="radio" name="RadioGroup1" onclick="reporte_show(this.value)"  value="help_m_accounts" id="Check1" />
        </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">الحسابات المساعدة الدائنة
        <input type="radio" name="RadioGroup1"  onclick="reporte_show(this.value)" value="help_d_accounts"  id="Check2"  />
        </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">الحسابات الانتقالية المدينة
        <input type="radio" name="RadioGroup1"  onclick="reporte_show(this.value)" value="translation_m_accounts" id="Check3" />
        </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">الحسابات الانتقالية الدائنة
        <input type="radio" name="RadioGroup1" onclick="reporte_show(this.value)" value="translation_d_accounts" id="Check4" />
        </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">الحسابات النظامية
        <input type="radio" name="RadioGroup1" onclick="reporte_show(this.value)" value="system_accounts" id="Check5" />
       </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">الحسابات الرقابية الاحصائية
        <input type="radio" name="RadioGroup1" onclick="reporte_show(this.value)" value="ragabih_accounts" id="Check6" />
        </font></label></td>
    </tr>
	<tr>
      <td align="right"><label><font size="+1">تحديد الكل 
        <input type="radio" name="RadioGroup1" onclick="reporte_show(this.value)" value="all" id="Check7" />
        </font></label></td>
    </tr>
    
	</table></td></tr>
	
	<tr>
	 
	 <td  height="100" colspan="2" style="background-color:#0CF;" id="ww" align="middle"> <font size="+1">
	 <form name="form1" id="show1" style=" height:20px;visibility:hidden;" method="post"  action="opreation16.php">

	  <input name=""   type="submit" style="font-size:18px;" onclick="reporte_select(1)"  size="15" value="1عـــرض" />
		<input name=""  type="submit" style=" font-size:18px" onclick=""  size="15" value="طــباعة" />
		 <input id="monthe1" name="monthe" value=""    type="hidden" />
		 <input   id="num1" name="num" value="" type="hidden" />
 <input id="year1" name="year" value="" type="hidden" />
</form>

<form  name="form1" id="show2" style="  height:20px;visibility:hidden;" method="post"  action="opreation16.php">

	  <input name=""  type="submit" style=" font-size:18px;" onclick="reporte_select(2)"  size="15" value="2عـــرض" />
		<input name=""  type="submit" style=" font-size:18px" onclick=""  size="15" value="طــباعة" />
		 <input id="monthe2" name="monthe" value=""    type="hidden" />
 <input   id="year2" name="year" value="" type="hidden" />
  <input   id="num2" name="num" value="" type="hidden" />
</form>

<form  name="form1" id="show3" style="  height:20px;visibility:hidden;" method="post"  action="opreation16.php">

	  <input name=""  type="submit" style=" font-size:18px;" onclick="reporte_select(3)"  size="15" value="3عـــرض" />
		<input name=""  type="submit" style=" font-size:18px" onclick=""  size="15" value="طــباعة" />
		 <input id="monthe3" name="monthe" value=""    type="hidden" />
 <input id="year3" name="year" value="" type="hidden" />
  <input   id="num3" name="num" value="" type="hidden" />
</form>
<form  name="form1" id="show4" style="  height:20px;visibility:hidden;" method="post"  action="opreation16.php">

	  <input name=""  type="submit" style=" font-size:18px;" onclick="reporte_select(4)"  size="15" value="4عـــرض" />
		<input name=""  type="submit" style=" font-size:18px" onclick=""  size="15" value="طــباعة" />
		 <input id="monthe4" name="monthe" value=""    type="hidden" />
 <input id="year4" name="year" value="" type="hidden" />
  <input   id="num4" name="num" value="" type="hidden" />
</form>
<form  name="form1" id="show5" style="  height:20px;visibility:hidden;" method="post"  action="opreation16.php">

	  <input name=""  type="submit" style=" font-size:18px;" onclick="reporte_select(5)"  size="15" value="5عـــرض" />
		<input name=""  type="submit" style=" font-size:18px" onclick=""  size="15" value="طــباعة" />
		 <input id="monthe5" name="monthe" value=""    type="hidden" />
 <input id="year5" name="year" value="" type="hidden" />
  <input   id="num5" name="num" value="" type="hidden" />
</form>

<form  name="form1" id="show6" style="  height:20px;visibility:hidden;" method="post"  action="opreation16.php">

	  <input name=""  type="submit" style=" font-size:18px;" onclick="reporte_select(6)"  size="15" value="6عـــرض" />
		<input name=""  type="submit" style=" font-size:18px" onclick=""  size="15" value="طــباعة" />
		 <input id="monthe6" name="monthe" value=""    type="hidden" />
 <input id="year6" name="year" value="" type="hidden" />
  <input   id="num6" name="num" value="" type="hidden" />
</form>
<form  name="form1" id="show7" style="  height:20px;visibility:hidden;" method="post"  action="opreation16.php">

	  <input name=""  type="submit" style=" font-size:18px;" onclick="reporte_select(7)"  size="15" value="7عـــرض" />
		<input name=""  type="submit" style=" font-size:18px" onclick=""  size="15" value="طــباعة" />
		 <input id="monthe7" name="monthe" value=""    type="hidden" />
 <input id="year7" name="year" value="" type="hidden" />
  <input   id="num7" name="num" value="" type="hidden" />
</form>
<form  name="form1" id="show8" style="  height:20px;visibility:hidden;" method="post"  action="reportes_select9.php">

	  <input name=""  type="submit" style=" font-size:18px;" onclick="reporte_select(8)"  size="15" value="7عـــرض" />
		<input name=""  type="submit" style=" font-size:18px" onclick=""  size="15" value="طــباعة" />
		 <input id="monthe8" name="monthe" value=""    type="hidden" />
 <input id="year8" name="year" value="" type="hidden" />
  <input   id="num8" name="num" value="" type="hidden" />
</form>

	</td> </tr>
	 <input id="monthe" name="monthe" style="visibility:hidden" value=""    type="text" />
     
</table>

';

 ?>
</head>

<body>

</body>
</html>