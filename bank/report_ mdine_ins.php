 <?php

echo'

<form    id="form7"  method="post" action="report_ mdine.php">
 <table width="700" border="1"   bgcolor="#9CF">
 <tr  align="center"  valign="top">
 <td colspan=""> 
    <label> <input name="p1" type="text" size="25"dir="rtl" id="report_m_day2" value=""   onchange=" report_m_day1(this.value)" /> <font size="+1"> السنه  </font>
  </label></td>
    
     <td colspan=""> 
   <input name="p" type="hidden"  id="day_madine" size="25" dir="rtl" />
   
   
	 <select   onchange="insert_ts1(this.value)" name="p" dir="rtl">
	 
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
    <label> <input name="q" type="text" size="25"dir="rtl" id="report_m_day1" value=""    onchange="report_m_day(this.value)"/> <font size="+1">اليوم  </font>
  </label></td>
  </tr>
  </table>





<input name="" type="submit" value="تقرير">




</form>



';



?>