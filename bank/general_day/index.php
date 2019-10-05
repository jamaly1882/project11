<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script src="jquery/jquery.min.js">
</script>

<script>function validate_form() { 
    valid = true;
	 if ( document.a.amount.value == "" ) { 
	alert ( "Please enter the video of user." );
	valid = false; 
	 }
	 else if ( document.a.data.value == "" ) { 
	alert ( "Please enter THE exp1 of user." ); 
	valid = false;
	 }
	 if ( document.a.year.value == "" ) { 
	alert ( "Please enter the video of user." );
	valid = false; 
	 }
	 else if ( document.a.month.value == "" ) { 
	alert ( "Please enter THE exp1 of user." ); 
	valid = false;
	 }
	 
	  if ( document.a.day.value == "" ) { 
	alert ( "Please enter the video of user." );
	valid = false; 
	 }
	 else if ( document.a.num_form.value == "" ) { 
	alert ( "Please enter THE exp1 of user." ); 
	valid = false;
	 }
    
	return valid;
}
</script>
<script>

		function reportes_select(num){
			
document.getElementById("k").style.visibility="visible";
	 document.getElementById("y").style.visibility="visible";
	

	 if(num==1){num=1;
	 	alert(num);
	 document.getElementById("monthe").value=1;
	 }
	
	else{
		
		num1=num-1;
		alert(num1);
	 document.getElementById("monthe").value=num1;
		}
		}
</script>
<script>

		function reporte_show(num){
		if(num=="main_accounts"){	
		alert("main_accounts");
		//document.getElementById("tjd").style.height=400;
		document.getElementById("ww").height=70;
		document.getElementById("show1").style.height=50;
document.getElementById("show1").style.visibility="visible";
document.getElementById("show2").style.visibility="hidden";
document.getElementById("show2").style.height=0;
document.getElementById("show3").style.visibility="hidden";
document.getElementById("show3").style.height=0;
document.getElementById("show4").style.visibility="hidden";
document.getElementById("show4").style.height=0;
document.getElementById("show5").style.visibility="hidden";
document.getElementById("show5").style.height=0;
document.getElementById("show6").style.visibility="hidden";
document.getElementById("show6").style.height=0;
document.getElementById("show7").style.visibility="hidden";
document.getElementById("show7").style.height=0;
document.getElementById("show8").style.visibility="hidden";
document.getElementById("show8").style.height=0;


	// document.getElementById("y").style.visibility="visible";
		}
		if(num=="help_m_accounts"){	
		alert("help_m_accounts");
		
		//document.getElementById("tjd").style.height=100;
			document.getElementById("ww").height=70;
			document.getElementById("show2").style.height=50;
			document.getElementById("show1").style.height=0;
document.getElementById("show3").style.height=0;

document.getElementById("show2").style.visibility="visible";
document.getElementById("show1").style.visibility="hidden";
document.getElementById("show3").style.visibility="hidden";
document.getElementById("show4").style.visibility="hidden";
document.getElementById("show4").style.height=0;
document.getElementById("show5").style.visibility="hidden";
document.getElementById("show5").style.height=0;
document.getElementById("show6").style.visibility="hidden";
document.getElementById("show6").style.height=0;
document.getElementById("show7").style.visibility="hidden";
document.getElementById("show7").style.height=0;
document.getElementById("show8").style.visibility="hidden";
document.getElementById("show8").style.height=0;


	// document.getElementById("y").style.visibility="visible";
		}
		if(num=="help_d_accounts"){	
		alert("help_d_accounts");
		document.getElementById("ww").height=70;
		
			document.getElementById("show3").style.height=50;
document.getElementById("show3").style.visibility="visible";
document.getElementById("show1").style.visibility="hidden";
document.getElementById("show2").style.visibility="hidden";
document.getElementById("show1").style.height=0;
document.getElementById("show2").style.height=0;
document.getElementById("show4").style.visibility="hidden";
document.getElementById("show4").style.height=0;
document.getElementById("show5").style.visibility="hidden";
document.getElementById("show5").style.height=0;
document.getElementById("show6").style.visibility="hidden";
document.getElementById("show6").style.height=0;
document.getElementById("show7").style.visibility="hidden";
document.getElementById("show7").style.height=0;
document.getElementById("show8").style.visibility="hidden";
document.getElementById("show8").style.height=0;


	// document.getElementById("y").style.visibility="visible";
		}
		if(num=="translation_m_accounts"){	
		alert("translation_m_accounts");
		document.getElementById("ww").height=70;
		
			document.getElementById("show4").style.height=50;
document.getElementById("show4").style.visibility="visible";
document.getElementById("show1").style.visibility="hidden";
document.getElementById("show2").style.visibility="hidden";
document.getElementById("show3").style.visibility="hidden";
document.getElementById("show1").style.height=0;
document.getElementById("show2").style.height=0;
document.getElementById("show3").style.height=0;
document.getElementById("show5").style.visibility="hidden";
document.getElementById("show5").style.height=0;
document.getElementById("show6").style.visibility="hidden";
document.getElementById("show6").style.height=0;
document.getElementById("show7").style.visibility="hidden";
document.getElementById("show7").style.height=0;
document.getElementById("show8").style.visibility="hidden";
document.getElementById("show8").style.height=0;



	// document.getElementById("y").style.visibility="visible";
		}
		if(num=="translation_d_accounts"){	
		alert("translation_d_accounts");
		document.getElementById("ww").height=70;
		
			document.getElementById("show5").style.height=50;
document.getElementById("show5").style.visibility="visible";
document.getElementById("show1").style.visibility="hidden";
document.getElementById("show2").style.visibility="hidden";
document.getElementById("show3").style.visibility="hidden";
document.getElementById("show1").style.height=0;
document.getElementById("show2").style.height=0;
document.getElementById("show3").style.height=0;
document.getElementById("show4").style.visibility="hidden";
document.getElementById("show4").style.height=0;
document.getElementById("show6").style.visibility="hidden";
document.getElementById("show6").style.height=0;
document.getElementById("show7").style.visibility="hidden";
document.getElementById("show7").style.height=0;
document.getElementById("show8").style.visibility="hidden";
document.getElementById("show8").style.height=0;



	// document.getElementById("y").style.visibility="visible";
		}
	if(num=="system_accounts"){	
		alert("system_accounts");
		document.getElementById("ww").height=70;
		
			document.getElementById("show6").style.height=50;
document.getElementById("show6").style.visibility="visible";
document.getElementById("show1").style.visibility="hidden";
document.getElementById("show2").style.visibility="hidden";
document.getElementById("show3").style.visibility="hidden";
document.getElementById("show1").style.height=0;
document.getElementById("show2").style.height=0;
document.getElementById("show3").style.height=0;
document.getElementById("show4").style.visibility="hidden";
document.getElementById("show4").style.height=0;
document.getElementById("show5").style.visibility="hidden";
document.getElementById("show5").style.height=0;
document.getElementById("show7").style.visibility="hidden";
document.getElementById("show7").style.height=0;
document.getElementById("show8").style.visibility="hidden";
document.getElementById("show8").style.height=0;



	// document.getElementById("y").style.visibility="visible";
		}	
		if(num=="ragabih_accounts"){	
		alert("ragabih_accounts");
		document.getElementById("ww").height=70;
		
			document.getElementById("show7").style.height=50;
document.getElementById("show7").style.visibility="visible";
document.getElementById("show1").style.visibility="hidden";
document.getElementById("show2").style.visibility="hidden";
document.getElementById("show3").style.visibility="hidden";
document.getElementById("show1").style.height=0;
document.getElementById("show2").style.height=0;
document.getElementById("show3").style.height=0;
document.getElementById("show4").style.visibility="hidden";
document.getElementById("show4").style.height=0;
document.getElementById("show5").style.visibility="hidden";
document.getElementById("show5").style.height=0;
document.getElementById("show6").style.visibility="hidden";
document.getElementById("show6").style.height=0;
document.getElementById("show8").style.visibility="hidden";
document.getElementById("show8").style.height=0;



	// document.getElementById("y").style.visibility="visible";
		}
		
		if(num=="all"){	
		alert("all");
		document.getElementById("ww").height=70;
		
			document.getElementById("show8").style.height=50;
document.getElementById("show8").style.visibility="visible";
document.getElementById("show1").style.visibility="hidden";
document.getElementById("show2").style.visibility="hidden";
document.getElementById("show3").style.visibility="hidden";
document.getElementById("show1").style.height=0;
document.getElementById("show2").style.height=0;
document.getElementById("show3").style.height=0;
document.getElementById("show4").style.visibility="hidden";
document.getElementById("show4").style.height=0;
document.getElementById("show5").style.visibility="hidden";
document.getElementById("show5").style.height=0;
document.getElementById("show6").style.visibility="hidden";
document.getElementById("show6").style.height=0;
document.getElementById("show7").style.visibility="hidden";
document.getElementById("show7").style.height=0;



	// document.getElementById("y").style.visibility="visible";
		}
		}
</script>
<script>

		function reporte_select(num){
			

   
	 
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
	    }
  }
  monthe= document.getElementById("monthe").value
year=document.getElementById("year").value;

  alert(num);
if(num==1){  

  document.getElementById("monthe1").value=monthe;
document.getElementById("year1").value=year;
document.getElementById("num1").value=1;
xmlhttp.open("GET","reportes_select.php?monthe="+monthe+"&year="+year,true);
xmlhttp.send();}
if(num==2){  

 alert(monthe);
   document.getElementById("monthe2").value=monthe;
document.getElementById("year2").value=year;
document.getElementById("num2").value=2;
xmlhttp.open("GET","reportes_select2.php?monthe1="+monthe+"&year1="+year,true);
xmlhttp.send();}
if(num==3){  
 document.getElementById("monthe3").value=monthe;
document.getElementById("year3").value=year;
document.getElementById("num3").value=3;
xmlhttp.open("GET","reportes_select3.php?monthe="+monthe+"&&year="+year,true);
xmlhttp.send();}
if(num==4){  
 document.getElementById("monthe4").value=monthe;
document.getElementById("year4").value=year;
document.getElementById("num4").value=4;
xmlhttp.open("GET","reportes_select4.php?monthe="+monthe+"&&year="+year,true);
xmlhttp.send();}
if(num==5){  
 document.getElementById("monthe5").value=monthe;
document.getElementById("year5").value=year;
document.getElementById("num5").value=5;
xmlhttp.open("GET","reportes_select5.php?monthe="+monthe+"&&year="+year,true);
xmlhttp.send();}
if(num==6){  
 document.getElementById("monthe6").value=monthe;
document.getElementById("year6").value=year;
document.getElementById("num6").value=6;
xmlhttp.open("GET","reportes_select6.php?monthe="+monthe+"&&year="+year,true);
xmlhttp.send();}
if(num==7){  
 document.getElementById("monthe7").value=monthe;
document.getElementById("year7").value=year;
document.getElementById("num7").value=7;
xmlhttp.open("GET","reportes_select7.php?monthe="+monthe+"&&year="+year,true);
xmlhttp.send();}
if(num==8){  
 document.getElementById("monthe8").value=monthe;
document.getElementById("year8").value=year;
document.getElementById("num8").value=8;

 alert(monthe);
  alert(year);
xmlhttp.open("GET","reportes_select8.php?monthe="+monthe+"&&year="+year,true);
xmlhttp.send();}
}
</script>

<script>
function check_term_resources(f){	

	document.getElementById("termss_ws").value=f;
	n=document.getElementById("termss_ws").value;
	alert(n);
	document.getElementById("type_term").style.backgroundColor="#9CF";
	
	
}</script>
<script>
$(document).ready(function(){
  $(".ts").click(function(){
$("#type_s").hide();
$("#type_aq").hide();
 $("#type_ts").show();});
 
$(".s").click(function(){
$("#type_ts").hide();
$("#type_aq").hide();
 $("#type_s").show();});
 
 $(".aq").click(function(){
$("#type_ts").hide();
 $("#type_s").hide();
  $("#type_aq").show();
 
  });});
</script>
<script>
function check_term(f){	

	document.getElementById("termss_ws").value=f;
	document.getElementById("type_term").style.backgroundColor="#9CF";
	
	document.getElementById("typeid").style.visibility="visible";

}
function visble(f){	
document.getElementById(f).style.visibility="visible";

document.getElementById("opmaine").innerHTML=f;
}




function getcontent_ts(num){
	document.getElementById("opsub").innerHTML=num;
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
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    }
  }
  

	   if(num=='t1'&&document.getElementById("RadioGroup1_0").checked){
xmlhttp.open("GET","taswiat.php",true);
xmlhttp.send();
}
else if(num=='t2'&&document.getElementById("RadioGroup1_0").checked){
alert("لا توجد عملية تحصيل عند التسديد بوثائق ");}

else if(num=='t3'&&document.getElementById("RadioGroup1_0").checked){
xmlhttp.open("GET","taswiat_chaik.php",true);
xmlhttp.send();
}


	else if(num=='t1'&&document.getElementById("RadioGroup1_1").checked){
xmlhttp.open("GET","taswiat_bank.php",true);
}
else if(num=='t2'&&document.getElementById("RadioGroup1_1").checked){
xmlhttp.open("GET","taswiat_document_bank.php",true);
}

else if(num=='t3'&&document.getElementById("RadioGroup1_1").checked){
xmlhttp.open("GET","taswiat_chaik_bank.php",true);
}


else{
	alert(" الرجاء اختيار نوع عملية التسويه هل تحصيل ام توريد");
	}
xmlhttp.send();
	}
	
	
	
	function getcontent_s(num){
		document.getElementById("opsub").innerHTML=num;
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
	 document.getElementById("content").innerHTML=xmlhttp.responseText;
   }
  }
if(num=="s"){  
xmlhttp.open("GET","sarfe.php",true);
xmlhttp.send();}
else if(num=="e"){  
xmlhttp.open("GET","sarf_end.php",true);
xmlhttp.send();}


	}
	
		function getcontent_aq(num){
			document.getElementById("opsub").innerHTML=num;
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
    document.getElementById("content").innerHTML=xmlhttp.responseText;
    
  document.getElementById("content").innerHTML=xmlhttp.responseText;
   }
  }
  if(num=='q1'){
xmlhttp.open("GET","aqfal_day.php",true);
xmlhttp.send();}
if(num=='q2'){
xmlhttp.open("GET","aqfal_end.php",true);
xmlhttp.send();}
if(num=='qs2'){
xmlhttp.open("GET","dont_paided.php",true);
xmlhttp.send();}
 if(num=='q3'){
xmlhttp.open("GET","aqfal_pref.php",true);
xmlhttp.send();}
  if(num=='qs1'){
xmlhttp.open("GET","uses_realy.php",true);
xmlhttp.send();}
 

	}
	function getaccount1(num){
   	if(num==111){document.getElementById("resources").value=1;
		document.getElementById("gmss").value=11;
		document.getElementById("termgm").value=1;
}
		else if(num==112){document.getElementById("resources").value=2;
		document.getElementById("gmss").value=11;
		document.getElementById("termgm").value=1;}
		else if(num==113){document.getElementById("resources").value=3;
		document.getElementById("gmss").value=11;
		document.getElementById("termgm").value=1;}
		else if(num==114){document.getElementById("resources").value=4;
		document.getElementById("gmss").value=11;
		document.getElementById("termgm").value=1;}
		else if(num==115){document.getElementById("resources").value=5;
		document.getElementById("gmss").value=11;
		document.getElementById("termgm").value=1;}
			else if(num==121){document.getElementById("uses").value=1;
		document.getElementById("gmss").value=12;
		document.getElementById("termgm").value=1;
}
		else if(num==122){document.getElementById("uses").value=2;
		document.getElementById("gmss").value=12;
		document.getElementById("termgm").value=1;}
		else if(num==123){document.getElementById("uses").value=3;
		document.getElementById("gmss").value=12;
		document.getElementById("termgm").value=1;}
		else if(num==124){document.getElementById("uses").value=4;
		document.getElementById("gmss").value=12;
		document.getElementById("termgm").value=1;}
		else if(num==125){document.getElementById("uses").value=5;
		document.getElementById("gmss").value=12;
		document.getElementById("termgm").value=1;}
		else{
		document.getElementById("gmss").value=num;
		document.getElementById("termgm").value=1;}
	}
	function getaccount2(num){
		if(num==111){document.getElementById("resources").value=1;
		document.getElementById("gdss").value=11;
		document.getElementById("termgd").value=2;
}
		else if(num==112){document.getElementById("resources").value=2;
		document.getElementById("gdss").value=11;
		document.getElementById("termgd").value=2;}
		else if(num==113){document.getElementById("resources").value=3;
		document.getElementById("gdss").value=11;
		document.getElementById("termgd").value=2;}
		else if(num==114){document.getElementById("resources").value=4;
		document.getElementById("gdss").value=11;
		document.getElementById("termgd").value=2;}
		else if(num==115){document.getElementById("resources").value=5;
		document.getElementById("gdss").value=11;
		document.getElementById("termgd").value=2;}
			else if(num==121){document.getElementById("uses").value=1;
		document.getElementById("gdss").value=12;
		document.getElementById("termgd").value=2;
}
		else if(num==122){document.getElementById("uses").value=2;
		document.getElementById("gdss").value=12;
		document.getElementById("termgd").value=2;}
		else if(num==123){document.getElementById("uses").value=3;
		document.getElementById("gdss").value=12;
		document.getElementById("termgd").value=2;}
		else if(num==124){document.getElementById("uses").value=4;
		document.getElementById("gdss").value=12;
		document.getElementById("termgd").value=2;}
		else if(num==125){document.getElementById("uses").value=5;
		document.getElementById("gdss").value=12;
		document.getElementById("termgd").value=2;}
		else{
		document.getElementById("gdss").value=num;
		document.getElementById("termgd").value=2;}
 	}</script>
	<script>
		function insert(num){
			
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
    {    document.getElementById("opmaine").innerHTML=xmlhttp.responseText;
    }
  }
 
if(num==1){xmlhttp.open("GET","insert1.php",true);
xmlhttp.send();}
else if(num==2){
	 xmlhttp.open("GET","insert.php",true);
xmlhttp.send();}

 
 



	}
	

</script>
<script>
		function inserty(){
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
    document.getElementById("oo").innerHTML="kk";
    }
  }
  
 value=document.getElementById("value").value;
 month=document.getElementById("month").value;
 day=document.getElementById("day").value;
 year=document.getElementById("year").value;
 num=document.getElementById("num").value;
 data=document.getElementById("data").value;
	 xmlhttp.open("POST","insert.php?num="+num,true);
xmlhttp.send();

	}</script>
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
	 xmlhttp.open("GET","storg_sarf.php",true);
xmlhttp.send();

 

	}</script>
<script>
		function sarf_insert(num){
			
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
 
if(num==1){
	 alert("sarf");
	 xmlhttp.open("GET","insert_paided.php",true);
xmlhttp.send();
}
else if(num==2){
	alert("sarf");
	 xmlhttp.open("GET","insert_paided_ts.php",true);
xmlhttp.send();
	}
 

	}

</script>
<script>
		function term_help_madinah(){
			
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
    document.getElementById("terms").innerHTML=xmlhttp.responseText;
    }
  }
 


	 var type=document.getElementById("termss_ws").value;
	 	
	 if(document.getElementById("Radio4").checked && type=="gm"){
	 xmlhttp.open("GET","terms_help_m_s_gm.php",true);
xmlhttp.send();}
if(document.getElementById("Radio4").checked && type=="gd"){
	 xmlhttp.open("GET","terms_help_m_s_gd.php",true);
xmlhttp.send();}

 if(document.getElementById("Radio5").checked && type=="gm"){
	 xmlhttp.open("GET","terms_help_m_ts_gm.php",true);
xmlhttp.send();}
if(document.getElementById("Radio5").checked && type=="gd"){
	 xmlhttp.open("GET","terms_help_m_gd.php",true);
xmlhttp.send();}

	}</script>
<script>
		function term_help_danah(){
			
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
    document.getElementById("terms").innerHTML=xmlhttp.responseText;
    }
  }
 

	
	var type=document.getElementById("termss_ws").value;
	if(type=="gm"){
	 xmlhttp.open("GET","terms_help_d_gm.php",true);
xmlhttp.send();}
else if(type=="gd"){

 xmlhttp.open("GET","terms_help_d_gd.php",true);
xmlhttp.send();}
 

	
	else if(type==""){

 alert("اختر الجانب");}
 
	}

</script>

<script>
		function main_account(){
			
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
    document.getElementById("terms").innerHTML=xmlhttp.responseText;
    }
  }
 
var type=document.getElementById("termss_ws").value;
	 	
	 if(document.getElementById("Radio4").checked && type=="gm"){
	 xmlhttp.open("GET","main_account_s_gm.php",true);
xmlhttp.send();}
if(document.getElementById("Radio4").checked && type=="gd"){
	 xmlhttp.open("GET","main_account_s_gd.php",true);
xmlhttp.send();}

 if(document.getElementById("Radio5").checked && type=="gm"){
	 xmlhttp.open("GET","main_account_ts_gm.php",true);
xmlhttp.send();}
if(document.getElementById("Radio5").checked && type=="gd"){
	 xmlhttp.open("GET","main_account_ts_gd.php",true);
xmlhttp.send();}
	
	

	
	else if(type==""){

 alert("اختر الجانب");}
 
	}

</script>

<script>
		function wwww(num){
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
  alert(111);
 if(num==1){
	 xmlhttp.open("GET","form.php",true);
xmlhttp.send();}
else if(num==2){
	 xmlhttp.open("GET","ts.php",true);
xmlhttp.send();
	}
	else if(num==3){
	 xmlhttp.open("GET","returned_out.php",true);
xmlhttp.send();
	}
	}

</script>
<script>
		function resources_update1(){
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
    document.getElementById("up").innerHTML=xmlhttp.responseText;
    }
  }
  
 value=document.getElementById("valuup").value;
 month=document.getElementById("monthup").value;
 day=document.getElementById("dayup").value;
 year=document.getElementById("yearup").value;
 num=document.getElementById("numup").value;
 data=document.getElementById("dataup").value;
ganp=document.getElementById("gn").value;
 
	  

 
 xmlhttp.open("GET","update2.php?num="+num+"&data="+data+"&day="+day+"&month="+month+"&year="+year+"&value="+value+"&term="+ganp,true);
xmlhttp.send();
	}

</script>


<script>
		function updatets(){
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
    document.getElementById("up").innerHTML=xmlhttp.responseText;
    }
  }
  
 value=document.getElementById("valuup").value;
 month=document.getElementById("monthup").value;
 day=document.getElementById("dayup").value;
 year=document.getElementById("yearup").value;
 num=document.getElementById("numup").value;
 data=document.getElementById("dataup").value;
ganp=document.getElementById("gn").value;
   
 
	 xmlhttp.open("GET","update.php?num="+num+"&data="+data+"&day="+day+"&month="+month+"&year="+year+"&value="+value,true);
xmlhttp.send();

	}
	
		function ts(){
			
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
    document.getElementById("returned_ts").innerHTML=xmlhttp.responseText;
    }
  }

   var fo=document.getElementById("ts").value;
    var termgd=document.getElementById("Check0").checked;
 var termgm=document.getElementById("Check1").checked;
 alert(document.getElementById("Check1").checked);
 if(document.getElementById("Check1").checked){
	 term=1;
	 alert(term);
	 xmlhttp.open("GET","resources_out_select_ts.php?term_w="+fo+"&&ganb="+term,true);
xmlhttp.send();
	 }
	 else if(document.getElementById("Check0").checked){term=2;
	 
	 alert(term);
	 xmlhttp.open("GET","resources_out_select_ts.php?term_w="+fo+"&&ganb="+term,true);
xmlhttp.send();}
	 else if(document.getElementById("Check1").checked=="true"&&document.getElementById("Check0").checked=="true"){ 
	 alert(" الرجاء اختياراحد الجانبين جانب مدين ام جانب دائن");

	 }
	 
 else if(termgm!="true"&&termgd!="true"){ 
	 alert(" الرجاء اختيار نوع عملية الاسترجاع هل جانب مدين ام جانب دائن");

	 }


	}

</script>
<script>
		function returned(){
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
 alert("sarf");
	 xmlhttp.open("GET","returned_out.php",true);
xmlhttp.send();
	}

</script>
<script>
function checkyear(q){
if(q>2045){alert("الرجاء ادخال سنة اقل من 2045")
document.getElementById("year").value="";
}	
	}
	
	function checkvalue(q){
if(q<-1){alert("الرجاء عدم ادخال قيمة سالبة")
document.getElementById("value").value="";
}	
	}
	function checkmonth(g){
if(g>12){alert("الرجاء ادخال شهر اقل من 12")
document.getElementById("month").value="";
}	
	}
	function checkday(g){
if(g>31 & g!=0){alert("الرجاء ادخال يوم اقل من 31")
document.getElementById("day").value="";
}	
	}
</script>
<script>
		function page_opreation17(){
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
    document.getElementById("reportes").innerHTML=xmlhttp.responseText;
    }
  }
 alert("sarf");
	 xmlhttp.open("GET","page_opreation17.php",true);
xmlhttp.send();
	}

</script>

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
    document.getElementById("returned_form").innerHTML=xmlhttp.responseText;
    }
  }

   var fo=document.getElementById("form").value;
    var termgd=document.getElementById("Check0").checked;
 var termgm=document.getElementById("Check1").checked;
 alert(document.getElementById("Check1").checked);
 if(document.getElementById("Check1").checked){
	 term=1;
	 alert(term);
	 xmlhttp.open("GET","resources_out_select.php?term_w="+fo+"&&ganb="+term,true);
xmlhttp.send();
	 }
	 else if(document.getElementById("Check0").checked){term=2;
	 
	 alert(term);
	 xmlhttp.open("GET","resources_out_select.php?term_w="+fo+"&&ganb="+term,true);
xmlhttp.send();}
	 else if(document.getElementById("Check1").checked=="true"&&document.getElementById("Check0").checked=="true"){ 
	 alert(" الرجاء اختياراحد الجانبين جانب مدين ام جانب دائن");

	 }
	 
 else if(termgm!="true"&&termgd!="true"){ 
	 alert(" الرجاء اختيار نوع عملية الاسترجاع هل جانب مدين ام جانب دائن");

	 }


	}

</script>
<script>
		function page_opreation16(){
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
    document.getElementById("reportes").innerHTML=xmlhttp.responseText;
    }
  }
 alert("sarf");
	 xmlhttp.open("GET","page_opreation16.php",true);
xmlhttp.send();
	}

</script>


</head>

<body>
<table width="100%" border="2" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center">
     <img src="image/pub_garden.jpg" width="500" align="middle" height="200" /></td>
  </tr>
  
  <tr>

<table width="100%" align="center" border="1" cellspacing="0" cellpadding="0" >
<tr align="center" >

<td width="83%" height="200">
  <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
       <li class="TabbedPanelsTab" tabindex="0"><font  size="+1">أدخـــــــــــــال</font></li>
      <li class="TabbedPanelsTab" tabindex="0"><font size="+1">تـــحكـــم</font></li>
   </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
      <table  align="center" width="90%" height="200" border="1">
  <tr>
  <div style="background-color:#3CF">
  <input name="" class="s" style="font-size:18px;"   onclick="visble('type_s')" type="button" value="صـــــرف" />
      <input name="" class="aq" style="font-size:18px;" onclick="visble('type_aq')" type="button" value="أقـــفــــــــال" />
     <input name="" class="ts" style="font-size:18px;" onclick="visble('type_ts')" type="button" value="تـــــسويـــات" /></div>
     <hr color="#000000" />
     <td width="20%">
<div id="oo"></div>
<select name=""  onchange="getcontent_ts(this.value);" id="type_ts" style="font-size:18px; visibility:hidden;"   class="TabbedPanelsTabHover"  >
      <option >نــوع الــتسديد</option>
    <option value="t1" >التــسديــد نقدا</option>
     <option value="t2">التــسديد بوثائق</option>
      <option value="t3">التــسديد بشيــكات</option>
    </select>
    <select name=""  onchange="getcontent_s(this.value);" id="type_s" style="font-size:18px; visibility:hidden;"   class="TabbedPanelsTabHover"  >
      <option >نــوع الصرف</option>
    <option value="e"  >صــرف نهائــي</option>
     <option value="s">صـــرف ســلفـه</option>
    </select>
<select name=""  onchange="getcontent_aq(this.value);" id="type_aq" style="font-size:18px; visibility:hidden;"   class="TabbedPanelsTabHover"  >
      <option >نــوع الاقـفــال</option>
    <option value="q1"  >الموارد الفعليه</option>
     <option value="qs1"  >الحسابات الاستخدمات الفعليه</option>
     <option value="qs2">المبالغ التي لم نسد حتى نهاية السنه</option>
     <option value="q2">الموارد الفعلية </option>
     <option value="q3">في السنه الجديده\لسنه سابقه</option>

    </select>
    <br />

    </td>
    <td valign="bottom" align="right"> 
     <div  id="content"></div>
    </td>
     <td align="center" width="10%" height="200" valign="middle">
   
     <p>
       <label>
         <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0" />
         تحصــــــيل</label>
        <hr color="#000000" />
       <br />
       <label>
         <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1" />
         تــــــــوريــد</label>
       <br />
     </p>


     </td>
  </tr>
</table>
<var id="opmaine"></var>
<var id="opsub"></var>
</div>
      <div class="TabbedPanelsContent">
      
        <div id="TabbedPanels2" class="TabbedPanels">
          <ul class="TabbedPanelsTabGroup1">
            <li class="TabbedPanelsTab" style="position:relative; right:500px;" tabindex="0"><font size="+1">مفـــردات</font></li>
            <li class="TabbedPanelsTab" style="position:relative; right:500px;" tabindex="0"><font size="+1">بحث و تعديل</font></li>
            <li class="TabbedPanelsTab" style="position:relative; right:500px;" tabindex="0"><font size="+1">تقارير نهائي</font></li>

          </ul>
          <div class="TabbedPanelsContentGroup">
            <div class="TabbedPanelsContent">
              <form id="form1" name="form1" method="post" action="" >
                <table width="100%"  border="0" height="100%" style="background-color:#0CF;">
                <br />
                  <tr>
                    <td align="center"><label><font size="+1">مفردات مساعده دائنه</font>
                      <input type="radio" onclick="term_help_danah()" name="RadioGroup2" value="" id="RadioGroup2_0" />
                      </label></td>
                  
                    <td align="center"><label><font size="+1"> مفردات مساعده مدينه</font>
                      <input  type="radio"  onclick="term_help_madinah()" name="RadioGroup2" value="" id="RadioGroup2_1" />
                     </label></td>
                  
                    <td align="center"><label> <font size="+1"> حسابات رئيسيه</font>
                      <input type="radio"  onclick="main_account()" name="RadioGroup2" value="" id="RadioGroup2_2" />
                    </label></td>
                
               
                  </tr>
                </table>
              </form>
              <table><tr>
                  <br />
                  <td  colspan="3" align="center">
                  <select name=""   onchange="check_term(this.value);" id="type_term" style="font-size:18px;"   class="TabbedPanelsTabHover"  >
     <option >نــوع الجانب المطلوب</option>
    <option value="gm"  >جانـــــب مــــديـــن</option>
     <option value="gd"  >جانـــب دائــــن</option>
     
    </select> </td>
    <td> <table id="typeid" width="200"  style="visibility:hidden;">
      <tr>
        <td><label>
          <input type="radio" name="RadioGroup4" value="radio" id="Radio4" />
          صرفيات</label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="RadioGroup4" value="radio" id="Radio5" />
          تسويات</label></td>
      </tr>
    </table></td>
    </tr></table>
    <div style="background-color:#969696;">
    <table width="50%" style="background-color:#E9E9E9" border="1">
  <tr>
    <td><div id="terms"></div></td>
  </tr>
</table></div>

            </div>
            <div class="TabbedPanelsContent">
             <table align="center"><tr>
                  <br />
                  <td  align="center">
                 <select onchange="wwww(this.value)"  name="edite" style="font-size:18px;" id="edite">      <option >اختر نــوع  البحث </option>
    <option value=1> حسب الاستمارة</option>
     <option value=2> التسوية</option>
     
    </select> 

    </td></tr></table>




              
              <div style="background-color:#969696;">
    <table width="50%" style="background-color:#E9E9E9" border="1">
    <div id="up"></div>
  <tr>
    <td><div id="resource"></div></td>
  </tr>
</table></div>
               
            </div>
          
             <div class="TabbedPanelsContent">
               <form id="form3" name="form3" method="post" action="">
                 <table width="200">
                   <tr>
                     <td><label><font size="+1"> صفحة العمليات 17</font>
                       <input type="radio" name="RadioGroup5"  onclick="page_opreation17()" value="radio" id="RadioGroup5_0" />
                       </label></td>
                   </tr>
                   <tr>
                     <td><label><font size="+1"> صفحة العمليات 16</font>
                       <input type="radio" name="RadioGroup5" onclick="page_opreation16()" value="radio" id="RadioGroup5_1" />
                       </label></td>
                   </tr>
          
                  
                 </table>
               </form>
                <div style="background-color:#969696;">
    <table width="50%" style="background-color:#E9E9E9" border="1">
  <tr>
  <div id="up"></div>
    <td><div id="reportes"></div></td>
  </tr>
</table></div>
               
             </div>
          </div>
        </div>
      </div>
    </div>
</div></td></tr></table></tr>
<input type="hidden" id="termss_ws"  value=""/>
</table>

<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
</script>
</body>

</html>