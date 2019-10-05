<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function show()
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
    document.getElementById("w").innerHTML=xmlhttp.responseText;
    }
  }
  var as= document.getElementById("a").value;

xmlhttp.open("GET","contion1.php?q="+as,true);
xmlhttp.send();
}

</script>
</head>

<body>
 <input name="" type="button" value="load" onclick="show()" />
                    <input id="a"  type="text" size="15" value=""  />
                    
 <div id="w"></div>
 
                     
</body>
</html>