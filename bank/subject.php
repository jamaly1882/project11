<?php
echo'

<table width="200" border="1" dir="rtl" align="center" id="table2" width="70%">
<tr>
	 <td  align="right"><font size="+1">المواد  </font></td>
    <td>
	<input  type="hidden" id="hidden_qq" dir="rtl"  /> 
	<select      dir="rtl" onchange=" sub_qq(this.value)"  >

  <option value="1" id="sub"  ><font size="+2">المواد</font></option>
  <option value="2" id="sub_basic"  onchange=""subject_basic()" ><font size="+2"> مواد ابتداي</font></option>
  <option value="3" id="sub_22" >مواد اعدادي <font size="+2"></font></option>
  <option value="4"sub_33>مواد اول ثانوي<font size="+2"></font></option>
   <option value="4"sub_44>مواد ثاني ثانوي<font size="+2"></font></option>
  
</select></td>
	</tr>
<tr id="tr15" >
	 <td  align="right"><font size="+1">نوع الدرجة  </font></td>
    <td>
	<input  type="hidden" id="hidden_dg" dir="rtl"  /> 
	<select      dir="rtl" onchange=" type_dgree11(this.value)"  >

  <option value="1" ><font size="+2">محصلة الفصل  الاول</font></option>
  <option value="2" ><font size="+2">درجة اختبار الفصل الاول</font></option>
  <option value="3" >محصلة الفصل الثاني <font size="+2"></font></option>
  <option value="4">درجة اختبار الفصل الثاني<font size="+2"></font></option>
</select></td>
	</tr>
  <tr id="tr1" ">
    <td  align="right" id="td11"  style="visibility:hidden"  ><font size="+1"style="visibility:hidden" id="input1">   قران كريم  </font></td>
	 <td id="td22"><input type="text"id="Q"style="visibility:hidden"id="input2" size="30"/></td>
	 </tr>
	 <tr id="tr2" style="visibility:hidden">
    <td  align="right">
	<font size="+1">  الاسلامية  </font></td>
	 <td align="right"><input type="text" id="IS"size="30" /></td>
	 </tr>
	 <tr id="tr3" style="visibility:hidden">
	  <td  align="right"><font size="+1"> عربي  </font></td>
	  <td><input type="text" id="AR" size="30"size="30"/></td>
	 </tr>
	 <tr id="tr4" style="visibility:hidden">
	   <td  align="right"><font size="+1">  E  </font></td>
	 
    
	 <td><input id="E" type="text"size="30"/></td>
	 </tr>
	 <tr id="tr5" style="visibility:hidden">
  
    <td  align="right"><font size="+1"> رياضيات  </font></td>
	
     <td><input id="M" type="text"size="30"/></td>
	
  </tr>
  <tr id="tr6" style="visibility:hidden">
  <td  align="right"><font size="+1"> العلوم  </font></td>
    
   
   
    <td><input   id="since"type="text"size="30"/></td>
	</tr>
	<tr id="tr7" style="visibility:hidden">
	 <td  align="right"><font size="+1"> الاجتماعيات  </font></td>
    <td><input type="text"  id="grop"size="30"/></td>
	</tr>
		<tr id="tr8" style="visibility:hidden">
	 <td  align="right"><font size="+1"> فيزياء  </font></td>
    <td><input type="text"  id="grop"size="30"/></td>
	</tr>
	<tr id="tr9" style="visibility:hidden">
	 <td  align="right"><font size="+1"> كيمياء  </font></td>
    <td><input type="text"  id="grop"size="30"/></td>
	</tr>
	<tr id="tr10" style="visibility:hidden">
	 <td  align="right"><font size="+1"> احياء  </font></td>
    <td><input type="text"  id="grop"size="30"/></td>
	</tr>
	<tr id="tr11" style="visibility:hidden">
	 <td  align="right"><font size="+1"> جغرفياء  </font></td>
    <td><input type="text"  id="grop"size="30"/></td>
	</tr>
	<tr id="tr12" style="visibility:hidden">
	 <td  align="right"><font size="+1"> تاريخ  </font></td>
    <td><input type="text"  id="grop"size="30"/></td>
	<tr id="tr13" style="visibility:hidden">
	 <td  align="right"><font size="+1"> مجتمع  </font></td>
    <td><input type="text"  id="grop"size="30"/></td>
	</tr>
	
	</tr>
	
	
	
	
	
		<tr id="tr14" style="visibility:hidden">
	 <td  align="right"><font size="+1"> رقم الطالب  </font></td>
    <td><input type="text"  id="st_no1" size="30"/></td>
	</tr>
	<tr>
	<td colspan="2" align="center"> <input    type="button"  onclick="insert_subject()"style="width:200px;"  value="حفظ"  /> </td>
	</tr>
	
 
	
   
  </tr>
</table>
';


























?>