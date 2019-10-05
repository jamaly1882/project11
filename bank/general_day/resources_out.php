<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>

		function resources_select(){
			
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("resource").innerHTML=xmlhttp.responseText;
    }
  }

   var term=document.getElementById("term_ws").value;
 
if(term!=""){
	 alert(term);
	 xmlhttp.open("GET","resources_out_select.php?term_w="+term,true);
xmlhttp.send();}

 else{
	 alert(" الرجاء اختيار نوع عملية الاسترجاع هل جانب مدين ام جانب دائن");

	 }

	}

</script>
<?php
echo'


<form id="form1" name="form1" method="post" action="resources_out_select.php">
 <table width="700" border="1" >
  <tr  align="center"  valign="top">
   <td colspan=""> 
    <label> <input name="todate" type="text" size="25" /> <font size="+1"> الى تاريخ  </font>
  </label></td>
  <td colspan=""> 
   <label> <input name="fromdate" type="text" size="25" /> <font size="+1">من تاريخ  </font></label></td></tr>
   
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
	<tr> <td colspan="2" style="background-color:#0CF;" align="middle"> <font size="+1"> <input name=""  type="submit" style=" font-size:18px;" onclick="resources_select()"  size="15" value="عـــرض" />
		<input name=""  type="submit" style=" font-size:18px" onclick=""  size="15" value="طــباعة" />
	</td></tr>
	  <input id="from" name="from" style="visibility:hidden"  type="text" />
<input id="to" name="to" style="visibility:hidden" type="text" />
   <input id="gmb" name="gm" style="visibility:hidden" value="collecation_cash_gm"    type="text" />
<input id="gdb" name="gd" style="visibility:hidden" value="collection_cash_gd"  type="text" />
<input type="hidden" name="term_w" id="term_ws" value="" />  
   
</table></form> 

';

 ?>
</head>

<body>

</body>
</html>