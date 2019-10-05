<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
		function storg_sarf(){
			
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
    document.getElementById("opmaine").innerHTML=xmlhttp.responseText;
    }
  }
 

	 alert("aa");
	 xmlhttp.open("GET","help1.php",true);
xmlhttp.send();

 

	}</script>
</head>



<body>
<table width="200" border="1">
  <tr>
    <td><input name="ff" type="button" onclick="storg_sarf()" value="call" /></td>
    <td><div id="opmaine"></div></td>
  </tr>
</table>

</body>
</html>