
<?php
include_once("connect_to_mysql.php");
$q = $_GET['q'];

$sqlCommand = "SELECT `Num_tsw`, `Baian_text`, `Date_tsw`, `Bab_rs`, `Fasl_rs`, `Band_rs`, `Type_rs`, `Sum_rs` FROM `data_resurs` WHERE Num_tsw=$q"; 
echo  '<table width="1071" height="129" border="1"  bgcolor=""  >
                        <tr>
                        <td width="263" height="52" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">القيمة</font></span></center></td>
                          <td width="97" height="52" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4">النوع</font></span>
                          </center></td>
                          <td width="93" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البند</font></span></center></td>
                          <td width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:&quot;Arabic Transparent&quot;"><font size="4">الفصل</font></span>
                          </center></td>
                          <td width="79" align="center" bgcolor="#99FFFF"><center>
                            <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4"> الباب</font></span>
                          </center></td>
                          <td width="142" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">التاريخ</font></span></center></td>
                          <td width="177" align="center" bgcolor="#99FFFF"><center><span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">البيـــــــــــــــان</font></span></center></center></td>
                          <td colspan="2" align="right" bgcolor="#99FFFF"><center>
                          <span style="COLOR: #800000; font-family:Arabic Transparent"><font size="4">رقـــــــم التسوية</font></span>
                          </center></center>&nbsp;</td>
                        </tr>
						</table>';
$query = mysqli_query($myConnection , $sqlCommand) or die (mysqli_error());  
while ($row = mysqli_fetch_array($query)) { 
   echo'  
   <table width="1071" height="80" border="1"  bgcolor=""  >

                        <tr>
                         <td  bgcolor="#FFFFFF">'.$row["Sum_rs"].'</td>
                          <td  bgcolor="#FFFFFF"  width="80" align="center"> '.$row["Type_rs"].'</td>
                          <td bgcolor="#FFFFFF"  width="80" align="center">'. $row["Band_rs"].'</td>
                          <td bgcolor="#FFFFFF"  width="80" align="center">'.$row["Fasl_rs"].'</td>
                          <td bgcolor="#FFFFFF"  width="80" align="center"> '.$row["Bab_rs"].'</td>
                          <td bgcolor="#FFFFFF"  width="140" align="center">'.$row["Date_tsw"].' </td>
                         <td bgcolor="#FFFFFF" width="177" align="right">'.$row["Baian_text"].' </td>
						  <td bgcolor="#FFFFFF" width="90" align="center">'.$row["Num_tsw"].'</td>
                        </tr>
                      </table>';
	
} 
 
?>
<html>
<head>
</head>
<body>

</body>
</html>