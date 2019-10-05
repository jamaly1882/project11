<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title> الشؤون المالية (الحسابات الجارية)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script>
function report()
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
    document.getElementById("xz").innerHTML=xmlhttp.responseText;
	
    }
  }
 var ts= document.getElementById("sas").value;

xmlhttp.open("GET","reportday.php?q="+ts,true);

xmlhttp.send();
}
</script>
<script>
function show_all()
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
    document.getElementById("all").innerHTML=xmlhttp.responseText;
	
    }
  }
 
var t= document.getElementById("s").value;
xmlhttp.open("GET","showall.php?q="+t,true);

xmlhttp.send();
}
</script>
<script>
function showall_RESURCES()
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
    document.getElementById("allbab_RES").innerHTML=xmlhttp.responseText;
    }
  }
  var ts= document.getElementById("bab_RES").value;

xmlhttp.open("GET","showall_BAB_resurces.php?q="+ts,true);
alert(ts);
xmlhttp.send();
}
</script>
<script>
function showallusers()
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
    document.getElementById("allbabs").innerHTML=xmlhttp.responseText;
    }
  }
  var ts= document.getElementById("bab1").value;

xmlhttp.open("GET","showallbab.php?q="+ts,true);
alert(ts);

xmlhttp.send();
}
</script>
<script>
function showbab_RESURCES()
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
    document.getElementById("sumb_RES").innerHTML=xmlhttp.responseText;
    }
  }
  var ts= document.getElementById("bab_RES").value;

xmlhttp.open("GET","by_bab_resurces.php?q="+ts,true);
alert(ts);
xmlhttp.send();
}
</script>
<script>
function showbab1()
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
    document.getElementById("subm1").innerHTML=xmlhttp.responseText;
	
    }
  }
  var ts= document.getElementById("bab1").value;

xmlhttp.open("GET","bab1.php?q="+ts,true);
alert(ts);
xmlhttp.send();
}
</script>
<script>
function REPORTRES()
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
    document.getElementById("rr").innerHTML=xmlhttp.responseText;
	
    }
  }
 var ts_res= document.getElementById("TT").value;

xmlhttp.open("GET","reportday_RES.php?q="+ts_res,true);
alert(ts_res);
xmlhttp.send();
}
</script>
<script>
function show_restsweh()
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
    document.getElementById("res").innerHTML=xmlhttp.responseText;
    }
  }
  var tsres= document.getElementById("resTsweh").value;

xmlhttp.open("GET","contion_RESURSE.php?q="+tsres,true);
alert(tsres);
xmlhttp.send();
}

</script>
<script>
function showtsweh()
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
  var ts= document.getElementById("idTsweh").value;

xmlhttp.open("GET","contionTSW.php?q="+ts,true);
alert(ts);
xmlhttp.send();
}

</script>
<script>
function WETCH()
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
  var sa= document.getElementById("a11").value;

xmlhttp.open("GET","contion1.php?q="+sa,true);
xmlhttp.send();
}

</script>
<script>
function showTSW()
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
    document.getElementById("TSupd").innerHTML=xmlhttp.responseText;
    }
  }
  var TS= document.getElementById("Tupd").value;

xmlhttp.open("GET","contionTSW.php?q="+TS,true);
xmlhttp.send();
}

</script>
<script>
function Delete_TS_RES()
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
    //document.getElementById("w").innerHTML=xmlhttp.responseText;
    }
  }
  var res_delet= document.getElementById("delet_ts_res").value;

xmlhttp.open("GET","delet_TS_RES.php?q="+res_delet,true);
alert(res_delet);
xmlhttp.send();
}

</script>
<script>
function Delete()
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
    //document.getElementById("w").innerHTML=xmlhttp.responseText;
    }
  }
  var asdelet= document.getElementById("delet").value;

xmlhttp.open("GET","deletastid.php?q="+asdelet,true);
alert(asdelet);
xmlhttp.send();
}

</script>
<script>
function DeleteTSW()
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
    //document.getElementById("w").innerHTML=xmlhttp.responseText;
    }
  }
  var TSdelet= document.getElementById("deletTSW").value;

xmlhttp.open("GET","deletTSWID.php?q="+TSdelet,true);
alert(TSdelet);
xmlhttp.send();
}

</script>
<script>
function TSW_RESURCE()
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
    document.getElementById("rsTS").innerHTML=xmlhttp.responseText;
    }
  }
  var TSRS= document.getElementById("ts_res").value;

xmlhttp.open("GET","SHOW_TS_RES.php?q="+TSRS,true);
xmlhttp.send();
}

</script>
<script>
function showastm()
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
    document.getElementById("asupd").innerHTML=xmlhttp.responseText;
    }
  }
  var asup= document.getElementById("supd").value;

xmlhttp.open("GET","contion1.php?q="+asup,true);
xmlhttp.send();
}

</script>
<script>
function DATE_RESURCE()
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
    document.getElementById("dd_RES").innerHTML=xmlhttp.responseText;
    }
  }
  var a= document.getElementById("from_res").value;
 var b= document.getElementById("into_res").value;

xmlhttp.open("GET","quarydate_RES.php?q="+a+"&p="+b,true);

xmlhttp.send();
}

</script>
<script>
function DATE()
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
    document.getElementById("dd").innerHTML=xmlhttp.responseText;
    }
  }
  var a= document.getElementById("from").value;
 var b= document.getElementById("into").value;

xmlhttp.open("GET","quarydate.php?q="+a+"&p="+b,true);

xmlhttp.send();
}

</script>
<script>
function updata_ts_RS()
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
  var upRS1= document.getElementById("RSns").value;
   var upRS2= document.getElementById("RSnp").value;
   var upRS3= document.getElementById("RSnd").value;
	 var upRS4= document.getElementById("RSnb").value;
	  var upRS5= document.getElementById("RSnf").value;
	 var upRS6= document.getElementById("RSnbn").value;
	   var upRS7= document.getElementById("RSnt").value;
		var upRS8= document.getElementById("RSnsu").value;
		 // var update= document.getElementById("upd").value;

xmlhttp.open("GET","update_RES.php?q="+upRS1+"&p1="+upRS2+"&p2="+upRS3+"&p3="+upRS4+"&p4="+upRS5+"&p5="+upRS6+"&p6="+upRS7+"&p7="+upRS8,true);

xmlhttp.send();

}

</script>
<script>
function updata()
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
  var up1= document.getElementById("ns").value;
   var up2= document.getElementById("np").value;
   var up3= document.getElementById("nd").value;
	 var up4= document.getElementById("nb").value;
	  var up5= document.getElementById("nf").value;
	 var up6= document.getElementById("nbn").value;
	   var up7= document.getElementById("nt").value;
		var up8= document.getElementById("nsu").value;
		 // var update= document.getElementById("upd").value;

xmlhttp.open("GET","update.php?q="+up1+"&p1="+up2+"&p2="+up3+"&p3="+up4+"&p4="+up5+"&p5="+up6+"&p6="+up7+"&p7="+up8,true);

xmlhttp.send();

}

</script>
<script>
function updataTSW()
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
  var Tp1= document.getElementById("nT").value;
   var Tp2= document.getElementById("npT").value;
   var Tp3= document.getElementById("ndT").value;
	 var Tp4= document.getElementById("nbT").value;
	  var Tp5= document.getElementById("nfT").value;
	 var Tp6= document.getElementById("nbnT").value;
	   var Tp7= document.getElementById("ntT").value;
		var Tp8= document.getElementById("nsT").value;
		 // var update= document.getElementById("upd").value;

xmlhttp.open("GET","updateTSW.php?q="+Tp1+"&p1="+Tp2+"&p2="+Tp3+"&p3="+Tp4+"&p4="+Tp5+"&p5="+Tp6+"&p6="+Tp7+"&p7="+Tp8,true);

xmlhttp.send();

}

</script>
<script language="javascript">
function onloadweb()
{
alert("أهلا بكم في موقعنا");
}
function onUnloadweb()
{
alert("نشكركم على زيارة موقعنا");
}
</script>

<script src="jquery.min.js"></script>
<script type="text/javascript">

function validate_form ( ) { 
    valid = true;
	 if ( document.formone.astm_id.value == "" ) { 
	alert ( "أدخل رقم الاستمــارة لو سمحت" );
	valid = false; 
	 }
	 else if ( document.formone.bain.value == "" ) { 
	alert ( "أدخل البيان التفصيلي لو سمحت" ); 
	valid = false;
	 }
	  else if ( document.formone.date.value == "" ) { 
	alert ( "أدخل تاريــخ الاستمارة لو سمحت" ); 
	valid = false;
	 }
	  else if ( document.formone.bab.value == "" ) { 
	alert ( "  أدخل رقم الــبـاب لو سمحت" ); 
	valid = false;
	 }
	  else if ( document.formone.fasl.value == "" ) { 
	alert ( "أدخل رقم الفصـــــل لو سمحت" ); 
	valid = false;
	 }
	  else if ( document.formone.band.value == "" ) { 
	alert ( "أدخل رقم البنـــــد لو سمحت" ); 
	valid = false;
	 }
	  else if ( document.formone.type.value == "" ) { 
	alert ( "أدخل رقم النــــــوع لو سمحت" ); 
	valid = false;
	 }
	  else if ( document.formone.jumla.value == "" ) { 
	alert ( "أدخل المبـــلغ  المطلوب لو سمحت" ); 
	valid = false;
	  }
	   else if ( document.formone.jumla.value != "" ) { 
	alert ( "تم أدخال البيانات بنجاح" ); 
	valid =true;
	  }
	return valid;
}

</script>
<script>
function showRESURS(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("rss").innerHTML=xmlhttp.responseText;
document.getElementById("ares").value=str;

    }
  }
xmlhttp.open("GET","fasl_res.php?q="+str,true);

xmlhttp.send();
}
</script>
<script>
function showRSS(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("rssOutput").innerHTML=xmlhttp.responseText;
document.getElementById("a").value=str;

    }
  }
xmlhttp.open("GET","bbbbb.php?q="+str,true);

xmlhttp.send();
}
</script>
<script>
function showres_pand(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("bbres2").innerHTML=xmlhttp.responseText;
 document.getElementById("bres").value=str;
    }
  }
 var babres= document.getElementById("babnumres").innerHTML;

xmlhttp.open("GET","band_res.php?w="+str+"&p="+babres,true);

xmlhttp.send();



}
</script>
<script>
function showRSSpand(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("bb2").innerHTML=xmlhttp.responseText;
 document.getElementById("b").value=str;
    }
  }
 var bab= document.getElementById("babnum").innerHTML;

xmlhttp.open("GET","bb2.php?w="+str+"&p="+bab,true);

xmlhttp.send();



}
</script>
<script>
function showrestype(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("pres").innerHTML=xmlhttp.responseText;
 document.getElementById("cres").value=str;
 
    }
  }
 var babres= document.getElementById("babnumres").innerHTML;
var fsres= document.getElementById("fsnumres").innerHTML;

xmlhttp.open("GET","type_res.php?e="+str+"&pf="+fsres,true);

xmlhttp.send();

}
</script>

<script>
function show(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("bb3").innerHTML=xmlhttp.responseText;
 document.getElementById("c").value=str;
 
    }
  }
 var bab1= document.getElementById("babnum").innerHTML;
var fs= document.getElementById("fsnum").innerHTML;

xmlhttp.open("GET","bb3.php?e="+str+"&pf="+fs,true);

xmlhttp.send();

}
</script>
<script>
function showendRES(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("pres").innerHTML=xmlhttp.responseText;
 document.getElementById("dres").value=str;
 
    }
  }
 var babres= document.getElementById("babnumres").innerHTML;
var fsres= document.getElementById("fsnumres").innerHTML;

xmlhttp.open("GET","type_res.php?e="+str+"&pf="+fsres,true);

xmlhttp.send();

}
</script>
<script>
function showend(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("bb3").innerHTML=xmlhttp.responseText;
 document.getElementById("d").value=str;
 
    }
  }
 var bab1= document.getElementById("babnum").innerHTML;
var fs= document.getElementById("fsnum").innerHTML;

xmlhttp.open("GET","bb3.php?e="+str+"&pf="+fs,true);

xmlhttp.send();

}
</script>


<script>
function showfasl(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("fasl").innerHTML=xmlhttp.responseText;
document.getElementById("p1").value=str;

    }
  }
xmlhttp.open("GET","fasltsw.php?q="+str,true);

xmlhttp.send();
}
</script>
<script>
function showband(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("band").innerHTML=xmlhttp.responseText;
 document.getElementById("p2").value=str;
    }
  }
  var bab= document.getElementById("babnum").innerHTML;

xmlhttp.open("GET","bandtsw.php?w="+str+"&p="+bab,true);

xmlhttp.send();

}
</script>
<script>
function showty(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("type").innerHTML=xmlhttp.responseText;
 document.getElementById("p3").value=str;
    }
  }

var bab1= document.getElementById("babnum").innerHTML;
var fs= document.getElementById("fsnum").innerHTML;

xmlhttp.open("GET","typetsw.php?e="+str+"&pf="+fs,true);

xmlhttp.send();
}
</script>
<script>
function showtyid(str)
{

if (str.length==0)
  { 
  document.getElementById("rssOutput").innerHTML="";
  return;
  }

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
  if (xmlhttp.readyState==4 &&xmlhttp.status==200)
    {
    document.getElementById("type").innerHTML=xmlhttp.responseText;
 document.getElementById("p4").value=str;
    }
  }
 var bab1= document.getElementById("babnum").innerHTML;
var fs= document.getElementById("fsnum").innerHTML;

xmlhttp.open("GET","typetsw.php?e="+str+"&pf="+fs,true);

xmlhttp.send();
}
</script>
</head>

<body onLoad="onloadweb()" onUnload="onUnloadweb()">
<table width="1230" border="2"  align="center"> 
<tr>
<td width="86"><img src="../مجلد جديد ‫(2)‬/الاخير.jpg" width="100%" height="238"/ ></td>
</tr>
  <tr>
    <td   bgcolor="#999999">
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0"> بيان مفردات الاستخدامات العامة </li>
    <li class="TabbedPanelsTab" tabindex="0">بيان مفردات الموارد العامة</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent" align="right">
      <div id="TabbedPanels2" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">ادخال بيان مفردات الاستخدامات العامة</li>
          <li class="TabbedPanelsTab" tabindex="0">تحكم بيان مفردات الاستخدامات العامة</li>
          <li class="TabbedPanelsTab" tabindex="0">تقارير بيان مفردات الاستخدامات العامة</li>
        </ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent" align="right">
            <div id="Accordion1" class="Accordion" tabindex="0">
               <div class="AccordionPanel" style="background-color: #7F7F55;">
                <div class="AccordionPanelTab"  style="background-color: #CC9"  ><font size="+1" style="background-color: #AAA">ادخال حسب الاستمارة - استخدامات </font></div>
                <div class="AccordionPanelContent" align="right" style="background:#99CCCC;">
                  <table width="1073" height="300" border="0">
                    <tr>
                      <td width="1070" height="54" bgcolor="#CCCCCC" align="right">
                        &nbsp; <font size="+2">أدخل  البيانات لمفردات الاستخدامات العامة في هذة الصفحة </font>&nbsp;</td>
                    </tr>
                  
                   
                     <form action="inserAstmarh.php" method="post" name="formone" id="form1"   onsubmit="return validate_form ( );"   >
                      <tr>
                      <td  width="1119" height="175" bgcolor="#CCCC99" align="right"><hr  width="300"/>
                       
                        <table width="1120" height="50" border="1"  bgcolor="" dir="ltr"  >
                        <tr>
                          <td width="120" height="52" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>القيمة</strong></font></span>
                          </center></td>
                           <td width="120" height="52" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>النوع</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>البند</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>الفصل</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center>
                            <span style="font-family: &quot;Arabic Transparent&quot;; color: #800000"><font size="4"><strong>الباب</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"><strong>التاريخ</strong></font></span></center></td>
                          <td width="150" align="center" bgcolor="#BBBBBB"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"><strong>البيـــــــــــــــان</strong></font></span></center></center></td>
                          <td colspan="2" align="right"><table width="176" height="48" border="0">
                            <tr>
                              <td height="21" colspan="2" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقم اليومية العامة</font></span></center></td>
                            </tr>
                            <tr>
                              <td width="70" height="21" align="center" bgcolor="#BBBBBB"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">استمارة</font></span></center></td>
                             
                            </tr>
                          </table></td>
                        </tr>
                        <tr> 
                       
                          <td   bgcolor="#009966" align="right" height="50"> <div id="bb4"> </div><input type="text"  align="right" name="jumla" value="" size="20" /></td>
                          <td bgcolor="#009966" align="right">
                          <div id="bb3">
                           </div>
                           <input type="text" id="d" align="right" name="type" value="" size="20" /></td>
                          <td bgcolor="#009966" align="right"><div id="bb2"></div><input type="text" id="c" align="right" name="band" value="" size="20" /></td>
                          <td  bgcolor="#009966" align="right"><div id="rssOutput" ></div><input type="text" id="b" align="right" name="fasl" value="" size="20" /> </td>
                          <td bgcolor="#009966" align="right"><select   onChange="showRSS(this.value)">
<option value="0">اختــر نوع البــاب</option>;

<option value="1"> الباب الاول</option>
<option value="2">الباب الثاني</option>
<option value="3">الباب الثالث</option>
<option value="4">الباب الرابع</option>
<option value="5">الباب الخامس</option>
                          </select>
                          <input type="text" id="a" align="right" name="bab" value="" size="20" />

 </td>
  <td width="150" bgcolor="#009966"> <input type="text" id="aa" align="right" name="date" value="" size="20"  />  </td>
  <td bgcolor="#009966" align="right"><input type="text" align="right" name="bain" value="" size="20"  /></td>
  
     <td width="172" bgcolor="#009966" align="center"> <input type="text" align="right" name="astm_id" value="" size="10"  /></td>
     
       </tr>
        </table>
           </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><input name="عرض2" type="reset" class="TabbedPanelsTabGroup" style="font-size:16px;" value="مســــــح الخــــــانات"   size="100" height="200" />
                       <input name="Submit" type="submit"   class="style21" style="font-size:16px;" value="اضـــــــــــــــــــافة" onclick="" />
                         <input type="hidden" name="MM_insert" value="form1" />
                       
                        </td>
                    </tr>
                     </form>
                  </table>
                 
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #7F7F55;">
                <div class="AccordionPanelTab" align="right" style="background-color: #CC9"><font size="+1"  style="background-color: #888">ادخال حسب التسوية - استخدامات</font></div>
                <div class="AccordionPanelContent" align="right" style="background:#99CCCC;">
                 <table width="1073" height="300" border="0">
                    <tr>
                      <td width="1070" height="54" bgcolor="#CCCCCC" align="right">
                         &nbsp; <font size="+2">أدخل  بيانات التسوية لمفردات الاستخدامات العامة في هذة الصفحة </font>&nbsp;</td>
                    </tr>
                  
                   <tr>
                      <form action="inserTsw.php" method="post" name="form" id="form2">
                     
                      <td width="1126" height="175" align="right" bgcolor="#CCCC99"><hr  width="300"/>
                        <table width="1120" height="50" border="1"  bgcolor="" dir="ltr"  >
                        <tr>
                          <td width="120" height="52" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>القيمة</strong></font></span>
                          </center></td>
                           <td width="120" height="52" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>النوع</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>البند</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>الفصل</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center>
                            <span style="font-family: &quot;Arabic Transparent&quot;; color: #800000"><font size="4"><strong>الباب</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"><strong>التاريخ</strong></font></span></center></td>
                          <td width="150" align="center" bgcolor="#BBBBBB"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"><strong>البيـــــــــــــــان</strong></font></span></center></center></td>
                          <td colspan="2" align="right"><table width="176" height="48" border="0">
                            <tr>
                              <td height="21" colspan="2" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقم اليومية العامة</font></span></center></td>
                            </tr>
                            <tr>
                              
                              <td width="90" align="center" bgcolor="#BBBBBB"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">تسويات</font></span></center></td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr> 
                       
                          <td   bgcolor="#009966" align="right" height="50"> <div id="bb4"> </div><input type="text"  align="right" name="sum" value="" size="20" /></td>
                          <td bgcolor="#009966" align="right"><div id="type"> </div><input type="text" id="p4" align="right" name="tytsw" value="" size="20" /></td>
                          <td bgcolor="#009966" align="right"><div id="band"></div><input type="text" id="p3" align="right" name="bandtsw" value="" size="20" /></td>
                          <td  bgcolor="#009966" align="right">
                          <div id="fasl"></div>
                          <input type="text" id="p2" align="right" name="fasltsw" value="" size="20" /></td>
                          <td bgcolor="#009966" align="right"><select class="TabbedPanelsTabHover"  onChange="showfasl(this.value)">
<option value="0">اختــر نوع البــاب</option>;
<option value="1"> الباب الاول</option>
<option value="2">الباب الثاني</option>
<option value="3">الباب الثالث</option>
<option value="4">الباب الرابع</option>
<option value="5">الباب الخامس</option>
                          </select>
                          <input type="text" id="p1" align="right" name="babtsw" value="" size="20" />

 </td>
  <td width="150" bgcolor="#FFFFFF"><input type="text" align="right" name="DATtsw" value="" size="25" height="65"  /></td>
  <td bgcolor="#009966" align="right"><input type="text" align="right" name="baintsw" value="" size="20"  /></td>
  
     <td width="172" bgcolor="#009966" align="center"><input type="text" align="right" name="tswid" value="" size="10"  /></td>
       </tr>
        </table>
           </tr>
           
           
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><input name="عرض2" type="reset" class="TabbedPanelsTabGroup" style="font-size:16px;"  value="مســح الخـانات"  size="100" height="200" />
                       <input name="Submit" type="submit" class="style21" style="font-size:16px;" value="اضـــــــــــــــــــافة" />
                        <input type="hidden" name="MM_insert" value="form2" />
                       
                        </td>
                    </tr>
                     </form>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #7F7F55;">
                <div class="AccordionPanelTab" align="right" style="background-color: #CC9"><font size="+1" style="background-color: #996">Label 3</font></div>
                <div class="AccordionPanelContent" align="right">Content 3</div>
              </div>
              
              
            </div>
          </div>
          <div class="TabbedPanelsContent" align="right">
            <div id="Accordion2" class="Accordion" tabindex="0">
              <div class="AccordionPanel" style="background-color: #AAA;" >
              
                <div class="AccordionPanelTab" style="background-color: #CC9"><font size="+1" style="background-color: #996">استرجاع حسب الاستمارة + استرجاع حسب التسوية</font></p></div>
                <div class="AccordionPanelContent" align="right">
               <table width="1073" height="305" border="0" align="center">
                    <tr>
                      <td width="1070" height="54" bgcolor="#669966" align="right">
                     <input name=""  type="button" value=" استرجع حسب التسوية" onclick="showtsweh()" />
                    <input id="idTsweh"  type="text" size="15" value=""  />
 <input name="" type="button" value=" استرجع حسب الاستمارة" onclick="WETCH()" align="right" />
                    <input id="a11"  type="text" size="15" value="" align="right"   />
             
 
 
                  <table width="1076" height="305" border="0">
                 
                 
                    <tr>
                     
                       <td width="1070" height="54" bgcolor="#AAAAAA" align="right"> </td>
                    </tr>
             
            
                    <tr>
                      <td height="175" bgcolor="#888888" align="right"><div id="w"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#AAAAAA" align="center" valign="middle"><hr  width="300"/></td>
                    </tr>
                  </table>
                  </td>
                  </tr>
                  </table>
                  
                </div>
              </div>
             <div class="AccordionPanel" style="background-color: #AAA;">
                <div class="AccordionPanelTab" align="right" style="background-color: #CC9"><font size="+1" style="background-color: #996;"> اجراء عملية التعديل وعملية الحذف بالنسبة للأستمارة</font></p></div>
                <div class="AccordionPanelContent" align="right" >
                
                  <table width="1076" height="305" border="0"  align="center">
                    <tr>
                 
                      <td  align="right" bgcolor="#669966"><input type="button" onclick="showastm()" value="استــرجــع" style="font-size: large; font-family:'Arial Black', Gadget, sans-serif;"/><input type="text" name="id"  id="supd" value="" size="15" /> <font size="+2" style="font-size:16px; font-family:Tahoma, Geneva, sans-serif;">استرجع الاستمارة المراد تعديلهااوحذفها</font>
                     <div id="asupd"></div>
                      </td>
                      
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#A0A0A4" align="right">
                     
  <table border="1"  align="right">
    <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="id"  id="ns" value="" size="32" /></td>
       <td align="right" bgcolor="#00BFAA"> رقم الاستمارة </td>
    </tr>
    <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="name" id="np" value="" size="32" /></td>
       <td align="right" bgcolor="#00BFAA">البيــان</td>
    </tr>
    <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree"  id="nd"value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">التــاريخ</td>
       </tr>
       <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree" id="nb" value="" size="32"  /></td>
       <td  align="right" bgcolor="#00BFAA">البـــاب</td>
    </tr>
     <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree" id="nf" value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">الفصـــل</td>
    </tr>
     <tr>
<td bgcolor="#A0A0A4"><input type="text" name="degree" id="nbn" value="" size="32" /></td>
 <td  align="right" bgcolor="#00BFAA">البنــد</td>
    </tr>
     <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree" id="nt" value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">النـــوع:</td>
    </tr>
     <tr>
     
      <td height="28" bgcolor="#A0A0A4"><input type="text" name="degree" id="nsu" value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">الاجمــالي</td>
    </tr>
  </table>
   <table  align="right">
    <tr>
     
      <td height="47" bgcolor="#ABADB3"><input type="text" name="id"  id="delet" value="" size="32" /></td>
       <td align="right" bgcolor="#00BFAA">ادخل رقم الاستمارة المراد  حذفها</td>
    </tr>
  </table>
 </td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#669966" align="center" valign="middle"><hr  width="300"/>
                       <input name="عرض" type="button" style="font-size:16px;" value="حـــــــــــــــــــــــــذف"  size="100" height="200" onclick="Delete()" />
                    <input name="عرض" type="button" style="font-size:16px;" value="تعديــــــــــــــــــــــــــل"  size="100" height="200" onclick="updata()" />
                    <input name="عرض11" type="reset"  value="مسح الخانات"   size="100" height="200" />
                    </td>
                    </tr>
                  </table>
                 
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #AAA;">
                <div class="AccordionPanelTab" align="right" style="background-color: #CC9"><font size="+1" style="background-color: #996">استرجاع حسب التاريخ للأستمارة </font></p></div>
                <div class="AccordionPanelContent" align="right" >
                  <table width="1076" height="305" border="0" align="center">
                    <tr>
                      <td width="1070" height="54" bgcolor="#AAAAAA" align="right"><p>
                    
                       
                       </p>
                        <hr/>
                        
                        <table width="548" border="0">
                          <tr>
                            <td width="144" bgcolor="#AAAAAA"><input type="text" id="into"/></td>
                            <td width="20" bgcolor="#EEEEEE"><center> 
                              <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4">الى</font></span>
                            </center> <input type="button" value=" التاريخ" onclick="DATE()" /></td>
                            <td width="144" bgcolor="#AAAAAA"><input type="text"  id="from"/>
                             </td>
                            <td width="16" bgcolor="#EEEEEE"><center>
                              <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">من</font></span>
                            </center></td>
                            <td width="190" bgcolor="#AAAAAA"></td>
                          </tr>
                          <tr></tr>
                        </table>
                        <p></p></td>
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#AAAAAA" align="right"><div id="dd"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#777777" align="center" valign="middle"><hr  width="300"/>
                       </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #AAA;">
                <div class="AccordionPanelTab" align="right" style="background-color: #CC9"><font size="+1" style="background-color: #996">استرجاع بحسب التسوية وتعديلها وحذفها </font></p></div>
                <div class="AccordionPanelContent" align="right" >
                  <table width="1076" height="305" border="0" align="center">
                    <tr>
                      <td  align="right" bgcolor="#888888"><input type="button" onclick="showTSW()" value="select"/>
                        <input type="text" name="Tupd"  id="Tupd" value="" size="15" />
                        استرجع الاستمارة المراد تعديلهااوحذفها
                        <div id="TSupd"></div></td>
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#AAAAAA" align="right"><table  align="right" border="1">
                        <tr>
                          <td width="200" bgcolor="#808080"><input type="text" name="nT"  id="nT" value="" size="32" /></td>
                          <td width="88" align="right" bgcolor="#26D5AD">ادخل رقم التسوية المراد تعديلها</td>
                        </tr>
                        <tr>
                          <td bgcolor="#808080"><input type="text" name="npT" id="npT" value="" size="32" /></td>
                          <td align="right" bgcolor="#26D5AD">البيـــــــــان</td>
                        </tr>
                        <tr>
                          <td bgcolor="#808080"><input type="text" name="ndT"  id="ndT"value="" size="32" /></td>
                          <td  align="right" bgcolor="#26D5AD">التــــــاريخ</td>
                        </tr>
                        <tr>
                          <td bgcolor="#808080"><input type="text" name="nbT" id="nbT" value="" size="32" /></td>
                          <td  align="right" bgcolor="#26D5AD">البـــــــــاب</td>
                        </tr>
                        <tr>
                          <td bgcolor="#808080"><input type="text" name="nfT" id="nfT" value="" size="32" /></td>
                          <td  align="right" bgcolor="#26D5AD">الفصــــــل</td>
                        </tr>
                        <tr>
                          <td bgcolor="#808080"><input type="text" name="nbnT" id="nbnT" value="" size="32" /></td>
                          <td  align="right" bgcolor="#26D5AD">البنـــــــــــد</td>
                        </tr>
                        <tr>
                          <td bgcolor="#808080"><input type="text" name="ntT" id="ntT" value="" size="32" /></td>
                          <td  align="right" bgcolor="#26D5AD">النـــــــــوع</td>
                        </tr>
                        <tr>
                          <td bgcolor="#808080"><input type="text" name="nsT" id="nsT" value="" size="32" /></td>
                          <td  align="right" bgcolor="#26D5AD">الاجمـــــالي</td>
                        </tr>
                      </table>
                        <table  align="right">
                          <tr>
                            <td width="120" height="48" bgcolor="#AABFAA"><input type="text" name="deletTSW"  id="deletTSW" value="" size="20" /></td>
                            <td width="153" align="right" bgcolor="#26D5AD">ادخل رقم التسوية المراد  حذفها</td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><hr  width="300"/>
                        <input name="عرض3" type="button"  style="font-size:16px;" value="حـــــــــــــــــــــــــذف"  size="100" height="200" onclick="DeleteTSW()" />
                        <input name="عرض3" type="button" style="font-size:16px;" value="تعديــــــــــــــــــــــــــل"  size="100" height="200" onclick="updataTSW()" /></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #AAA;">
                <div class="AccordionPanelTab" align="right" style="background-color: #CC9">Label 5</div>
                <div class="AccordionPanelContent" align="right">Content 5</div>
              </div>
            </div>
          </div>
          <div class="TabbedPanelsContent" align="right" >
            <div id="Accordion3" class="Accordion" tabindex="0">
              <div class="AccordionPanel" style="background-color: #AAA;" >
                <div class="AccordionPanelTab" style="background-color: #CC9"><font size="+1" style="background-color: #996">تقــارير حسب الابــواب</font></div>
                <div class="AccordionPanelContent" align="right" style="background-color: #7F7F55">
                
                  <table width="1076" height="305" border="0" align="center">
                
                    <tr>
                      <td width="1076" height="54"  bgcolor="#888888"  align="center">
                      
    <input type="text" id="bab1"  />
    
      <input type="button" value="اجمـــالي حسب البـــاب" onclick="showbab1()" />

 </td>
                      
                    </tr>
                  
                    <tr>
                   
                      <td height="250" bgcolor="#AAAAAA" align="right"> <div id="subm1" align="center"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888"  align="center" valign="middle"><hr  width="300"/> 
                     </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #AAA;" >
                <div class="AccordionPanelTab" align="right" style="background-color: #CC9"> <font size="+1" style="background-color: #996">إجمالي الإستخدامات العامة</font></div>
                <div class="AccordionPanelContent" align="right" style="background-color: #7F7F55">
                  <table width="1076" height="305" border="0" align="center">
                    <tr>
                      <td width="1070" height="54" bgcolor="#888888" align="center"><input type="button" class="TabbedPanelsContent" value="تقـــرير إجمـــالي الإستخـــدامات العـــامة " onclick="showallusers()" /></td>
                      <hr/>
                        </p>
                    </tr>
                    <tr>
                      <td height="250" bgcolor="#AAAAAA"  align="center"><div id="allbabs" align="center"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><hr  width="300"/> </td>
                    </tr>
                  </table>
                </div>
              </div>
               <div class="AccordionPanel" style="background-color: #AAA;" >
                <div class="AccordionPanelTab" align="right" style="background-color: #CC9"> <font size="+1" style="background-color: #996">استرجاع حسب التاريخ</font></div>
                <div class="AccordionPanelContent" align="right" style="background-color: #7F7F55">
                
                  <table width="1076" height="305" border="0" align="center">
                    <tr>
                      <td width="1070" height="54" bgcolor="#888888" align="right"><input type="button" value="تقـــــــــــــــرير يومـــــــــــــــــــــي" onclick="report()" />
                       <input type="text" id="sas" /></td>
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#BBBBBB" align="right"><div id="xz"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><hr  width="300"/> </td>
                    </tr>
                  </table>
                
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #AAA;" >
                <div class="AccordionPanelTab" align="right" style="background-color: #CC9"><font size="+1" style="background-color: #996">استرجاع الفصل بل كامل </font></div>
                <div class="AccordionPanelContent" align="right" style="background-color: #7F7F55">
                  <table width="1076" height="305" border="0" align="center">
                    <tr>
                      <td width="1070" height="54" bgcolor="#669966" align="right">&nbsp;</td>
                      <hr/>
                        </p>
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#AAAAAA" align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#669966" align="center" valign="middle"><hr  width="300"/> <input name="عرض" type="button" value="عــرض"  size="100" height="200" /><input name="عرض" type="button" value="حفـظ"  size="100" height="200" /><input name="عرض" type="button" value="تعديل"  size="100" height="200" /></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #AAA;" >
                <div class="AccordionPanelTab" style="background-color: #CC9"><font size="+1" style="background-color: #996">Label 4</font></div>
                <div class="AccordionPanelContent" align="right" style="background-color: #7F7F55">
                <table width="1076" height="305" border="0" align="center">
                    <tr>
                      <td width="1070" height="54" bgcolor="#888888" align="right">&nbsp;</td>
                      <hr/>
                        </p>
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#AAAAAA" align="right">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><hr  width="300"/> <input name="عرض" type="button" value="عــرض"  size="100" height="200" /><input name="عرض" type="button" value="حفـظ"  size="100" height="200" /><input name="عرض" type="button" value="تعديل"  size="100" height="200" /></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="TabbedPanelsContent" align="right">
      <div id="TabbedPanels3" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">ادخال بيان مفردات الموارد العامة</li>
          <li class="TabbedPanelsTab" tabindex="0">تحكم بيان مفردات الموارد العامة</li>
          <li class="TabbedPanelsTab" tabindex="0">تقارير بيان مفردات الموارد العامة</li>
        </ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent" align="right">
                      <div id="Accordion4" class="Accordion" tabindex="0">
              <div class="AccordionPanel" >
                <div class="AccordionPanelTab" style="background-color: #CC9"> <font size="+1" style="background-color: #996">المــــوارد العـــــامة</font> </div>
                <div class="AccordionPanelContent"> <table width="1073" height="305" border="0">
                    <tr>
                      <td width="1073" height="54" bgcolor="#CCCCCC" align="right">
                        &nbsp; <font size="+2">أدخل  البيانات لمفردات الاستخدامات العامة في هذة الصفحة </font>&nbsp;</td>
                    </tr>
                  
                   
                     <form action="inserRECURSE.php" method="post" name="formone" id="form1"  onsubmit="return validate_form ( );"   >
                      <tr>
                      <td height="175" bgcolor="#CCCC99" align="right"><hr  width="300"/>
                       
                        <table width="100%" height="50" border="1"  bgcolor="" dir="ltr"  >
                        <tr>
                          <td width="120" height="52" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>القيمة</strong></font></span>
                          </center></td>
                           <td width="120" height="52" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>النوع</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>البند</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4"><strong>الفصل</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center>
                            <span style="font-family: &quot;Arabic Transparent&quot;; color: #800000"><font size="4"><strong>الباب</strong></font></span>
                          </center></td>
                          <td width="120" align="center" bgcolor="#BBBBBB"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"><strong>التاريخ</strong></font></span></center></td>
                          <td width="150" align="center" bgcolor="#BBBBBB"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"><strong>البيـــــــــــــــان</strong></font></span></center></center></td>
                          <td colspan="2" align="right"><table width="176" height="48" border="0">
                            <tr>
                              <td height="21" colspan="2" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقم اليومية العامة</font></span></center></td>
                            </tr>
                            <tr>
                              <td width="70" height="21" align="center" bgcolor="#BBBBBB"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">استمارة</font></span></center></td>
                             
                            </tr>
                          </table></td>
                        </tr>
                        <tr> 
                       
                          <td   bgcolor="#009966" align="right" height="50"> <div id="bb4"> </div><input type="text"  align="right" name="jumla" value="" size="20" /></td>
                          <td bgcolor="#009966" align="right">
                          <div id="pres">
                           </div>
                           <input type="text" id="dres" align="right" name="type" value="" size="20" /></td>
                          <td bgcolor="#009966" align="right"><div id="bbres2"></div><input type="text" id="cres" align="right" name="band" value="" size="20" /></td>
                          <td  bgcolor="#009966" align="right"><div id="rss" ></div><input type="text" id="bres" align="right" name="fasl" value="" size="20" /> </td>
                          <td bgcolor="#009966" align="right"><select class="TabbedPanelsTabHover"  onChange="showRESURS(this.value)">
<option value="0">اختــر نوع البــاب</option>;

<option value="1"> الباب الاول</option>
<option value="2">الباب الثاني</option>
<option value="3">الباب الثالث</option>
<option value="4">الباب الرابع</option>
<option value="5">الباب الخامس</option>
                          </select>
                          <input type="text" id="ares" align="right" name="bab" value="" size="20" />

 </td>
  <td width="150" bgcolor="#009966"> <input type="text" id="aa" align="right" name="date" value="" size="20" /></td>
  <td bgcolor="#009966" align="right"><input type="text" align="right" name="bain" value="" size="20"  /></td>
  
     <td width="172" bgcolor="#009966" align="center"> <input type="text" align="right" name="astm_id" value="" size="10"  /></td>
     
       </tr>
        </table>
           </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><input name="عرض2" type="reset" class="TabbedPanelsTabGroup" style="font-size:16px;" value="مســــــح الخــــــانات"   size="100" height="200" />
                       <input name="Submit" type="submit"   class="style21" style="font-size:16px;" value="اضـــــــــــــــــــافة" onclick="" />
                         <input type="hidden" name="MM_insert" value="form1" />
                       
                        </td>
                    </tr>
                     </form>
                  </table>
                 </div>
                
              </div>
              <div class="AccordionPanel">
                <div class="AccordionPanelTab" align="right"><font size="+1" style="background-color: #996">Label 2</font></div>
                <div class="AccordionPanelContent" align="right">Content 2</div>
              </div>
              <div class="AccordionPanel">
                <div class="AccordionPanelTab" align="right"><font size="+1" style="background-color: #996">Label 3</font></div>
                <div class="AccordionPanelContent">Content 3</div>
              </div>
              <div class="AccordionPanel">
                <div class="AccordionPanelTab" align="right"><font size="+1" style="background-color: #996">Label 4</font></div>
                <div class="AccordionPanelContent" align="right">Content 4</div>
              </div>
              <div class="AccordionPanel">
                <div class="AccordionPanelTab" align="right"><font size="+1" style="background-color: #996">Label 5</font></div>
                <div class="AccordionPanelContent" align="right">Content 5</div>
              </div>
            </div>
          </div>
          <div class="TabbedPanelsContent" align="right">نافذة التحكم
            <div id="Accordion5" class="Accordion" tabindex="0">
              <div class="AccordionPanel" style="background-color: #AAA;">
                <div class="AccordionPanelTab" style="background-color: #CC9"  ><font size="+1" style="background-color: #996">استرجاع حسب التسوية للموارد</font></div>
                <div class="AccordionPanelContent"  >
                <table width="1073" height="305" border="0" align="center">
                    <tr>
                      <td width="1070" height="54" bgcolor="#888888" align="right">
                     <input name=""  type="button" value=" استرجع حسب التسوية" onclick="show_restsweh()" />
                    <input id="resTsweh"  type="text" size="15" value=""  />

 
                  <table width="1076" height="305" border="0">
                 
                 
                    <tr>
                     
                       <td width="1070" height="54" bgcolor="#99CCCC" align="right"> </td>
                    </tr>
             
            
                    <tr>
                      <td height="175" bgcolor="#A0A0A4" align="right"><div id="res"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><hr  width="300"/> <input name="عرض" type="button" value="عــرض"  size="100" height="200" />
                      <input name="مسح" type="button" value="مسح"  size="100" height="200" /><input name="عرض" type="button" value="حفـظ"  size="100" height="200" /><input name="عرض" type="button" value="تعديل"  size="100" height="200" /></td>
                    </tr>
                  </table>
                  </td>
                  </tr>
                  </table></div>
              </div>
              <div class="AccordionPanel"  style="background-color: #AAA;">
                <div class="AccordionPanelTab" align="right" style="background-color: #CC9"><font size="+1" style="background-color: #996">التعديل + الحذف للموارد</font></div>
                <div class="AccordionPanelContent" align="right">
                <table width="1076" height="305" border="0" align="center">
                    <tr>
                 
                      <td  align="right" bgcolor="#888888"><input type="button" onclick="TSW_RESURCE()" value="select"/><input type="text" name="id"  id="ts_res" value="" size="15" />استرجع التسوية المراد تعديلهااوحذفها
                     <div id="rsTS"></div>
                      </td>
                      
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#A0A0A4" align="right">
                     
  <table border="1"  align="right">
    <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="id"  id="RSns" value="" size="32" /></td>
       <td align="right" bgcolor="#00BFAA">ادخل رقم التسوية المراد تعديلها</td>
    </tr>
    <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="name" id="RSnp" value="" size="32" /></td>
       <td align="right" bgcolor="#00BFAA">البيــان</td>
    </tr>
    <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree"  id="RSnd"value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">التاريخ</td>
       </tr>
       <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree" id="RSnb" value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">البــاب</td>
    </tr>
     <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree" id="RSnf" value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">الفصــل</td>
    </tr>
     <tr>
<td bgcolor="#A0A0A4"><input type="text" name="degree" id="RSnbn" value="" size="32" /></td>
 <td  align="right" bgcolor="#00BFAA">البنــد</td>
    </tr>
     <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree" id="RSnt" value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">النــوع</td>
    </tr>
     <tr>
     
      <td height="28" bgcolor="#A0A0A4"><input type="text" name="degree" id="RSnsu" value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">الاجمــالي</td>
    </tr>
  </table>
   <table  align="right">
    <tr>
     
      <td height="47" bgcolor="#ABADB3"><input type="text" name="id"  id="delet_ts_res" value="" size="32" /></td>
       <td align="right" bgcolor="#00BFAA">ادخل رقم التسوية المراد  حذفها</td>
    </tr>
  </table>
 </td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><hr  width="300"/>
                       <input name="عرض" type="button" value="حـــــــــــــــــــــــــذف"  size="100" height="200" onclick="Delete_TS_RES()" />
                    <input name="عرض" type="button" value="تعديــــــــــــــــــــــــــل"  size="100" height="200" onclick="updata_ts_RS()" />
                    <input name="resurce" type="reset"  value="مسح الخانات"   size="100" height="200" />
                    </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #AAA;">
                <div class="AccordionPanelTab" style="background-color: #CC9"><font size="+1" style="background-color: #996">الاسترجاع من تاريخ الي تاريخ</font></div>
                <div class="AccordionPanelContent" align="right">
                                  <table width="1076" height="305" border="0" align="center" >
                    <tr>
                      <td width="1070" height="54" bgcolor="#888888" align="right">
                        <hr/>
                        <table width="548" border="0">
                          <tr>
                            <td width="144" bgcolor="#AAAAAA"><input type="text" id="into_res"/></td>
                            <td width="20" bgcolor="#EEEEEE"><center> <input type="button" value=" التاريخ" onclick="DATE_RESURCE()" />
                              <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4">الى</font></span>
                            </center></td>
                            <td width="144" bgcolor="#AAAAAA"><input type="text"  id="from_res"/>
                             </td>
                            <td width="16" bgcolor="#EEEEEE"><center>
                              <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">من</font></span>
                            </center></td>
                            <td width="190" bgcolor="#AAAAAA"><center>
                              <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">أدخل التاريخ 
                              </font></span>
                            </center></td>
                          </tr>
                          <tr></tr>
                        </table>
                        <p></p></td>
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#AAAAAA" align="right"><div id="dd_RES"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><hr  width="300"/>
                       </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #AAA;">
                <div class="AccordionPanelTab" style="background-color: #CC9"><font size="+1" style="background-color: #996">Label 4</font></div>
                <div class="AccordionPanelContent" align="right"> </div>
              </div>
              <div class="AccordionPanel" style="background-color: #AAA;">
                <div class="AccordionPanelTab" style="background-color: #CC9"> <font size="+1" style="background-color: #996">الاسترجاع با لكامل </font></div>
                <div class="AccordionPanelContent" align="right">
                 <table width="1076" height="305" border="0" align="center" >
                    <tr>
                      <td width="1070" height="54" bgcolor="#888888" align="right">
                      <input type="button" value="select all" onclick="show_all()" />
                      <input type="text" id="s" />
                        <hr/>
                        <table width="548" border="0">
                          <tr>
                           <td>
                          
                           </td>
                            
                            
                            
                          </tr>
                          <tr>
                          <td> </td>
                          </tr>
                        </table>
                        <p></p></td>
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#AAAAAA" align="right"><div id="dd_RES"></div><div id="all"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><hr  width="300"/>
                       </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="TabbedPanelsContent" align="right"> <font size="+2">نافذة التقارير </font>  
            <div id="Accordion6" class="Accordion" tabindex="0">
              <div class="AccordionPanel" style="background-color: #7F7F55;">
                <div class="AccordionPanelTab" style="background-color: #CC9;"> <font size="+1" style="background-color: #996">تقرير على حسب الباب</font></div>
                <div class="AccordionPanelContent" align="right">
                 <table width="1076" height="305" border="0" align="center">
                
                    <tr>
                      <td width="1076" height="54"  bgcolor="#888888"  align="center">
                      
    <input type="text" id="bab_RES"  />
    
      <input type="button" value="اجمـــالي حسب البـــاب" onclick="showbab_RESURCES()" />

 </td>
                      
                    </tr>
                  
                    <tr>
                   
                      <td height="250" bgcolor="#AAAAAA" align="right"> <div id="sumb_RES" align="center"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888"  align="center" valign="middle"><hr  width="300"/> </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #7F7F55;">
                <div class="AccordionPanelTab" style="background-color: #CC9"><font size="+1" style="background-color: #996">اجمالي الموارد العامة</font></div>
                <div class="AccordionPanelContent" align="right">
                <table width="1076" height="305" border="0" align="center">
                    <tr>
                      <td width="1070" height="54" bgcolor="#888888" align="center"><input type="button" class="TabbedPanelsContent" value="تقـــرير إجمـــالي الموارد العـــامة " onclick="showall_RESURCES()" /></td>
                      <hr/>
                        </p>
                    </tr>
                    <tr>
                      <td height="250" bgcolor="#AAAAAA"  align="center"><div id="allbab_RES" align="center"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><hr  width="300"/> </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #7F7F55;">
                <div class="AccordionPanelTab" align="right" style="background-color: #CC9"><font size="+1" style="background-color: #996">التقرير اليومي</font></div>
                <div class="AccordionPanelContent" align="right" >
               <table width="1076" height="305" border="0" align="center">
                    <tr>
                      <td width="1070" height="54" bgcolor="#888888" align="right"><input type="button" value="REPORT DAY" onclick="REPORTRES()" />
                       <input type="text" id="TT" /></td>
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#AAAAAA" align="right"><div id="rr"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#888888" align="center" valign="middle"><hr  width="300"/> </td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel" style="background-color: #7F7F55;">
                <div class="AccordionPanelTab" style="background-color: #CC9"><font size="+1" style="background-color: #996">Label 4</font></div>
                <div class="AccordionPanelContent">Content 4</div>
              </div>
              <div class="AccordionPanel" style="background-color: #7F7F55;">
                <div class="AccordionPanelTab" style="background-color: #CC9"><font size="+1" style="background-color: #996">Label 5</font></div>
                <div class="AccordionPanelContent" align="right">Content 5</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</td>
  
 </tr>
  
</table>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
var Accordion2 = new Spry.Widget.Accordion("Accordion2");
var Accordion3 = new Spry.Widget.Accordion("Accordion3");
var Accordion4 = new Spry.Widget.Accordion("Accordion4");
var Accordion5 = new Spry.Widget.Accordion("Accordion5");
var Accordion6 = new Spry.Widget.Accordion("Accordion6");
</script>
</body>
</html>