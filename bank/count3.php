

<?php
 echo 

'<table   width="540" dir="rtl" align="center"   border="1" id="table2" >
<tr>

	 <td  bgcolor="#9CF"  >
	<table  border="1"  cellpadding="0" cellspacing="0" >

	<tr>
	<td colspan="3";  align="center" valign="bottom" > رقم الشيك</td>
	</tr>
	<tr>
	<td colspan="1"; valign="bottom" > الرقم</td>
	<td colspan="1";  valign="bottom"> التاريخ</td>
	
	</tr>
	
	<tr >
	 <td  colspan="1" ><input type="text"  name="q"    size="10"  id="text50"  onchange="ins_checkno(this.value)" value="" dir="rtl"/></td>
	  <td colspan="1" ><input type="text"  name="p1"  size="10"  id="text51"     /></td>
	 </tr>
	
	 
	 
	
	</table>
	
	
	</td>
	 <td id="c"  bgcolor="#9CF"  valign="bottom">
	<table  border="1"  cellpadding="0" cellspacing="0"  >

	<tr>
	<td align="center" colspan="1" width="40";  >نوع الشيك </td>
	</tr>
	<tr>
	 <td colspan="1" ><input type="text"  name="p2" size="10"  id="text52"    onchange="check_type(this.value)" value="" dir="rtl"/></td>
	</tr>
	
		
	</table>
	</td>
	 
  <td id="c"   bgcolor="#9CF"  valign="bottom">
	<table  border="1"  cellpadding="0" cellspacing="0" >

	<tr>
	<td align="center" colspan="1" width="40"; valign="bottom"> اسم المستفيد </td>
	</tr>
	<tr>
	 <td colspan="1" ><input type="text"  name="p3" size="10" id="text53"   onchange="custom_name(this.value)" value="" dir="rtl" /></td>
	</tr>

	
	
	</table>
	
	
	</td>
	  <td id="c"   bgcolor="#9CF" valign="bottom" >
	<table  border="1"  cellpadding="0" cellspacing="0" >

	<tr>
	<td align="center" colspan="1" width="40"; valign="bottom"> المبلغ </td>
	</tr>
	<tr>
	 <td colspan="1" ><input type="text"  name="p4" size="10"  id="text54"    onchange="count_dine(this.value)" value=""  dir="rtl"/></td>
	</tr>
	
	
	</table>
	
	
	</td>
	  <td id="c"   bgcolor="#9CF" valign="bottom" >
	<table  border="1"  cellpadding="0" cellspacing="0" >

	<tr>
	<td align="center" colspan="1" width="40"; valign="bottom"> رقم الاستماره </td>
	</tr>
	<tr>
	 <td colspan="1" ><input type="text" size="10" name="p5"   id="text55"  onchange="ins_form22 (this.value)" value=""  dir="rtl"/></td>
	</tr>
	
	</table>
	
	
	</td>
	
	 
	</tr>
	</table>
	    
<table width="581" align="center" style="border-top-color:"#9CF"  id="table2">
  <tr>
  
 
    <td align="center"  bgcolor="#9CF"  >
	<input  type="submit" value="اضافة شيك"  name="storge" size="10000" align="middle" onclick=" insert_check()" dir="rtl"/></td>
  </tr>
  
</table>
      


';
?>
