
<script>


function search22()
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
   // document.getElementById("a").innerHTML=xmlhttp.responseText;
    }
	
  }
  
  
  
  
  var update1= document.getElementById("update_ts_no1").value;
  

alert( update1);

xmlhttp.open("GET","ts2.php?q="+update1,true);
xmlhttp.send();
}

/////////////////////////////////////////////////////////
function Add()
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
   // document.getElementById("w").innerHTML=xmlhttp.responseText;
    }
  }
  var deptno= document.getElementById("dept_no").value;
   var deptname= document.getElementById("dept_name").value;
  
var sendq=5;

xmlhttp.open("GET","creat.php?&q="+sendq+"&p1="+deptno+"&p2="+deptname,true);

xmlhttp.send();

}
function Back()
{

 var deptno= document.getElementById("dept_no").value="";
   var deptname= document.getElementById("dept_name").value="";
}

function search1()
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
   document.getElementById("dept").innerHTML=xmlhttp.responseText;
    }
  }
var deptno= document.getElementById("txsearch").value;
    
alert(deptno);
xmlhttp.open("GET","update_dept_select.php?&q="+deptno,true);

xmlhttp.send();

}
</script>




	<?php
	
	 echo '

 	
	<center>
	 
	<table  border="1"  cellpadding="0" cellspacing="0" >    <tr><td id="dept"> </td></tr></table>
	 	 
	<table  border="1"  cellpadding="0" cellspacing="0" >    <tr><td align="center" bgcolor="#99FFFF"> 
	<input type="text"  value="3"  id="txsearch"  size="10"  />

    <input type="button"   id="bt_up" onclick="search1()" value="بــحـــث" />  </td>  </tr></table> 
	<table  border="1"  cellpadding="0" cellspacing="0" >    <tr><td align="center" bgcolor="#99FFFF"> <input   type="button"  onclick="Add()" value="تــعــديــل"  size="22"     /><input type="button" value="رجــــــــــــوع" size="22"  onclick="Back()"    /> </td>  </tr></table>
 
</center>
';
?>
	
	
