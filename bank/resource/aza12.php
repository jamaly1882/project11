
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../dad/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="../dad/SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script src="../dad/SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../dad/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="../dad/SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<link href="../dad/SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
		var up8= document.getElementById("ns").value;
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
</head>

<body>

<table  border="1"   align="center">
  <tr>
    <td width="1178" height="586" bgcolor="#007FAA">
    

<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">الباب الاول</li></ul>
    
 <center> المــــــــــــــــوارد والاستخــــــــــــــدامات </center>    
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent" align="right" >
      <div id="TabbedPanels2" class="TabbedPanels">
<div class="TabbedPanelsContentGroup">
  <div class="TabbedPanelsContent" align="right">
            <div id="Accordion1" class="Accordion" tabindex="0">
              <div class="AccordionPanel">
                <div class="AccordionPanelTab">استرجاع حسب الاستمارة + استرجاع حسب التسوية</div>
                <div class="AccordionPanelContent" align="right" style="background:#99CCCC;">
               
                     <input name=""  type="button" value=" استرجع حسب التسوية" onclick="showtsweh()" />
                    <input id="idTsweh"  type="text" size="15" value=""  />
 <input name="" type="button" value=" استرجع حسب الاستمارة" onclick="show()" align="right" />
                    <input id="a"  type="text" size="15" value="" align="right"   />
             
 
 
                  <table width="1076" height="305" border="0">
                 
                 
                    <tr>
                     
                       <td width="1070" height="54" bgcolor="#99CCCC" align="right"> </td>
                    </tr>
             
            
                    <tr>
                      <td height="175" bgcolor="#A0A0A4" align="right"><div id="w"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#99CCCC" align="center" valign="middle"><hr  width="300"/> <input name="عرض" type="button" value="عــرض"  size="100" height="200" />
                      <input name="مسح" type="button" value="مسح"  size="100" height="200" /><input name="عرض" type="button" value="حفـظ"  size="100" height="200" /><input name="عرض" type="button" value="تعديل"  size="100" height="200" /></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel">
                <div class="AccordionPanelTab" align="right"> اجراء عملية التعديل وعملية الحذف بالنسبة للأستمارة</div>
                <div class="AccordionPanelContent" align="right" style="background:#99CCCC;">
                
                  <table width="1076" height="305" border="0">
                    <tr>
                 
                      <td  align="right" bgcolor="#AA9FAA"><input type="button" onclick="showastm()" value="select"/><input type="text" name="id"  id="supd" value="" size="15" />استرجع الاستمارة المراد تعديلهااوحذفها
                     <div id="asupd"></div>
                      </td>
                      
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#A0A0A4" align="right">
                     
  <table border="1"  align="right">
    <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="id"  id="ns" value="" size="32" /></td>
       <td align="right" bgcolor="#00BFAA">ادخل رقم الاستمارة المراد تعديلها</td>
    </tr>
    <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="name" id="np" value="" size="32" /></td>
       <td align="right" bgcolor="#00BFAA">bain:</td>
    </tr>
    <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree"  id="nd"value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">date:</td>
       </tr>
       <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree" id="nb" value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">bab:</td>
    </tr>
     <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree" id="nf" value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">fasl:</td>
    </tr>
     <tr>
<td bgcolor="#A0A0A4"><input type="text" name="degree" id="nbn" value="" size="32" /></td>
 <td  align="right" bgcolor="#00BFAA">band:</td>
    </tr>
     <tr>
     
      <td bgcolor="#A0A0A4"><input type="text" name="degree" id="nt" value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">type:</td>
    </tr>
     <tr>
     
      <td height="28" bgcolor="#A0A0A4"><input type="text" name="degree" id="ns" value="" size="32" /></td>
       <td  align="right" bgcolor="#00BFAA">sum:</td>
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
                      <td height="68" bgcolor="#99CCCC" align="center" valign="middle"><hr  width="300"/>
                       <input name="عرض" type="button" value="حـــــــــــــــــــــــــذف"  size="100" height="200" onclick="Delete()" />
                    <input name="عرض" type="button" value="تعديــــــــــــــــــــــــــل"  size="100" height="200" onclick="updata()" />
                    
                    </td>
                    </tr>
                  </table>
                 
                </div>
              </div>
              <div class="AccordionPanel">
                <div class="AccordionPanelTab" align="right">استرجاع حسب التاريخ للأستمارة</div>
                <div class="AccordionPanelContent" align="right" style="background:#99CCCC;">
                  <table width="1076" height="305" border="0">
                    <tr>
                      <td width="1070" height="54" bgcolor="#99CCCC" align="right"><p>
                        <input type="text"/>
                        <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">أدخل التاريخ ليوم وأحد </font></span></p>
                        <hr/>
                        <table width="548" border="0">
                          <tr>
                            <td width="144" bgcolor="#AAAAAA"><input type="text" id="into"/></td>
                            <td width="20" bgcolor="#EEEEEE"><center> <input type="button" value=" التاريخ" onclick="DATE()" />
                              <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4">الى</font></span>
                            </center></td>
                            <td width="144" bgcolor="#AAAAAA"><input type="text"  id="from"/>
                             </td>
                            <td width="16" bgcolor="#EEEEEE"><center>
                              <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">من</font></span>
                            </center></td>
                            <td width="190" bgcolor="#AAAAAA"><center>
                              <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">أدخل التاريخ لكثر من يوم</font></span>
                            </center></td>
                          </tr>
                          <tr></tr>
                        </table>
                        <p></p></td>
                    </tr>
                    <tr>
                      <td height="175" bgcolor="#AAAAAA" align="right"><div id="dd"></div></td>
                    </tr>
                    <tr>
                      <td height="68" bgcolor="#99CCCC" align="center" valign="middle"><hr  width="300"/>
                        <input name="عرض2" type="button" value="عــرض"  size="100" height="200" />
                        <input name="عرض2" type="button" value="حفـظ"  size="100" height="200" />
                        <input name="عرض2" type="button" value="تعديل"  size="100" height="200" /></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="AccordionPanel">
                <div class="AccordionPanelTab" align="right">استرجاع بحسب التسوية وتعديلها وحذفها </div>
                <div class="AccordionPanelContent" align="right" style="background:#99CCCC;">
                  <table width="1076" height="305" border="0">
                    <tr>
                      <td  align="right" bgcolor="#AA9FAA"><input type="button" onclick="showTSW()" value="select"/>
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
                      <td height="68" bgcolor="#99CCCC" align="center" valign="middle"><hr  width="300"/>
                        <input name="عرض3" type="button" value="حـــــــــــــــــــــــــذف"  size="100" height="200" onclick="DeleteTSW()" />
                        <input name="عرض3" type="button" value="تعديــــــــــــــــــــــــــل"  size="100" height="200" onclick="updataTSW()" /></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
      </div>
      </div>
    </div>
   
</div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
&nbsp;</td>
  
 </tr>
  
</table>

<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html>
