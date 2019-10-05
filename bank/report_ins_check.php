<?php




echo'




<form id="form5" name="form5" method="post"   action="report_check_mser.php" bgcolor="#9CF">
<div >
 <table width="700" border="1"   bgcolor="#9CF">
 <tr  align="center"  valign="top">
  

  <td colspan=""> 
   <input name="q" type="hidden"  id="report_check_s" size="25"  dir="rtl"/>
   
   
	 <select   onchange="insert_check22(this.value)" name="r"dir="rtl" >
	 
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
	
				</select>  </td>
				 <td colspan=""> 
    <label> <input name="q" type="text" size="25" dir="rtl" id="report_check_s2" value=""  onchange="report_role(this.value)" /> <font size="+1">القيمة  </font>
  </label></td>
				</tr>
				</table>
   


<input  type="submit" align="middle" value="تقرير">




</div>

</form>
';











































?>


















