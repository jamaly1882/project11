
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="jquery/jquery.min.js">
</script>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
</head>

<body>
<script type="text/javascript">
function check_day()
{
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
    document.getElementById("day").innerHTML=xmlhttp.responseText;
    }
	
  }
  


xmlhttp.open("GET","day_check.php",true);
xmlhttp.send();
}


</script>


</script>
<script type="text/javascript">
function check_day3()
{
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
    document.getElementById("day").innerHTML=xmlhttp.responseText;
    }
	
  }
  


xmlhttp.open("GET","bank_check.php",true);
xmlhttp.send();
}
</script>
<script type="text/javascript">
function check_day2()
{
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
    document.getElementById("day").innerHTML=xmlhttp.responseText;
    }
	
  }
  


xmlhttp.open("GET","chck_use.php",true);
xmlhttp.send();
}
</script>
<table align="center" width="85%" border="1">
  <tr>
    <td align="center" colspan="2">
    <img width="90%" align="middle" height="8%" src="fgf.jpg" /></td>
   
  </tr>
  <tr>
    <td width="73%" id="day"></td> 
    <td>
    <ul id="MenuBar1" class="MenuBarVertical">
      <li><a onclick="check_day()" class="MenuBarItemSubmenu" href="#">الـــــيــــومـــيـة الــــعـــــامــــة</a>
       
      </li>
      <li><a onclick="check_day2()"   href="#">مفردات الموارد والاستخدمات</a></li>
      <li><a  onclick="check_day3()" class="MenuBarItemSubmenu" href="#">حـسـاب البــنـك حساب جاري</a>
        
      
    </ul>
   </td>
   <tr>
   <td colspan="2">
   <marquee ><img src="../cra/images/header_022.jpg" width="60%"  height="5%"/></marquee>
   </td> </tr></tr>
</table>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>