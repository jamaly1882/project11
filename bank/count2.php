<?php
 echo 
' 
<table width="492" border="" align="center" dir="rtl"  id="table3"  >
  <tr>
<td    valign="bottom"  style="border:1;" bgcolor="#9CF">
	<table  border="1"  cellpadding="0" cellspacing="0" >

	<tr>
	<td  colspan="1"  align="center"> اليومية العامة </td>
	</tr>
	<tr>
	
	
	

	<td   align="center" colspan="1">رقم الاستمارة  </td>

</tr>
<tr> 
 <td ><input type="text"   name="q" size="10" id="texet100" onchange=" look(this.value)" value=""  dir="rtl" /></td>
</tr>

	
	</table>
	
	 </td>
    
	 <td id="c"  bgcolor="#9CF"  valign="bottom" >
	<table  border="1"  cellpadding="0" cellspacing="0" >

	<tr>
	<td align="center" colspan="1" >البيان </td>
	</tr>
	<tr>
	 <td ><input type="text"   name="p1" size="10"   id="texet41" onchange="form_bine(this.value)"  value="" dir="rtl" /></td>
	</tr>
	</table>
	</td>
	
	 <td id="c"   bgcolor="#9CF" valign="bottom" >
	<table  border="1"  cellpadding="0" cellspacing="0" >

	<tr>
	<td align="center" colspan="1"   > اليوم</td>
	</tr>
	<tr>
	 <td ><input type="text"   name="p2" size="10"   id="texet42" onchange="insday2(this.value)"  value=""  dir="rtl"/></td>
	</tr>
	</table>
	</td>
		

	</td>
	<td id="c"   bgcolor="#9CF" valign="bottom" >
	<table  border="1"  cellpadding="0" cellspacing="0" >

	<tr>
	<td align="center" colspan="1"  > الشهر </td>
	</tr>
	<tr>
	 <td >
	 <input type="hidden" id="ins_madone_month" dir="rtl">
	 
	 <select   onchange="insert_form1(this.value)" dir="rtl" >
	 
	 <option value="1"> الشهر</option>
	<option value="1">شهر يناير</option>
	<option value="2">شهر فبرير</option>
	<option value="3">شهر مارس</option>
	<option value="4">شهر ابريل</option>
	<option value="5">شهر مايو</option>
	<option value="6">شهريونيو</option>
	<option value="7">شهر يوليو</option>
	<option value="8">شهراغسطس</option>
	<option value="9">شهر  سبتمبر</option>
	<option value="10">شهر اكتوبر</option>
	<option value="11">شهر  نوفمبر</option>
 <option value="12">شهر ديسمبر</option>
	</option>
				</select>
	 
	 </td>
	</tr>
	</table>
	</td>
		 
	<td id="c"   bgcolor="#9CF" valign="bottom" >
<table  border="1"  cellpadding="0" cellspacing="0" >
<tr>
<td align="center" colspan="1"   > السنه</td>
</tr>
<tr>
	<td ><input type="text"   name="p4" size="10"   id="texet43"  onchange=" insyear33(this.value)"value=""  dir="rtl"/></td>
	</tr>
	</table>

	</td>
	
	</tr> 
</table>
<table width="492"  align="center" style="border-top-color:"#9CF"  id="table3">
  <tr>
    <td align="center"  bgcolor="#9CF"   >
	<input  type="submit" value="اضافة استمارة"  name="storge" size="10000" align="middle" onclick=" insert_form()" dir="rtl"/></td>
  </tr>
</table>


';
?>
