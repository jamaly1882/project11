<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php
echo'

<form id="form1" name="form1" method="post" action="select_term_help_m.php">
 <table width="700" border="1" >
 <tr  align="center"  valign="top">
   <td colspan=""> 
    <label> <input name="todate" type="text" size="25" /> <font size="+1"> الى تاريخ  </font>
  </label></td>
  <td colspan=""> 
   <label> <input name="fromdate" type="text" size="25" /> <font size="+1">من تاريخ  </font></label></td></tr>
  <tr  align="center" style="background-color:#9CF;"  valign="top">
   <td colspan="2"> 
  <table width="100%" align="right">
  <tr><td>
  <table width="100%" align="right">
    <tr>
      <td  align="right"><label><font size="+1">حـسـاب  السـلف المؤقته
        <input type="radio" name="RadioGroup1" value="advance_temp" id="RadioGroup1_0" />
        </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">حـسـاب  الأعتمادات المستندية
        <input type="radio" name="RadioGroup1" value="depand_document" id="RadioGroup1_1" />
        </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">حـسـاب المبالغ المدفوعة مقدما
        <input type="radio" name="RadioGroup1" value="amount_paid_beforehand" id="RadioGroup1_2" />
        </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">حـسـاب  البنـــك حـسـابات الجارية
        <input type="radio" name="RadioGroup1" value="bank_c_ac" id="RadioGroup1_3" />
        </font></label></td>
    </tr></table></td>
	<td>
  <table width="100%" align="right">
    <tr>
      <td align="right"><label><font size="+1">حـسـاب التحويلات النقديه
        <input type="radio" name="RadioGroup1" value="change_mounetary" id="RadioGroup1_4" />
        </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">حساب السلف على الأجور
        <input type="radio" name="RadioGroup1" value="advance_on_sal" id="RadioGroup1_5" />
       </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">حساب سلف الحسابات الجارية
        <input type="radio" name="RadioGroup1" value="advance_c_ac" id="RadioGroup1_6" />
        </font></label></td>
    </tr>
    <tr>
      <td  align="right"><label><font size="+1">حـسـاب  النـقدية
        <input type="radio" name="RadioGroup1" value="monetary" id="RadioGroup1_7" />
       </font></label></td>
    </tr>
	</table></td></tr>
  </table>


</td>
	</tr>
	<tr> <td colspan="2" style="background-color:#0CF;" align="middle"> <font size="+1"> <input name=""  type="submit" style=" font-size:18px;" onclick="term_help_m_select()"  size="15" value="عـــرض" />
		<input name=""  type="submit" style=" font-size:18px" onclick=""  size="15" value="طــباعة" />
	</td></tr>
	  <input id="from" name="from" style="visibility:hidden"  type="text" />
<input id="to" name="to" style="visibility:hidden" type="text" />
   <input id="gmb" name="gm" style="visibility:hidden" value="collecation_cash_gm"    type="text" />
<input id="gdb" name="gd" style="visibility:hidden" value="collection_cash_gd"  type="text" />
<input type="hidden" name="term_ganbe" id="term_ganbe" value="" />  
   
</table></form> 
';

 ?>
</head>

<body>

</body>
</html>