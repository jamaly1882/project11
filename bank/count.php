
<?php  
echo '
	 <table width="300" border="2" dir="rtl" id="table1"  align="center" >
  <tr>
   <td    valign="bottom"  style="border:1;" bgcolor="#9CF">
	<table  border="1"  cellpadding="0" cellspacing="0" >

	<tr>
	<td  colspan="1"  align="center"> اليومية العامة </td>
	</tr>
	<tr>
	
	
	

	<td   align="center" colspan="1">رقم التسوية  </td>

		</tr>
		<tr> 
 <td ><input type="text"   name="q" size="10" id="text30" onchange=" ins_ts1(this.value)" value=""  dir="rtl" /></td>
</tr>

	
	</table>
	
	 </td>
    
  <td id="c" valign="bottom" bgcolor="#9CF">
	<table  border="1"  cellpadding="0" cellspacing="0" >

	<tr>
	<td align="center" colspan="1" width="40" > البيان </td>
	</tr>
	<tr>
	 <td ><input type="text"  name="p1" size="10"  id="text31" onchange=" ts_bine(this.value)" value=""  dir="rtl"/></td>
	</tr>
	</table>
	</td>
	 
  <td id="c" valign="bottom"bgcolor="#9CF">
	<table  border="1"  cellpadding="0" cellspacing="0" >

	<tr>
	<td align="center" colspan="1" width="40" >اليوم </td>
	</tr>
	<tr>
	 <td ><input type="text"   name="p2" size="10"  id="text32" onchange="checkday(this.value)"  dir="rtl"/></td>
	</tr>
	</table>
	</td>
	
  <td id="c" valign="bottom" bgcolor="#9CF">
	<table  border="1"  cellpadding="0" cellspacing="0" >

	
	<tr>
	<td align="center" colspan="1" width="40" > الشهر </td>
	</tr>
	<tr>
	 <td>
	 <input  type="hidden" id="month_insert" dir="rtl"  /> 
	 <select   onchange="insert_ts2(this.value)"dir="rtl"  >
	 
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
	
				</select>
	 
	 </td>
		
		</tr>
	</table>
	</td>
	
	<td id="c" valign="bottom" bgcolor="#9CF">
	<table  border="1"  cellpadding="0" cellspacing="0" >

	
	<tr>
	<td align="center" colspan="1" width="40" >السنه </td>
	
	
	
	
	  
	</tr>
	<tr>

	<td ><input type="text"   name="p4" size="10"  id="text33"   onchange=" insyear22(this.value)"  value=""  dir="rtl"/></td>
	  
	
	 </tr>
	
		
		
	</table>
	</td>
	
	
    <td id="d" valign="bottom" bgcolor="#9CF">
	
	<table  border="1"  cellpadding="0" cellspacing="0"  >

	<tr>
	<td colspan="3" align="center" > رقم شعار التوريد</td>
	</tr>
	<tr>
	<td  align="center" colspan="1"  > الرقم </td>

	<td  colspan="1"  >المبلغ</td>
	<td  colspan="1" > التاريخ</td>
	</tr>
	<tr>
	 <td ><input type="text"   name="p4" size="10"  id="text34" onchange="ins_ts2 (this.value)"  dir="rtl"/></td>
	 <td ><input type="text" size="10"  name="p5"  id="text35" onchange=" count_mdine(this.value)" value=""  dir="rtl"/></td>
	 <td ><input type="text" size="10" name="p6"    id="text36"  value=""     onfocus="date_trans()" dir="rtl"/></td>
	</tr>
	
	</table>
	
	</td>
    
  </tr>
  </table>
      <table width="780"  align="center" style="border-top-color:"#9CF"  id="table3">
  <tr>
    <td align="center"  bgcolor="#9CF"   >
	
	<input type="submit" value="اضــافــة تسوية " style="font:"Courier New", Courier, monospace"  align="bottom" class="p1"   onclick="insert_ts()" />
	</td>
  </tr>
</table>

         
</div>
 
'; ?>

	
	
