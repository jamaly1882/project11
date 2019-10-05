<?php


echo'
<div id="div22">
<table border="1" align="center" width="70%" >
<tr>

<td align="right" ><label><input  type="text"     name="1"   dir="rtl" id="st1" size="30"/> </label></td>
<td colspan="1" style="font-size:14px;"><font size="+1">رقم الطالب</font> </td>
</tr>
<tr>
<td align="right" ><input    type="text"align="center" id="st2" size="30" dir="rtl"/></td>
<td colspan="1" style="font-size:16px;"><font size="+1">اسم الطالب</font> </td>
</tr>
<tr>


<td align="right"   >
<input  type="hidden" id="hidden_st" dir="rtl"  /> 
<select  style="width:210" id="select2" dir="rtl"   onchange="page_st1(this.value)"> 
  <option  value="1" id="op_5"><font size="+2">  الصف الاول</font></option>
  <option value="2"id="op_6"><font size="+2"> الصف الثاني </font></option>
  <option value="3" id="op_7"><font size="+2"> الصف الثالث</font></option>
  <option value="4" id="op_8">الصف الرابع<font size="+2"></font></option>
  <option  value="5" id="op_9"><font size="+2"> الصف الخامس</font></option>
  <option value="6"id="op_10"><font size="+2"> الصف السادس </font></option>
  <option value="7" id="op_11"><font size="+2"> الصف السابع </font></option>
  <option value="8" id="op_12">الصف الثامن<font size="+2"></font></option>
  <option  value="9" id="op_13"><font size="+2"> الصف التاسع</font></option>
  <option value="10"id="op_14"><font size="+2">الصف الاول ثانوي </font></option>
  <option value="11" id="op_15"><font size="+2">  الصف الثاني الثانوي</font></option>
  <option value="12" id="op_16">الصف الثالث الثانوي<font size="+2"></font></option>
</select>


</td>
<td colspan="1" style="font-size:16px;"><font size="+1">الصف</font> </td>
</tr>
<tr>

<td align="right">
<input  type="text"size="30"  id="st3"dir="rtl"/> </td>
<td colspan="1" style="font-size:16px;"><font size="+1">الشعبة</font> </td>

</tr>
<tr>
<td align="center" colspan="2">
 <input type="button" value="حفظ"
  onclick="insert_st1()"      style="width:200px;" name="bb1" /> 
 </td> </tr> <table></div>



';









?>