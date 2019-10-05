<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php
echo'


 <table width="700" border="1" >
  <tr  align="center"  valign="top">
  <td colspan=""> 
   <label> <input name="fromdate" id="form" type="text" size="25" /> <font size="+1">  رقم الاستمارة </font></label></td></tr>
   
   <tr  align="center"  style="background-color:#9CF;" valign="top">
   <td colspan="2"> 
  <table width="200" style="background-color:#9CF;" align="right">
    <tr>
      <td align="right"><label><font size="+1">جانب دائن
        </font><input type="checkbox" name="CheckboxGroup2" value="collec" id="Check0" />
        </font></label></td>
    </tr>
    <tr>
      <td align="right"><label><font size="+1">جانب مدين
        </font><input type="checkbox" name="CheckboxGroup2" value="import" id="Check1" />
        </label></td>
    </tr>
	
  </table>

</td>
	</tr>
	<tr> <td colspan="2" style="background-color:#0CF;" align="middle">
	<div id="returned_form"></div>
	
	 <input name=""  type="submit" style=" font-size:18px;" onclick="resources_select()"  size="15" value="عـــرض" />
		<input name=""  type="submit" style=" font-size:18px" onclick="resources_update1()"  size="15" value="تعديل" />
	</td></tr>
	  <input id="from" name="from" style="visibility:hidden"  type="text" />
<input id="to" name="to" style="visibility:hidden" type="text" />
   <input id="gmb" name="gm" style="visibility:hidden" value="collecation_cash_gm"    type="text" />
<input id="gdb" name="gd" style="visibility:hidden" value="collection_cash_gd"  type="text" />
<input type="hidden" name="term_w" id="term_ws" value="" />  
   
</table>

';

 ?>
</head>

<body>

</body>
</html>