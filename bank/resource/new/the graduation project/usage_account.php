<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php 
$q=$_GET['q'];
if($q=='a'){
 echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <caption  style="background-color:#00DFFF;"><font size="+1">
    الاستخدامات</font>
  </caption>
  <tr>
    <td align="center" style="background-color:#FF5F55"><font size="+1">الباب الأول</font></td>
    <td align="center" style="background-color:#FF5F55"><font size="+1">الباب الثــاني</font></td>
    <td align="center" style="background-color:#FF5F55"><font size="+1">الباب الثالــث</font></td>
    <td align="center" style="background-color:#FF5F55"><font size="+1">الباب الرابــع</font></td>
    <td align="center"  style="background-color:#FF5F55"><font size="+1">الباب الخامــس</font></td>
  </tr>
  </table>
  ';}
  if($q=='aa'){
  echo '<form action="usage.php" method="get" name="usage">
  <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
  
    <td > <input name="b1" type="text" size="7" maxlength="10" /></td>
    <td ><input name="b2" type="text" size="7" maxlength="10" /></td>
	<td ><input name="b3" type="text" size="7" maxlength="10" /></td>
    <td ><input name="b4" type="text" size="7" maxlength="10" /></td>
    <td ><input name="b5" type="text" size="7" maxlength="10" /></td>
	<input type="submit" value="Ok"  />
	
  </tr>
</table>
</form>
';}
if($q=='b'){
 echo '<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td  align="center"  style="background-color:#00DFFF;"><font size="+1"> حــسـاب البنـــك استـخــدمات</font></td>
    
  </tr>
  </table>';}
   if($q=='bb'){
  echo '<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td > <input name="b1" type="text" size="12" maxlength="10" /></td>
    
  </tr>
</table>';}
 if($q=='c'){
 echo '<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td  align="center"  style="background-color:#00DFFF;"><font size="+1"> حــسـاب البنـــك مـــوارد</font></td>
    
  </tr>
  </table>';}
  if($q=='cc'){
  echo '<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td > <input name="b1" type="text" size="12" maxlength="10" /></td>
    
  </tr>
</table>';}
if($q=='d'){
 echo '<table width="100%" border="0" cellspacing="1" cellpadding="0">
   <caption  style="background-color:#00DFFF"><font size="+1">الحسابات المساعده المدينه</font>
  </caption>
  <tr>
    <td align="center" colspan="2"   style="width:700px; background-color:#FF5F55"><font size="+1">حــــســــــاب الـنـــقــــديــــة</font></td>
     </tr>
  </table>
  ';}
if($q=='dd'){
  echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td > <input name="b1" type="text" size="20" maxlength="10" /></td>
     </tr>
</table>';}
if($q=='e'){
 echo '<table width="100%" border="0" cellspacing="1" cellpadding="0">
   <caption  style="background-color:#00DFFF"><font size="+1">الحسابات المساعده المدينه</font>
  </caption>
  <tr>
    <td align="center" colspan="2"   style="width:700px; background-color:#FF5F55"><font size="+1">حــسـاب البنك حسابات جاريه</font></td>
     </tr>
  </table>
  ';}
if($q=='ee'){
  echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td > <input name="b1" type="text" size="20" maxlength="10" /></td>
     </tr>
</table>';}
if($q=='f'){
 echo '<table width="100%" border="0" cellspacing="1" cellpadding="0">
   <caption  style="background-color:#00DFFF"><font size="+1">الحسابات المساعده المدينه</font>
  </caption>
  <tr>
    <td align="center" colspan="2"   style="width:700px; background-color:#FF5F55"><font size="+1">حــسـاب الســلـــف المــؤقتـــه</font></td>
     </tr>
  </table>
  ';}
if($q=='ff'){
  echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td > <input name="b1" type="text" size="20" maxlength="10" /></td>
     </tr>
</table>';}
if($q=='g'){
 echo '<table width="100%" border="0" cellspacing="1" cellpadding="0">
   <caption  style="background-color:#00DFFF"><font size="+1">الحسابات المساعده المدينه</font>
  </caption>
  <tr>
    <td align="center" colspan="2"   style="width:700px; background-color:#FF5F55"><font size="+1">حــسـاب سلف الحسابات الجارية</font></td>
     </tr>
  </table>
  ';}
if($q=='gg'){
  echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td > <input name="b1" type="text" size="20" maxlength="10" /></td>
     </tr>
</table>';}
if($q=='h'){
 echo '<table width="100%" border="0" cellspacing="1" cellpadding="0">
   <caption  style="background-color:#00DFFF"><font size="+1">الحسابات المساعده المدينه</font>
  </caption>
  <tr>
    <td align="center" colspan="2"   style="width:700px; background-color:#FF5F55"><font size="+1">حــسـاب السلف على الاجور</font></td>
     </tr>
  </table>
  ';}
if($q=='hh'){
  echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td > <input name="b1" type="text" size="20" maxlength="10" /></td>
     </tr>
</table>';}
if($q=='i'){
 echo '<table width="100%" border="0" cellspacing="1" cellpadding="0">
   <caption  style="background-color:#00DFFF"><font size="+1">الحسابات المساعده المدينه</font>
  </caption>
  <tr>
    <td align="center" colspan="2"   style="width:700px; background-color:#FF5F55"><font size="+1">حــسـاب الاعتمـــادات المســـتنـــديـــه</font></td>
     </tr>
  </table>
  ';}
if($q=='ii'){
  echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td > <input name="b1" type="text" size="20" maxlength="10" /></td>
     </tr>
</table>';}
if($q=='j'){
 echo '<table width="100%" border="0" cellspacing="1" cellpadding="0">
   <caption  style="background-color:#00DFFF"><font size="+1">الحسابات المساعده المدينه</font>
  </caption>
  <tr>
    <td align="center" colspan="2"   style="width:700px; background-color:#FF5F55"><font size="+1">حــسـاب التحويلات الــنقـــديــــه</font></td>
     </tr>
  </table>
  ';}
if($q=='jj'){
  echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td > <input name="b1" type="text" size="20" maxlength="10" /></td>
     </tr>
</table>';}
if($q=='k'){
 echo '<table width="100%" border="0" cellspacing="1" cellpadding="0">
   <caption  style="background-color:#00DFFF"><font size="+1">الحسابات المساعده المدينه</font>
  </caption>
  <tr>
    <td align="center" colspan="2"   style="width:700px; background-color:#FF5F55"><font size="+1">حــسـاب المبلغ المدفوعه مقدما</font></td>
     </tr>
  </table>
  ';}
if($q=='kk'){
  echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td > <input name="b1" type="text" size="20" maxlength="10" /></td>
     </tr>
</table>';}
if($q=='l'){
 echo '<table width="100%" border="0" cellspacing="1" cellpadding="0">
   <caption  style="background-color:#00DFFF"><font size="+1">الحسابات المساعده المدينه</font>
  </caption>
  <tr>
    <td align="center" colspan="2"   style="width:700px; background-color:#FF5F55"><font size="+1">حــسـاب المدينــيــــن ماليـــه</font></td>
     </tr>
  </table>
  ';}
if($q=='ll'){
  echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td > <input name="b1" type="text" size="20" maxlength="10" /></td>
     </tr>
</table>';}
?>
</head>

<body>

</body>
</html>